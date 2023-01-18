<?php
/**
 * myTest
 *
 * 1. 函数执行结束内部变量不删除
 * @return void
 */
function myTest(): void
{
    static $x = 0;
    echo $x;
    $x++;
    echo PHP_EOL;    // 换行符
}

myTest();
myTest();
myTest();