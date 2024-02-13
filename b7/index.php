<?php

require_once 'Animal.php';
require_once 'Dogs.php';
require_once 'Wd18301.php';
require_once 'student.php';

$dog = new Dogs();
$dog->setName('dog');
$dog->showName();
echo '<br/>';
$dog->showInfo();
echo '<br/>';

$student = new Student();
$student->show_info();
