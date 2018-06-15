<?php namespace App\Lib\Singleton;
class Singleton{

    private static $instance = null;
    public $object = [];

    private function __construct() {  }


    public function __clone()
    {
        throw new \Exception('erreur vous ne pouvez pas cloner cette objet');
    }

    public static function boot(){

        if(  static::$instance == null ) static::$instance = new self() ;

        return static::$instance ;
    }

    public function setObject($obj,$index)
    {
        $this->object[$index] = $obj ;
    }

    public function getObject($index)
    {
        return $this->object[$index];
    }

}