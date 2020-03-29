<?php

$filaPrioridade = new SplPriorityQueue();
$filaPrioridade->insert('Elton Oliveira', 2);
$filaPrioridade->insert('Antonni Lima', 5);
$filaPrioridade->insert('Mônica Lima', 1);
$filaPrioridade->insert('Francisco Castro', 3);
$filaPrioridade->insert('Maria Varela', 6);

while (!$filaPrioridade->isEmpty()) {
    $dado = $filaPrioridade->extract();
    echo $dado."<br>";
}
