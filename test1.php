<?php
/**
 * Created by PhpStorm.
 * User: XJ
 * Date: 2017/3/31
 * Time: 9:49
 */
/**
 * 第一重
 */
namespace test1;

class DB{
    public function __construct($arg1,$arg2){
        echo 'constructed'.PHP_EOL;
    }
}

class FileSystem{
    public function __construct($arg1,$arg2){
        echo 'constructed'.PHP_EOL;
    }
}

class Session{
    public function __construct($arg1,$arg2) {
        echo 'constructed'.PHP_EOL;
    }
}

class Writer{
    public function __construct()
    {
        $db=new DB(1,2);
        $filesystem=new FileSystem(3,4);
        $session=new Session(5,6);
    }
}

$writer=new Writer();
