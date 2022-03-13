<?php

/* Static Binding */
class A {
  // public static function foo() {
  public function foo() {
    static::who();    
  }

  // public static function who() {
  public function who() {
    var_dump(__CLASS__);
  }
}

class B extends A {
  public function test() {
    parent::foo();
    // self::foo();
    // A::foo();
  }

  public function who() {
    var_dump("Hello, World");
    var_dump (__CLASS__);
  }
}

$b = new B();
$b->test();