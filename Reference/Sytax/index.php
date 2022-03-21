<?php
$message = "hello world";
$sayHello =& $message;

$sayHello = "Who are You?";
// var_dump($message); // -> Who are You?

function foo()
{
  // global $message;
  $message =& $GLOBALS['message'];
  $message = 'Bye';
}

foo();
// var_dump($message);

function foo2(&$message)
{
  $message = "hello world";  
}
foo2($message);
// var_dump($message);

class myClass {
  public $message = "Hello world";
  public function &getMessage() {
    return $this->message;
  }
}

$myclass = new myClass();
$sayHello =& $myclass->getMessage();
$sayHello = "Bye";
var_dump($myclass->message);

$sayHello =& $message;
unset($sayHello);

var_dump($message);