<?php
/* Final */

final class A {
  public $message;

  final public function foo() {

  }
}

class B extends A {
  public function foo() {

  }
}

// 상속을 막을때 final 키워드 사용