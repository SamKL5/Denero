<?php

class NewClass extends ParentClass implements InterfaceOne
{
    private static  $instance;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance()
    {
        if(empty(self::$instance)) self::$instance= new static;
        return self::$instance;
    }
}