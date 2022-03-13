<?php
/* Static */
class A {
  public static $message = "hello World";

  public static function foo() {
    // return $this->message;
    return self::$message;
  }
}

var_dump(A::foo());


