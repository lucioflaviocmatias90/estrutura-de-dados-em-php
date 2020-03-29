<?php

$array = [];
$array[5] = 'Elton';

$fixedArray = new SplFixedArray(10);
$fixedArray[5] = 'Antonny';
$fixedArray->setSize(12);
$fixedArray[10] = 'Monica';
$fixedArray[11] = 'Guilherme';

echo "Array sem SPL ".count($array)." Com ".count($fixedArray);