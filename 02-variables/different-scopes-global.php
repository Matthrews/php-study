<?php

$x = 5;
$y = 10;

/** test
 * 1. 在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字
 * 2. PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量
 * @return void
 */
function test(): void {
    global $x, $y;
    $y += $x;
//    $GLOBALS['y'] += $GLOBALS['x'];
}

test();
echo $y;