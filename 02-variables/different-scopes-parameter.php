<?php
/**
 * myTest
 *
 * 1. 参数是通过调用代码将值传递给函数的局部变量
 * @param $x
 * @return void
 */
function myTest($x): void
{
    $x++;
    echo $x;
}

myTest(56);
