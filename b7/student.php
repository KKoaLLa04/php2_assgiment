<?php

class Student extends Wd18301
{
    private $name, $id;

    public function __construct($phongHoc = 'p208', $caHoc = 1, $name = 'kien', $id = 'ph11111')
    {
        parent::__construct();
        $this->name = $name;
        $this->id = $id;
    }
    public function show_info()
    {
        echo 'name: ' . $this->name . '<br/>';
        echo 'id: ' . $this->id . '<br/>';
        echo 'phong hoc: ' . $this->phongHoc . '<br/>';
        echo 'ca hoc: ' . $this->caHoc . '<br/>';
    }
}
