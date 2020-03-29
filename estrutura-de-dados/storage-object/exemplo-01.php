<?php

$obj1 = new stdClass();
$obj1->id = 1;
$obj1->name = "Marcos";

$obj2 = new stdClass();
$obj2->id = 2;
$obj2->name = "Matheus";

$obj3 = $obj1; // referência

$obj4 = new stdClass();
$obj4->id = 3;
$obj4->name = "Marcela";

$storage = new SplObjectStorage();

$storage->attach($obj1);
$storage->attach($obj2);
$storage->attach($obj3);
$storage->attach($obj4);

echo "Quantidade: ".$storage->count()."<br>";

$storage->rewind();

while ($storage->valid()) {

    $index = $storage->key();
    $object = $storage->current();

    echo $index." => ".json_encode($object)."<br>";

    $storage->next();
}
