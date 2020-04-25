<?php

/*
  Criando uma nova classe "addVirgula" extendendo a classe CachingIterator
*/

class addVirgula extends CachingIterator
{
  public function current()
  {
      if (parent::hasNext()) {
        return parent::current().', ';
      } else {
        return parent::current().'.';
      }
  }
}

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
  $obj = new addVirgula(new ArrayIterator($array));

  foreach ($obj as $value) {
    echo $value;
  }
} catch (\Exception $ex) {
  echo $ex->getMessage();
}