<?php

class Animal
{
    protected $__name;

    public function setName($name)
    {
        return $this->__name = $name;
    }

    public function showName()
    {
        echo $this->__name;
    }
}
