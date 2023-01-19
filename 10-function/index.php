<?php
//
//PHP 函数准则：
//
//函数的名称应该提示出它的功能
//函数名称以字母或下划线开头（不能以数字开头）

// Case1
function sayHello(): void
{
    echo 'Hello!';
}

sayHello();

// Case2
function sayHelloTo($name): void
{
    echo PHP_EOL . 'Hello, ' . $name . '!' . PHP_EOL;
}

sayHelloTo('John');

//Case3
function add($x, $y): int
{
    $total = $x + $y;
    return $total;
}

echo "1 + 16 = " . add(1, 16);

//Case4
// 可变参数的函数

function test(...$args) //定义可变参数函数，使用...实现
{
    $num = count($args);//统计参数个数
    echo PHP_EOL . "函数调用参数个数：" . $num . PHP_EOL;
    echo "函数参数详情：";
    foreach ($args as $arg) {
        echo $arg . "  ";
    }//遍历打印出参数
}

test("a");//一个参数
test("a", "b");//两个参数
test("a", "b", "c");//三个参数

