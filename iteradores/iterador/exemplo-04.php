<?php

class FibonacciIterator implements Iterator
{
    protected $_previous;
    protected $_current;
    protected $_key;

    public function rewind()
    {
        $this->_previous = 1;
        $this->_current = 0;
        $this->_key = 0;
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
        $old_current = $this->_current;
        $this->_current += $this->_previous;
        $this->_previous = $old_current;

        $this->_key++;

        return $this->_current;
    }

    public function valid()
    {
        /**
         * Vamos utilizar a class LimitIterator para reduzir
         * a quantidade de items da resposta, senão vamos
         * dar "estouro de memória", senão deixariamos como 
         * está no exemplo abaixo:
         * 
         * return $this->_current < 50000;
         */

         return true;
    }
}

$fibonacci = new FibonacciIterator();
$fibonacci = new LimitIterator($fibonacci, 0, 25);

foreach ($fibonacci as $number) {
    echo $number."<br>";
}