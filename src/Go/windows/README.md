## windows下开发
- [call cmd.exe](call_cmd.md) 调用cmd.exe并隐藏窗口

- go 基本命令及使用
   - package main 包归属 package关键字 main 执行程序
   - import 要导入的代码包
   - 示例  package main
        
        import (
        	"fmt"
        )
        
        func main() {
        	fmt.println("hello, world")
        }
        
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