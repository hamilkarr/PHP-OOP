<?php
function foo() {
  return 'Hello World';
}
// $foo = fn () => "Hello World";
// var_dump(Closure::fromCallable('foo'));

class A {
  private $message = 'Hello World';
}

$foo = fn () => $this->message;
var_dump($foo->call(new A()));