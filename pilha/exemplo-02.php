<?php

function calcula (SplStack $pilha) {
    $valor1 = $pilha->pop();
    $valor2 = $pilha->pop();
    $op = $pilha->pop();

    switch ($op) {
        case "soma":
            $pilha->push($valor1+$valor2);
            break;

        case "sub":
            $pilha->push($valor1-$valor2);
            break;

        case "mult":
            $pilha->push($valor1*$valor2);
            break;

        case "div":
            $pilha->push($valor1/$valor2);
            break;
    }

    if ($pilha->count > 1) {
        calcula($pilha);
    }
}

$pilha = new SplStack();
$pilha->push("soma");
$pilha->push(10);
$pilha->push(15);

calcula($pilha);

echo "O resultado é: ".$pilha->pop();