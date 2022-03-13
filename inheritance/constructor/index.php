<?php

/** Constuctor, Destuctor */

class A {
  public function __construct() {
    var_dump(__METHOD__);
  }
  public function __destruct() {
    var_dump(__METHOD__);
  }
}

// $a = new A(); // 생성자 호출
// unset($a); // 소멸자 호출
// var_dump('hello, world');

/* Constructor Parameters */
class B {
  public $message;
  public function __construct($message)  {
    $this->message = $message;
  }
}

$b = new B("Hello, World");


/* Inherit */
class C extends A {
  public function __construct() {
    parent::__construct();
  }
}

$c = new C();
