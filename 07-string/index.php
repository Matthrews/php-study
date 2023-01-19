<?php

$str = "Hello world!";
echo $str;
echo PHP_EOL;

// 并置运算符 (.) 用于把两个字符串值连接起来

$s = 'hello';
$s2 = ', php';
echo $s . $s2;
echo PHP_EOL;

// strlen() 函数返回字符串的长度（字节数）
echo strlen("Hello world!");
echo PHP_EOL;


// strpos() 函数用于在字符串内查找一个字符或一段指定的文本
// 如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
echo strpos("Hello world!","world");
echo PHP_EOL;

// 中文下的字符在 UTF-8 下是 3 个字符长度，在 gbk 下是2个字符长度
echo strlen("中文字符");   // 输出 12
echo PHP_EOL;
echo mb_strlen("中文字符",'utf-8');  // 输出 4
echo PHP_EOL;

// mb_strpos 按字处理，strpos 按字符处理
echo strpos('开始23测试ceshi', '测试') . PHP_EOL;  // 输出 8
echo mb_strpos('开始23测试ceshi', '测试') . PHP_EOL;  // 输出 4

echo strpos('123测试ceshi', '测试') . PHP_EOL;  // 输出 3
echo mb_strpos('123测试ceshi', '测试') . PHP_EOL;  // 输出 3