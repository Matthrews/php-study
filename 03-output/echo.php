<?php

echo 'Hello, ', 'Matthew ', 'and John!';

echo PHP_EOL;

$y = print 'only one string';

echo PHP_EOL;

echo $y;

echo PHP_EOL;

print('123');

echo PHP_EOL;

$z = print_r($x = 8, true);

printf('The returned value is %s.', $z);

/**
 * cho 和 print 区别:
    - echo - 可以输出一个或多个字符串
    - print - 只允许输出一个字符串，返回值总为 1
 *
 * 提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1
 * echo是语言结构(language construct)，而并不是真正的函数，因此不能作为表达式的一部分使用。
 */

