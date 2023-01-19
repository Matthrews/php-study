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
echo PHP_EOL;

//倘若你忘敲了 case 'a'，case 'b',case 'c' 后的 break，结果将是将代码中的每一条输出语句都输出。
//
//倘若你只敲了 case 'c' 后的 break, 结果将会是输出包含 case 'c' 之前的所有输出语句。
//
//讲到这里大家应该明白了：原来 switch 语句不遇到 break 将不会自己"拐弯"


// ## PHP 数组

//在 PHP 中，有三种类型的数组：
//
//数值数组 - 带有数字 ID 键的数组(ID 键总是从 0 开始)
//关联数组 - 带有指定的键的数组，每个键关联一个值
//多维数组 - 包含一个或多个数组的数组z

### PHP 数值数组

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// 获取数组的长度
echo PHP_EOL . count($cars) .PHP_EOL;

// 遍历数组
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] .PHP_EOL;
}
//对数值数组进行升序和降序排列应使用
//sort() - 对数组进行升序排列
//rsort() - 对数组进行降序排列


### PHP 关联数组
$ages = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

// 遍历关联数组
foreach ($ages as $key => $value) {
    echo "Key = " . $key . ", Value = " . $value;
    echo PHP_EOL;
}

//对关联数组进行升序和降序排列应使用
//
//asort() - 根据关联数组的值，对数组进行升序排列
//ksort() - 根据关联数组的键，对数组进行升序排列
//arsort() - 根据关联数组的值，对数组进行降序排列
//krsort() - 根据关联数组的键，对数组进行降序排列

echo ksort($ages);
var_dump($ages);

// 自 5.4 起可以使用短数组定义语法，用 [] 替代 array()
//$arr = array('value1','value2','value3');
$arr = ['value1','value2','value3'] ;
//$arr = array('key1'=>'value1','key2'=>'value2','key3'=>'value3');
$arr = ['key1'=>'value1','key2'=>'value2','key3'=>'value3'];