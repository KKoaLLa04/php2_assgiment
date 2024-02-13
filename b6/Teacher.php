<?php

class Teacher extends Person
{
    private $salary, $timeToTeach;

    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }

    public function setTimeToTeach($time)
    {
        return $this->timeToTeach = $time;
    }

    public function totalSalary()
    {
        return $this->salary * $this->timeToTeach;
    }

    public function show_info()
    {
        echo $this->name . '<br/>';
        echo $this->address . '<br/>';
        echo $this->age() . '<br/>';
        echo $this->email . '<br/>';
        echo $this->phone . '<br/>';
        echo $this->totalSalary() . '<br/>';
    }
}
