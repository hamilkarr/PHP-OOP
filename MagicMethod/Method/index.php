<?php

class A
{
  public function __call($name, $args) 
  {
    var_dump($name, $args);
  }

  public static function __callStatic($name, $args)
  {
   var_dump($name, $args);
  }

  public function __invoke(...$args) 
  {
    var_dump($args);
  }
}

$a = new A();
// $a->foo('Hello World');
$a('hello world','how are you');

