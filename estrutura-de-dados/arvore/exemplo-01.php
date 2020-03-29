<?php

/**
 * SplHeap -- Classe Abstrata
 * SplMinHeap -- Organiza os valores do maior para o menor
 * SplMaxHeap -- Organiza os valores do menor para o maior
 * 
 * 2i+1 (filho da esquerda)
 * 2i+2 (filho da direita)
 */

class FuncionarioHeap extends SplHeap
{
    protected function compare($valor1, $valor2)
    {
        return $valor1['salario'] - $valor2['salario'];
    }
}

$funcHeap = new FuncionarioHeap();

$funcHeap->insert([
    'nome' => 'Elton Oliveira',
    'salario' => 1000
]);

$funcHeap->insert([
    'nome' => 'Monica Lima',
    'salario' => 500
]);

$funcHeap->insert([
    'nome' => 'Antonni Eduardo',
    'salario' => 3000
]);

$funcHeap->insert([
    'nome' => 'Fernando Lima',
    'salario' => 100
]);

$funcHeap->insert([
    'nome' => 'Heliton Oliveira',
    'salario' => 800
]);

$funcHeap->insert([
    'nome' => 'Eduardo Lima',
    'salario' => 10
]);

foreach ($funcHeap as $func) {
    echo "O funcionário: ".$func['nome']." ganha R$".$func['salario']."<br>";
}
