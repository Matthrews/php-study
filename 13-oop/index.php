<?php

//析构函数 − 析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。
//析构函数往往用来做"清理善后" 的工作（例如在建立对象时用new开辟了一片内存空间，应在退出前在析构函数中用delete释放）。


class Site
{
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function setUrl($par)
    {
        $this->url = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }

    function setTitle($par)
    {
        $this->title = $par;
    }
}

$runoob = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("Google 搜索");

$runoob->setUrl('www.runoob.com');
$taobao->setUrl('www.taobao.com');
$google->setUrl('www.google.com');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();


// PHP 构造函数
//PHP 5 允许开发者在一个类中定义一个方法作为构造函数，语法格式如下：
//
//void __construct ([ mixed $args [, $... ]] )

// 在上面的例子中我们就可以通过构造方法来初始化 $url 和 $title 变量：
//function __construct( $par1, $par2 ) {
//    $this->url = $par1;
//    $this->title = $par2;
//}

//现在我们就不需要再调用 setTitle 和 setUrl 方法了：
$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();

// PHP 析构函数
//PHP 5 引入了析构函数的概念，这类似于其它面向对象的语言，其语法格式如下：
//
//void __destruct ( void )

class MyDestructibleClass
{
    function __construct()
    {
        print "构造函数\n";
        $this->name = "MyDestructibleClass";
    }

    function __destruct()
    {
        print "销毁 " . $this->name . "\n";
    }
}

$obj = new MyDestructibleClass();


// PHP 访问控制

//public（公有）：公有的类成员可以在任何地方被访问（默认）
//protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
//private（私有）：私有的类成员则只能被其定义所在的类访问。


//PHP 接口
//使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
//
//接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
//
//接口中定义的所有方法都必须是公有，这是接口的特性。
//
//要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。
//类可以实现多个接口，用逗号来分隔多个接口的名称。


//PHP 常量
//可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
//
//常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。
//
//自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字（如 self，parent 或 static）。

class MyClass
{
    const constant = '常量值';

    function showConstant()
    {
        echo self::constant . PHP_EOL;
    }
}

echo MyClass::constant . PHP_EOL;

$classname = "MyClass";
echo $classname::constant . PHP_EOL; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . PHP_EOL; // 自 PHP 5.3.0 起


// PHP 抽象类
//任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。
//
//定义为抽象的类不能被实例化。
//
//被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
//
//继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。
//例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。

abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    public function printOut()
    {
        print $this->getValue() . PHP_EOL;
    }

    abstract protected function getValue();

    // 普通方法（非抽象方法）

    abstract protected function prefixValue($prefix);
}

class ConcreteClass1 extends AbstractClass
{

    public function prefixValue($prefix): string
    {
        return "{$prefix}ConcreteClass1";
    }

    protected function getValue(): string
    {
        return "ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue(): string
    {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix): string
    {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;

//此外，子类方法可以包含父类抽象方法中不存在的可选参数。
//例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则也是可以正常运行的。


// PHP Static 关键字

//声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
//
//静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）
class Foo {
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

print Foo::$my_static . PHP_EOL;
$foo = new Foo();

print $foo->staticValue() . PHP_EOL;


// PHP Final 关键字
//如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。

class BaseClass {
    public function test() {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called"  . PHP_EOL;
    }
}

class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called"  . PHP_EOL;
    }
}
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()



// 要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct()
class BaseClazz {
    function __construct() {
        print "BaseClass 类中构造方法" . PHP_EOL;
    }
}
class SubClass extends BaseClazz {
    function __construct() {
        parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
        print "SubClass 类中构造方法" . PHP_EOL;
    }
}
class OtherSubClass extends BaseClazz {
    // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClazz();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();







