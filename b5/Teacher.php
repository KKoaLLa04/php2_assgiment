<?php

class Teacher
{
    private $name, $address, $year, $email, $phone, $money_work, $total_time;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setMoney($money_work)
    {
        $this->money_work = $money_work;
    }

    public function setTimeToWork($total_time)
    {
        $this->total_time = $total_time;
    }

    public function totalSalary()
    {
        return $this->money_work * $this->total_time;
    }

    public function age()
    {
        return date('Y') - $this->year;
    }

    public function show_information()
    {
        echo 'Họ tên: ' . $this->name . '<br/>';
        echo 'Địa chỉ: ' . $this->address . '<br/>';
        echo 'Tuổi: ' . $this->age() . '<br/>';
        echo 'Email: ' . $this->email . '<br/>';
        echo 'Phone: ' . $this->phone . '<br/>';
        echo 'Lương: ' . $this->totalSalary() . '<br/>';
    }
}

$teacher = new Teacher();

$teacher->setName('Nguyễn Duy Kiên');
$teacher->setAddress('Hà Lội');
$teacher->setYear('2004');
$teacher->setEmail('ndkdzvl@gmail.com');
$teacher->setPhone('0368031178');
$teacher->setMoney(200);
$teacher->setTimeToWork(36);
$teacher->show_information();
