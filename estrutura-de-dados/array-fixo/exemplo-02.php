<?php

echo "<h3>Retornando o nosso array de exemplo:</h3>";

$array = ['Elton', 'Carro', 'Idade', 10 => 'Rua'];

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<h3>Retornando o array utilizando a classe SplFixedArray:</h3>";

$converte = SplFixedArray::fromArray($array);

echo "<pre>";
print_r($converte);
echo "</pre>";

echo "<h3>Retornando o array de uma maneira mais amigável, passando 'false' como segundo parâmetro do método estático fromArray:</h3>";

$converte = SplFixedArray::fromArray($array, false);

echo "<pre>";
print_r($converte);
echo "</pre>";
