<?php

define('ERROR', 9);
define('WARNING', 5);
define('NOTICE', 1);

$logPrioridade = new SplPriorityQueue();
$logPrioridade->insert('Alguem logou no sistema', NOTICE);
$logPrioridade->insert('Espaço de disco cheio', ERROR);
$logPrioridade->insert('Alguem tentou logar com sistema errado', WARNING);

while (!$logPrioridade->isEmpty()) {
    $dados = $logPrioridade->extract();
    echo $dados."<pre>";
}