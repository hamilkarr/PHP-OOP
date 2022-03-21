<?php
function foo(A $a)
{
  return $a->foo();
}

interface A
{
  public function foo();
}

interface AA extends A {
  public function sayHello();
}

class B implements AA
{
  public function foo()
  {
    return __CLASS__;
  }

  public function sayHello() {
    return "Hello World";
  }
}

$b = new B();
var_dump(foo($b));