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

echo PHP_EOL;
echo <<<EOF
        <h1>我的第一个标题</h1>
        <p>我的第一个段落。</p>
EOF;

/**
 * PHP 定界符
 * heredoc
 *
 * 1.以 <<<EOF 开始标记开始，以 EOF 结束标记结束，结束标记必须顶头写，不能有缩进和空格，且在结束标记末尾要有分号 。
 * 2.开始标记和结束标记相同，比如常用大写的 EOT、EOD、EOF 来表示，但是不只限于那几个(也可以用：JSON、HTML等)，只要保证开始标记和结束标记不在正文中出现即可。
 * 3.位于开始标记和结束标记之间的变量可以被正常解析，但是函数则不可以。在 heredoc 中，变量不需要用连接符 . 或 , 来拼接，如下：
 */

echo PHP_EOL;
$name="runoob";
$a= <<<EOF
=====>
abc$name
123
EOF;
echo $a;


/**
 * PHP中有两种定界符：heredoc(双引号定界符）和nowdoc(单引号定界符）
 * PHP定界符是从PHP4.0版本开始支持的
 * 使用定界符不会存在转义
 */
echo PHP_EOL;
echo '<input type="checkbox" class="onoffswitch-checkbox" id="inline" checked>';
echo PHP_EOL;
echo "<input type=\"checkbox\" class=\"onoffswitch-checkbox\" id=\"inline\" checked>";
echo PHP_EOL;
$here = <<<HERE
<input type="checkbox" class="onoffswitch-checkbox" id="inline" checked>
HERE;
echo $here;
echo PHP_EOL;

$now = <<<NOW
<input type="checkbox" class="onoffswitch-checkbox" id="inline" checked>
NOW;
echo $now;






