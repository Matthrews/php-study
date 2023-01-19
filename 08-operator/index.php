<?php

// ## PHP 算术运算符
// 多了一个并置运算符

// a . b    并置	 连接两个字符串    "Hi" . "Ha"  HiHa

// PHP7+ 新增整除运算符 intdiv()

var_dump(intdiv(10, 3));

// ## PHP 赋值运算符

// a .= b

$x = "Hello";
$x .= " world!";
echo $x; // 输出Hello world!


// ## PHP 递增/递减运算符

// ## PHP 比较运算符

// x <> y   不等于
// x >= y   大于等于

// ## PHP 逻辑运算符

//x and y 与
//x or y  或
//x xor y   异或
//x && y
//x || y
//! x

// ## PHP 数组运算符
//x + y	    集合	    x 和 y 的集合
//x == y	相等	    如果 x 和 y 具有相同的键/值对，则返回 true
//x === y	恒等	    如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true
//x != y	不相等	如果 x 不等于 y，则返回 true
//x <> y	不相等	如果 x 不等于 y，则返回 true
//x !== y	不恒等	如果 x 不等于 y，则返回 true

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow", "a" => "cyan");
$z = $x + $y; // $x 和 $y 数组合并
// 如果两个数组他们的 key 值相同它的返回值会使用第一个数组的 value 值
var_dump($z);
//var_dump($x == $y);
//var_dump($x === $y);
//var_dump($x != $y);
//var_dump($x <> $y);
//var_dump($x !== $y);

// ## PHP 三元运算符

// 普通写法
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo $username, PHP_EOL;

// PHP 5.3+ 版本写法
$username = $_GET['user'] ?: 'nobody';

// PHP 7+ 版本写法
$username = $_GET['user'] ?? 'nobody';
echo $username, PHP_EOL;

// ## PHP 组合比较符(PHP7+)

//PHP7+ 支持组合比较符（combined comparison operator）也称之为太空船操作符，符号为 <=>。
//组合比较运算符可以轻松实现两个变量的比较，当然不仅限于数值类数据的比较。

//$c = $a <=> $b;
//    如果 $a > $b, 则 $c 的值为 1。
//    如果 $a == $b, 则 $c 的值为 0。
//    如果 $a < $b, 则 $c 的值为 -1。


// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

echo PHP_EOL;

// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

echo PHP_EOL;

// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1

echo PHP_EOL;


// ## 运算符优先级

// 优先级： &&  >  =  >  and
// 优先级： ||  >  =  >  or

$c = &$x;  // c 是 x 的引用, PHP中没有指针的概念
echo $c;
