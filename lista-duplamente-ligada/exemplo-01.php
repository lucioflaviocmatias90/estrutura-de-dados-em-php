<?php

$listaPessoas = new SplDoublyLinkedList();
$listaPessoas->push('Elton');
$listaPessoas->push('Antonni');
$listaPessoas->push('Monica');
$listaPessoas->push('Francisco');

echo "Quantidade de elementos: ".$listaPessoas->count()."<br>";
echo "Elemento topo:".$listaPessoas->top()."<br>";
echo "Primeiro elemento:".$listaPessoas->bottom()."<br>";

echo "<br>";

$listaPessoas->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($listaPessoas->rewind(); $listaPessoas->valid(); $listaPessoas->next()) {
    echo "Nomes: ".$listaPessoas->current()."<br";
}
