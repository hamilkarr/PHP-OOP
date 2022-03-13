<?php

/* Visibility */
class A {
  public $public = 'public';
  protected $protected ='protected';
  private $private = 'private';
  public function __construct() {}
}

// $a = new A();
// var_dump($a->public);

class B extends A {
  private $message ='Hello, World';

  private function __construct() {
    parent::__construct();
    var_dump($this->message);
  }
  public static function getInstance() {

    return new self();
  }
}

// $b = new B();
// var_dump($b->foo());

$b = B::getInstance();
// $b = new B();
