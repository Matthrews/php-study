<?php

// ## if/else

$t = date("H");
echo $t . PHP_EOL;
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

[$name, $age] = ['Jack', null];  // 解构赋值

// 普通写法
if ($name == 'Jack') {
    $age = 20;
}

// 免 if 写法
$name == 'Jack' and $age = 20;

[$a, $b] = [null, null];
$name == 'Jack' and ([$a, $b] = ['value', 'value']); // 多变量赋值写法

// ## switch


echo PHP_EOL;
$fav_color = "blue";
switch ($fav_color) {
    case "red":
        echo "你喜欢的颜色是红色!";
        break;
    case "blue":
        echo "你喜欢的颜色是蓝色!";
        break;
    case "green":
        echo "你喜欢的颜色是绿色!";
        break;
    default:
        echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
}

//倘若你忘敲了 case 'a'，case 'b',case 'c' 后的 break，结果将是将代码中的每一条输出语句都输出。
//
//倘若你只敲了 case 'c' 后的 break, 结果将会是输出包含 case 'c' 之前的所有输出语句。
//
//讲到这里大家应该明白了：原来 switch 语句不遇到 break 将不会自己"拐弯"