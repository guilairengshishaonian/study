<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\lsx;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    // 添加数据
    public function createAction(request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = new lsx();
        $product->setName('Keyboard4');
        $product->setSex('1');
        $product->setAge('1');
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->redirect('/default/show');
    }
    // 展示数据
    public function showAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository(lsx::class);
        $query = $repository->createQueryBuilder('lsx')
            ->getQuery();
        $products = $query->getArrayResult();

        return $this->render('default/default.html.twig',['products' => $products]);
    }
    // 修改数据
    public function updateAction($productId)
    {
        $entityManager = $this->getDoctrine()
            ->getManager();
        $product = $entityManager
            ->getRepository(lsx::class)
            ->find($productId);
        $product->setName('lsx!');
        $entityManager->flush();

        return $this->redirect('/default/show');
    }
    // 删除数据
    public function deleteAction($productId)
    {
        $entityManager = $this->getDoctrine()
            ->getManager();
        $product = $entityManager
            ->getRepository(lsx::class)
            ->find($productId);
        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirect('/default/show');
    }
}
