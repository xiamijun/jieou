<?php
/**
 * Created by PhpStorm.
 * User: XJ
 * Date: 2017/3/31
 * Time: 10:01
 */
/**
 * 第二重
 */
namespace test2;

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
    protected $_db;
    protected $_filesystem;
    protected $_session;
    public function Set($db,$filesystem,$session){
        $this->_db=$db;
        $this->_filesystem=$filesystem;
        $this->_session=$session;
    }
}

$db=new DB(1,2);
$filesystem=new FileSystem(3,4);
$session=new Session(5,6);
$writer=new Writer();
$writer->Set($db,$filesystem,$session);
