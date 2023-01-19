<?php

//PHP 超级全局变量
//
//超级全局变量在PHP 4.1.0之后被启用

//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

$x = 75;
$y = 25;
$z = 0;

function add()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $z;

//echo $_SERVER['PHP_SELF'] . PHP_EOL;
//echo $_SERVER['SERVER_NAME'] . PHP_EOL;
//echo $_SERVER['HTTP_HOST'] . PHP_EOL;
//echo $_SERVER['HTTP_REFERER'] . PHP_EOL;
//echo $_SERVER['HTTP_USER_AGENT'] . PHP_EOL;
//echo $_SERVER['SCRIPT_NAME'] . PHP_EOL;


//## while

//while - 只要指定的条件成立，则循环执行代码块
//do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环
//for - 循环执行代码块指定的次数
//foreach - 根据数组中每个元素来循环代码块

$i = 1;
while ($i <= 5) {
    echo PHP_EOL . "The number is " . $i;
    $i++;
}

//## for

for ($i = 1; $i <= 5; $i++) {
    echo PHP_EOL . "数字为 " . $i;
}

// ## foreach

echo PHP_EOL;
$x = array("Google", "Runoob", "Taobao");
foreach ($x as $value) {
    echo $value . PHP_EOL;
}
echo PHP_EOL;
$x = array(1 => "Google", 2 => "Runoob", 3 => "Taobao");
foreach ($x as $key => $value) {
    echo "key  为 " . $key . "，对应的 value 为 " . $value . PHP_EOL;
}

