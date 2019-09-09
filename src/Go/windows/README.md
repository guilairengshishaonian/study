## windows下开发
- [call cmd.exe](call_cmd.md) 调用cmd.exe并隐藏窗口

- go 基本命令及使用
   - package main 包归属 package关键字 main 执行程序
   - import 要导入的代码包
   - 示例  
        
        package main
        
        import (
        	"fmt"
        )
        
        func main() {
        	fmt.Println("hello, world")
        }
        注： println "P" 严格区分大小写
   - go version 查看go版本
   - go help 查看帮助命令
   - go get 语言包安装 
   - go fmt 工具格式化 
   - go build hello.go 构建都不执行 保存可执行文件
   - go run hello.go 直接执行输出结果
   - go install 全局命令
 - go 程序结构
   - 标识符   _ 空标识符   声明变量必须使用 
   - 关键字
   - 字面量
        数据类型的值 称为字面量
   - 分隔符：
        小数点、逗号、分号、冒号和省略号
   - 运算符
   - 注释
   - 常量
        const 可以省略类型
   - 赋值
        a ：= 20 
   - 变量
        var 
        
        局部 a := 1 等同于 var a = 1
        
        全局 var  不能使用 ：= 
  - go 基础数据类型
   - 运算
        两个不同的类型 不能运算
   - 字符串
   
        package main
           
        import (
         "fmt"
        )
        
        //字符串遍历   
        func main() {
        		s := "我是中国人"
        		for _, v := range s {
        			fmt.Printf("%c", v)
        		}
        	}
        	
        []byte  修改字符串中的字节
        
        []rune  修改字符串中的字符zcx
        
        strings.count  统计出现的频率
        
        strings.containsAny  strings.contains  子字符串包含
        
        strings.index  ASCII索引
        
        strings.indexRune  非ASCII 索引
        
        strings.replace  字符串替换 5个参数 strings.replace(a,b,c,d) a:源字符串 b：被替换的内容 c:替换的内容 d:匹配到第几个
        
        len([]rune) 统计字符数量
        
        utf8.RuneCountInString  
        
        strings.ToLower 字符全部转换为小写
        
        strings.ToUpper 字符全部转换为大写
        
        strings.trime 修剪 
        
        strings.split 分割
        
        swap 值交换
        
   - 流程控制
    - 条件语句
        
        