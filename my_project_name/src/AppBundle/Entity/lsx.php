<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lsx
 *
 * @ORM\Table(name="lsx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\lsxRepository")
 */
class lsx
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=true, unique=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sex", type="bigint", nullable=true)
     */
    private $sex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age", type="bigint", nullable=true)
     */
    private $age;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time", type="time", nullable=true)
     */
    private $time;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return lsx
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sex.
     *
     * @param int|null $sex
     *
     * @return lsx
     */
    public function setSex($sex = null)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex.
     *
     * @return int|null
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set age.
     *
     * @param int|null $age
     *
     * @return lsx
     */
    public function setAge($age = null)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int|null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set time.
     *
     * @param \DateTime|null $time
     *
     * @return lsx
     */
    public function setTime($time = null)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time.
     *
     * @return \DateTime|null
     */
    public function getTime()
    {
        return $this->time;
    }
}
