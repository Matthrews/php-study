<?php

//Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4.0 起，PHP 实现了代码复用的一个方法，称为 traits。
//通过逗号分隔，在 use 声明列出多个 trait，可以都插入到一个类中。
trait Hello {
    public function sayHello() {
        echo "Hello";
    }
}

trait World {
    public function sayWorld() {
        echo ", World!";
    }
}

class SayHelloWorld {
    use Hello, World;

    public function syaHelloWorld() {
        echo "  —— By " . __CLASS__;
    }
}

$obj = new SayHelloWorld();
$obj -> sayHello();
$obj -> sayWorld();
$obj -> syaHelloWorld();

