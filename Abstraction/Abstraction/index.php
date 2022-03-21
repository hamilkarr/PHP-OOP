<?php

function foo(A $a) 
{
  return $a->foo();
}

abstract class A 
{
  protected $message ='Hello World';
  
  public function sayHello() {
    return $this->message;
  }
  
  abstract public function foo();
}

class B extends A 
{
  public function foo()
  {
    return __CLASS__;
  }  
}

$b = new B();
var_dump(foo($b));

