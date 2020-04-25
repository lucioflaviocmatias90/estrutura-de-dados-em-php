<?php

$it1 = new ArrayIterator(range('A', 'C'));
$it2 = new ArrayIterator(range('D', 'F'));

$mult = new AppendIterator();
$mult->append($it1);
$mult->append($it2);

foreach ($mult as $key => $value) {
    $itIndex = $mult->getIteratorIndex();
    printf("* (#%d) [%s] => %s <br>", $itIndex, $key, $value);
}
