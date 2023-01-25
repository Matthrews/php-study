<?php
// PHP 命名空间中的类名可以通过三种方式引用：

namespace Foo\Bar;
include 'file.php';

const FOO = 2;

function foo()
{
}

class foo
{
    static function func()
    {
    }
}

/* 非限定名称 */
foo(); // 解析为函数 Foo\Bar\foo
foo::func(); // 解析为类 Foo\Bar\foo ，方法为 func
echo FOO; // 解析为常量 Foo\Bar\FOO

/* 限定名称 */
func\foo(); // 解析为函数 Foo\Bar\Tou\foo
func\foo::func(); // 解析为类 Foo\Bar\func\foo,
// 以及类的方法 func
echo func\FOO; // 解析为常量 Foo\Bar\func\FOO

/* 完全限定名称 */
\Foo\Bar\foo(); // 解析为函数 Foo\Bar\foo
\Foo\Bar\foo::func(); // 解析为类 Foo\Bar\foo, 以及类的方法 func
echo \Foo\Bar\FOO; // 解析为常量 Foo\Bar\FOO



// 使用命名空间：别名/导入
//PHP 命名空间支持 有两种使用别名或导入方式：为类名称使用别名，或为命名空间名称使用别名。
//在PHP中，别名是通过操作符 use 来实现的.

// 导入操作是在编译执行的，但动态的类名称、函数名称或常量名称则不是。

// 1. 使用use操作符导入/使用别名
namespace foo;
use My\Full\Classname as Another;

// 下面的例子与 use My\Full\NSname as NSname 相同
use My\Full\NSname;

// 导入一个全局类
use \ArrayObject;

$obj = new namespace\Another; // 实例化 foo\Another 对象
$obj = new Another; // 实例化 My\Full\Classname　对象
NSname\subns\func(); // 调用函数 My\Full\NSname\subns\func
$a = new ArrayObject(array(1)); // 实例化 ArrayObject 对象
// 如果不使用 "use \ArrayObject" ，则实例化一个 foo\ArrayObject 对象

// 2. 一行中包含多个use语句
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // 实例化 My\Full\Classname 对象
NSname\subns\func(); // 调用函数 My\Full\NSname\subns\func

// 3. 导入和动态名称
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // 实例化一个 My\Full\Classname 对象
$a = 'Another';
$obj = new $a;      // 实际化一个 Another 对象


//命名空间的顺序
//自从有了命名空间之后，最容易出错的该是使用类的时候，这个类的寻找路径是什么样的了。

//名称解析遵循下列规则：

//2. 对完全限定名称的函数，类和常量的调用在编译时解析。例如 new \A\B 解析为类 A\B。
//2. 所有的非限定名称和限定名称（非完全限定名称）根据当前的导入规则在编译时进行转换。例如，如果命名空间 A\B\C 被导入为 C，那么对 C\D\e() 的调用就会被转换为 A\B\C\D\e()。
//3. 在命名空间内部，所有的没有根据导入规则转换的限定名称均会在其前面加上当前的命名空间名称。例如，在命名空间 A\B 内部调用 C\D\e()，则 C\D\e() 会被转换为 A\B\C\D\e() 。
//4. 非限定类名根据当前的导入规则在编译时转换（用全名代替短的导入名称）。例如，如果命名空间 A\B\C 导入为C，则 new C() 被转换为 new A\B\C() 。
//5. 在命名空间内部（例如A\B），对非限定名称的函数调用是在运行时解析的。例如对函数 foo() 的调用是这样解析的：
//5.1 在当前命名空间中查找名为 A\B\foo() 的函数
//5.2 尝试查找并调用 全局(global) 空间中的函数 foo()。
//6. 在命名空间（例如A\B）内部对非限定名称或限定名称类（非完全限定名称）的调用是在运行时解析的。下面是调用 new C() 及 new D\E() 的解析过程： new C()的解析:
//6.1 在当前命名空间中查找A\B\C类。
//6.2 尝试自动装载类A\B\C。

//new D\E()的解析:
//  在类名称前面加上当前命名空间名称变成：A\B\D\E，然后查找该类。
//  尝试自动装载类 A\B\D\E。
//为了引用全局命名空间中的全局类，必须使用完全限定名称 new \C()。


