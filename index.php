<?php
  header('content-type:text/html; charset=euc-kr');

class A
  {
    public $message = "Hello World";

    public function foo() {
      return $this->message;
    }
  };

  $a = new A();
  //var_dump($a->foo()); 

  class B extends A {
  }

  $b = new B();
  //var_dump($b->foo());

  function foo(A $a) {
    return $a->foo();
  }

  // var_dump(foo($b));

  /* Context */
  class C extends A {
    public function foo() {
      // return new self();
      // C
      // return new static();
      // D
      return new parent();
      // A
    }
  }

  class D extends C {

  }
  $d = new D();
  // var_dump($d->foo());

  /* Constants */
  class E {
    const MESSAGE = 'Hello, World';
    public function getConstants() {
      return self::MESSAGE;
    }

    public function getClassName() {
      return __CLASS__;
    }
  }

  $e = new E();
  // var_dump($e->getConstants());
  var_dump(E::MESSAGE);

  var_dump($e->getClassName());

  /* instanceof */
?>