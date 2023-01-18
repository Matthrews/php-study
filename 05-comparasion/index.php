<?php

//松散比较：使用两个等号 == 比较，只比较值，不比较类型。
//严格比较：用三个等号 === 比较，除了比较值，也比较类型。

if (42 == "42") {
    echo '1、值相等';
}

echo PHP_EOL; // 换行符

if (42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、类型不相等';
}

// 更多请参考：https://www.runoob.com/php/php-types-comparisons.html
