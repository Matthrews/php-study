<?php
//PHP 支持以下几种数据类型:
//
//String（字符串）
//Integer（整型）
//Float（浮点型）
//Boolean（布尔型）
//Array（数组）
//Object（对象）
//NULL（空值）
//Resource（资源类型）

// PHP var_dump() 函数返回变量的数据类型和值：

// Integer
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
echo "<br>";
$x = 0b11; // 二进制数
var_dump($x);

// Float
echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);

// Boolean
echo "<br>";
$x = true;
var_dump($x);
echo "<br>";
$x = false;
var_dump($x);
echo "<br>";

// Array
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

// Object

/**
 * 在 PHP 中，对象必须声明。
 * 首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。
 */
class Car
{
    private string $color;

    public function __construct($color)
    {
        return $this->setColor($color);
    }

    /**
     * getColor
     * @return mixed
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * setColor
     * @param mixed $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

echo "<br>";
$car = new Car('red');
var_dump($car);
echo "<br>";
echo $car->getColor();

echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);

// PHP 资源类型
// PHP 资源 resource 是一种特殊变量，保存了到外部资源的一个引用。
// 常见资源数据类型有打开文件、数据库连接、图形画布区域等。

$fp = fopen("foo","w");
echo get_resource_type($fp).PHP_EOL;



