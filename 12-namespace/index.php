<?php

//PHP 命名空间(namespace)是在 PHP 5.3 中加入的，目的是解决重名问题，PHP中不允许两个函数或者类出现相同的名字，否则会产生一个致命的错误。
//
//PHP 命名空间可以解决以下两类问题：
//
//    - 用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
//    - 为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性。

// 默认情况下，所有常量、类和函数名都放在全局空间下，就和PHP支持命名空间之前一样。

// 可以在在单个文件中定义多个命名空间
// 全局代码必须用一个不带名称的 namespace 语句加上大括号括起来


// 必须在其它所有代码之前声明命名空间
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection
    { /* ... */
        public static function start()
        {
            echo "Connection is bootstrapping..." . PHP_EOL;
        }

        public static function finish()
        {
            echo "Connection finished..." . PHP_EOL;
        }
    }

    function connect()
    { /* ... */
    }
}

// 全局代码
namespace {
    session_start();
    $conn = MyProject\connect();
    $status = MyProject\CONNECT_OK;
    echo MyProject\Connection::start();
}

// 与目录和文件的关系很像，PHP 命名空间也允许指定层次化的命名空间的名称
// namespace MyProject\Sub\Level;  //声明分层次的单个命名空间