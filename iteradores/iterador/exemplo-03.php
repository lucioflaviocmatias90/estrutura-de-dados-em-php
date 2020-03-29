<?php

include 'exemplo-02.php';

class FiltroVogais extends FilterIterator
{
    public $vogais = [
        'a', 'e', 'i', 'o', 'u'
    ];

    public function accept()
    {
        return in_array($this->current(), $this->vogais);
    }
}

echo "<br><br>";

$vogais = new FiltroVogais($alfabeto);

foreach ($vogais as $chave => $valor) {
    echo "$chave => $valor <br>";
}