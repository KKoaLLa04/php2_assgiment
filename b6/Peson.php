<?php

class Person
{
    protected $name, $address, $year, $email, $phone;

    public function setName($name)
    {
        return $this->name = $name;
    }


    public function setAddress($address)
    {
        return $this->address = $address;
    }


    public function setYear($year)
    {
        return $this->year = $year;
    }


    public function setEmail($email)
    {
        return $this->email = $email;
    }



    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }

    public function age()
    {
        return Date('Y') - $this->year;
    }

    public function show_info()
    {
        echo $this->name . '<br/>';
        echo $this->address . '<br/>';
        echo $this->year . '<br/>';
        echo $this->age() . '<br/>';
        echo $this->email . '<br/>';
        echo $this->phone . '<br/>';
    }
}
