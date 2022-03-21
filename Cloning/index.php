<?php

$class1 = new stdClass();
$class2 = new stdClass();

//var_dump($class1 == $class2);
// var_dump($class1 === $class2); // 메모리의 주소값까지 비교

// $class3 = $class1; // 주소값을 복사


// $class3->sayHello ="Hello World";
// var_dump($class1->sayHello);

$class3 = clone $class1;
var_dump($class3 === $class1);

$array1 = new ArrayObject([1,2,new ArrayObject([3,4])]);
$array2 = clone $array1;

var_dump($array1[2] === $array2[2]);