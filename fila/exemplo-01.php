<?php

/*
* Manipulador de Eventos 
*/
$manipuladorEventos = new SplQueue();
$manipuladorEventos->enqueue('funcao1');
$manipuladorEventos->enqueue('funcao2');

while(!$manipuladorEventos->isEmpty()){
    
    $evento = (string)$manipuladorEventos->dequeue();
    if(function_exists($evento)){
      $evento($manipuladorEventos);   
    }    
}

function funcao1(SplQueue $manipuladorEventos){
    echo "Função 1 Chamada <br> Adicionando função 3 para o manipulador de eventos";
    $manipuladorEventos->enqueue('funcao3');
    $manipuladorEventos->enqueue('Olá Mundo');   
}

function funcao2(SplQueue $manipuladorEventos){
    echo "Função 2 Chamada <br>";
}

function funcao3(SplQueue $manipuladorEventos){
    $mensagem = $manipuladorEventos->dequeue();
    echo "Função 3 Chamada MSG: $mensagem <br>";
}
 