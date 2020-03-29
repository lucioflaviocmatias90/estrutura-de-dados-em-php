<?php

class MinhaClasseStorage extends SplObjectStorage
{
    public function getHash($objeto)
    {
        return $objeto->type;
    }
}

$obj1 = new StdClass();
$obj1->type = "tipo1";
$obj2 = new StdClass();
$obj2->type = "tipo2";
$obj3 = new StdClass();
$obj3->type = "tipo3";

$teste = new MinhaClasseStorage();
$teste->attach($obj1);
$teste->attach($obj2);
$teste->attach($obj3);
echo "<pre>";
print_r($teste);
