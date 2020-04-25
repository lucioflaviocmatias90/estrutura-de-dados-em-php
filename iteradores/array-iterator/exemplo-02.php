<?php

// ArrayObject
$array = [ 'preco' => 1.25 ];
$arrayObject = new ArrayObject($array);
$iterator = $arrayObject->getIterator();

var_dump($iterator->valid());

// Flags
$iterator2 = new ArrayIterator();
$iterator2->setFlags(ArrayIterator::ARRAY_AS_PROPS);
$iterator2->foo = 'bar';

print_r($iterator2);

$iterator3 = new ArrayIterator();
$iterator3->bar = 'foo';

print_r($iterator3);
