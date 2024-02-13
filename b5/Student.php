<?php

class Student
{
    private $name, $address, $year_of_birth, $email, $phone, $math, $physical, $mechinal;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setYear($year_of_birth)
    {
        $this->year_of_birth = $year_of_birth;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setMath($math)
    {
        $this->math = $math;
    }

    public function setPhysical($physical)
    {
        $this->physical = $physical;
    }

    public function setMechinal($mechinal)
    {
        $this->mechinal = $mechinal;
    }

    public function average_mark()
    {
        return ($this->math + $this->physical + $this->mechinal) / 3;
    }

    public function age()
    {
        return date('Y') - $this->year_of_birth;
    }

    public function show_information()
    {
        echo 'Họ tên: ' . $this->name . '<br/>';
        echo 'Địa chỉ: ' . $this->address . '<br/>';
        echo 'Tuổi: ' . $this->age() . '<br/>';
        echo 'Email: ' . $this->email . '<br/>';
        echo 'SĐT: ' . $this->phone . '<br/>';
        echo 'Điểm: ' . number_format($this->average_mark(), 2) . '<br/>';
    }
}


$student = new Student();
$student->setName('Nguyễn Duy Kiên');
$student->setAddress('Hà Lội');
$student->setYear('2004');
$student->setEmail('ndkdzvl@gmail.com');
$student->setPhone('0368031178');
$student->setMath(10);
$student->setPhysical(9.5);
$student->setMechinal(5);
$student->show_information();
