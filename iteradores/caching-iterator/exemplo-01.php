<?php

/*
    A primeira caracteristica, o iterator irá ler o próximo valor em memória
  antes que seja necessário. Isso é muito útil para descobrir se o iterador
  possui mais itens disponíveis.
    A segunda caracteristica é armazenar todos os valores em cache todos os
  valores que ele retorna. Quando vc precisa buscar iteradores antigos, que
  já forma lidos, vc pode buscar pelo método "getCache()" ou pela funciona-
  lidade [] fornecida pelo ArrayAccess.
    Um método muito útil é o "hasNext()", onde o interador retornará verda-
  deiro ou falso se existir mais items a serem percorrido, assim saberemos
  se chegamo ao último elemento.
*/

$alfa = new ArrayIterator(range('A', 'Z'));
$iterator = new CachingIterator($alfa);

foreach ($iterator as $value) {
    if (!$iterator->hasNext()) {
        echo "Esta é a última letra do alfabeto: ";
    }

    print $value.PHP_EOL;
}
