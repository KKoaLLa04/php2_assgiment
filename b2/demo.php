<?php

// $arrayIndex = [3, 4, 5, 'a', 'b', null, false, true];

// echo '<pre>';
// print_r($arrayIndex);
// echo '</pre>';

// foreach ($arrayIndex as $value) {
//     echo $value . '<br/>';
// }


// function check_number($a)
// {
//     if ($a % 2 == 0) {
//         return true;
//     }

//     return false;
// }

// $a = 5;

// if (check_number($a)) {
//     echo $a . ' là sô chẵn';
// } else {
//     echo $a . ' là số lẻ';
// }

function information($name, $date_of_birth, $sex, $address, $id, $phone)
{
    $now = date('Y');
    $age = $now - $date_of_birth;

    echo "Fullname: " . $name . '<br/>';
    echo "age: " . $age . '<br/>';
    echo "sex: " . $sex . '<br/>';
    echo "address: " . $address . '<br/>';
    echo "id: " . $id . '<br/>';
    echo "phone: " . $phone . '<br/>';

    if ($age < 18) {
        echo $age . " CHETMOEMAYROI, DITUEMOI";
    } else {
        echo $age . " PHIT_DI_EM";
    }
}

information('Nguyễn DUy Kiên', 2004, 'female', 'Ninh Binh', '001405010025', '0368031178');
