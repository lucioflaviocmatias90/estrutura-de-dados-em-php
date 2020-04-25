<?php

$array = [ 
  'Elton', 
  'Monica', 
  'Marcelo', 
  'Maria', 
  'João',
  'Fernando', 
  'Mauricio', 
  'Paulo', 
  'Amanda'
];

try {
    $obj = new CachingIterator(new ArrayIterator($array));

    foreach ($obj as $value) {
        echo $value . PHP_EOL;
    }
} catch (\Exception $ex) {
    echo $ex->getMessage();
}
