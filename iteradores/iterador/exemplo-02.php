<?php

class Alfabeto implements Iterator
{
    protected $_current;
    protected $_key;

    public function rewind()
    {
        $this->_current = 'a';
        $this->_key = 1;
    }

    public function current()
    {
        return $this->_current;
    }

    public function key()
    {
        return $this->_key;
    }

    public function next()
    {
        $this->_current++;
        $this->_key++;
        return $this->_current;
    }

    public function valid()
    {
        return ($this->key() <= 26);
    }    
}

$alfabeto = new Alfabeto();

foreach ($alfabeto as $chave => $valor) {
    echo "$chave => $valor <br>";
}