<?php

use Illuminate\Support\Carbon;

class Crush
{
    public $name, $year_of_birth, $relation, $address, $email;

    public function __construct($name, $year_of_birth, $relation, $address, $email)
    {
        $this->name = $name;
        $this->year_of_birth = $year_of_birth;
        $this->relation = $relation;
        $this->address = $address;
        $this->email = $email;
    }

    public function age()
    {
        return date('Y') - $this->year_of_birth;
    }

    public function check_age_marry()
    {
        if ($this->age() >= 18) {
            echo 'true';
        } else {
            echo 'False';
        }
    }

    public function show_information()
    {
        echo 'Tên: ' . $this->name . '<br/>';
        echo 'năm sinh: ' . $this->year_of_birth . '<br/>';
        echo 'mối quan hệ: ' . $this->relation . '<br/>';
        echo 'Địa chỉ: ' . $this->address . '<br/>';
        echo 'Email: ' . $this->email . '<br/>';
        echo 'Tuổi: ' . $this->age() . '<br/>';
        $this->check_age_marry();
    }
}

$crush = new Crush('Nguyễn Duy Kiên', '2004', 'Chủ thân', 'Hà Lội', 'ndkdzvl@gmail.com');
$crush->show_information();
