<?php

class Student extends Person
{
    private $math, $physical, $chemical;

    public function setMath($math)
    {
        return $this->math = $math;
    }

    public function setPhysic($physical)
    {
        return $this->physical = $physical;
    }

    public function chemical($chemical)
    {
        return $this->chemical = $chemical;
    }

    public function average($score1, $score2, $score3)
    {
        return ($score1 + $score2 + $score3);
    }

    public function show_info()
    {
        echo $this->name . '<br/>';
        echo $this->address . '<br/>';
        echo $this->year . '<br/>';
        echo $this->age() . '<br/>';
        echo $this->email . '<br/>';
        echo $this->phone . '<br/>';
        echo $this->average($this->math, $this->physical, $this->chemical) . '<br/>';
    }
}
