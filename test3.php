<?php
/**
 * Created by PhpStorm.
 * User: XJ
 * Date: 2017/3/31
 * Time: 10:12
 */
/**
 * 第三重
 */
namespace test3;

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

class Container{
    public $bindings;
    public function bind($abstract,$concrete){
        $this->bindings[$abstract]=$concrete;
    }
    public function make($abstract,$parameters=[]){
        return call_user_func_array($this->bindings[$abstract],$parameters);
    }
}

$container=new Container();
$container->bind('db',function ($arg1,$arg2){return new DB($arg1,$arg2);});
$container->bind('filesystem',function ($arg1,$arg2){return new FileSystem($arg1,$arg2);});
$container->bind('session',function ($arg1,$arg2){return new Session($arg1,$arg2);});

class Writer{
    protected $_db;
    protected $_filesystem;
    protected $_session;
    protected $container;
    public function __construct(Container $container)
    {
        $this->_db=$container->make('db',[1,2]);
        $this->_filesystem=$container->make('filesystem',[3,4]);
        $this->_session=$container->make('session',[5,6]);
    }
}

$writer=new Writer($container);