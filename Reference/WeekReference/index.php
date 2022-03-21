<?php

// $messages = [
  //   'sayHello' => "Hello World"
  // ];
  // var_dump((object) $messages);
  
$class = new stdClass();
$weakRef = WeakReference::create($class);
var_dump($weakRef->get());

unset($class);

var_dump($weakRef->get());