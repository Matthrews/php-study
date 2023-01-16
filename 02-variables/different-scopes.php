<?php
function test(): void
{
    $a = 15;
    echo "内部输出结果：" . $a;
}
echo "外部输出结果：" . $a;  // 无法访问变量 a
echo PHP_EOL;
test();


