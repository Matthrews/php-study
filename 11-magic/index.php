<?php

//有八个魔术常量它们的值随着它们在代码中的位置改变而改变。
//
//__LINE__
// 文件中的当前行号。
echo '这是第 " '  . __LINE__ . ' " 行' . PHP_EOL;

//__FILE__
//文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
echo '该文件位于 " '  . __FILE__ . ' " ' . PHP_EOL;

//__DIR__
//文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。
echo '该文件位于 " '  . __DIR__ . ' " ' . PHP_EOL;

//_FUNCTION__
//函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。
//在 PHP 4 中该值总是小写字母的。
function testFunc() {
    echo  '函数名为：' . __FUNCTION__ . PHP_EOL ;
}
testFunc();

//__CLASS__
//类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。
//在 PHP 4 中该值总是小写字母的。
class Student {
    function _print() {
        echo '类名为：'  . __CLASS__ . PHP_EOL;
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$stu = new Student();

$stu -> _print();


