<?php

class MinhaLista extends SplDoublyLinkedList {}

$listaFruta = new MinhaLista();
$listaFruta->push('Pera');
$listaFruta->push('Maçã');
$listaFruta->push('Banana');
$listaFruta->push('Goiaba');

for ($listaFruta->rewind(); $listaFruta->valid(); $listaFruta->next()) {
    echo $listaFruta->current(). "<br>";
}
