<?php

$array = [ 'Elton', 'Antonni', 'Monica', 'Felipe'];

$iterator = new ArrayIterator($array);

foreach ($iterator as $key => $value) {
    echo "$key => $value \n";
}