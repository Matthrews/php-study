<?php

// 常量名不需要加 $ 修饰符

// 设置常量，使用 define() 函数，函数语法如下：
// bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )

// 常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。

define("GREETING", "欢迎访问菜鸟教程", true);
const GREETING_2 = "欢迎访问菜鸟教程!";

echo GREETING, PHP_EOL, GREETING_2;
