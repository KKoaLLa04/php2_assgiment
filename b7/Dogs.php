<?php
class Dogs extends Animal
{
    private $__leg = 4;

    public function setLeg($leg)
    {
        return $this->__leg = $leg;
    }

    public function showInfo()
    {
        echo "Con " . $this->__name . ' có ' . $this->__leg;
    }
}
