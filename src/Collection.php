<?php

namespace SuHyMeBlaS;

trait Collection
{
    private $itens = [];

    public function __construct(array $itens = [])
    {
        $this->itens = $itens;
    }

    public function offsetExists($offset)
    {
        return isset($this->itens[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->itens[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->itens[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->itens[$offset]);
    }

    public function getArray()
    {
        return $this->itens;
    }
}