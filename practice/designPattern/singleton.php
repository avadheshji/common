<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
/**
 * Rules to create Singleton class
 * 1. private static variable
 * 2. private constructor
 * 3. public static method return class single instance
 */
 class Singleton{

    private static $instance = null;

    private function __construct(){
        echo "connected";
        if (self::$instance) {
            throw new Exception("Singleton instance already exists.");
        }
    }

    public static function showInstance(){
        if(is_null(self:: $instance)){
          self::$instance = new Singleton();
          //can also use below
          //self::$instance = new self();
          //self::$instance = new Static();
        }else{
            echo "Already Created";
        }
        return self::$instance;
    }
    //prevent cloning
    public function __clone(){
      throw new Exception(" \n Singleton cannot be cloned.");
    }
    //prevent serialization
    public function __sleep()
      {
          throw new Exception("\n Singleton cannot be serialized.");
      }

    public function __wakeup()
    {
        throw new Exception("\n Singleton cannot be unserialized.");
    }
 }
 $a= singleton::showInstance();
 try {
    $b = clone $a;
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
   $c = serialize($a);
} catch (Exception $e) {
   echo $e->getMessage();
}

try {
   $d = unserialize(serialize($a));
} catch (Exception $e) {
   echo $e->getMessage();
}


 ?>
