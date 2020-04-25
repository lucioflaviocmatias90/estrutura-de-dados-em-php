<?php

/*
  Utilizando o conceito de CachingIterator do arquivo "exemplo-01.php"
*/

$alfa = new ArrayIterator(range('A', 'Z'));
$iterator = new CachingIterator($alfa, CachingIterator::FULL_CACHE);

foreach ($iterator as $value) {
}

echo "A quarta letra do alfabeto é {$iterator[3]}";
