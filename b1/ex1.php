<?php
// xay dung form truyen vao 2 so a, b
// yeu cau:
/**
 * hiển thị ra tất cả các số chẵn và số nguyên tố từ 1 -> a
 * hiển thị ra tất cả các số lẻ và số chính phương 0 -> b
 */

//  check số nguyên tố
function check_prime($a)
{
    for ($i = 2; $i <= sqrt($a); $i++) {
        if ($a % $i == 0) {
            return false;
        }
    }
    return true;
}

// hiển thị số nguyên tố
function show_prime($start = 1, $a)
{
    for ($i = $start; $i <= $a; $i++) {
        if (check_prime($i))
            echo $i, '<br>';
    }
}

// check số chính phương
function find_square_number($n)
{
    $flag = 0;

    $i = 0;
    while ($i <= $n) {
        if (pow($i, 2) == $n) {
            $flag = 1;
            break;
        }
        $i++;
    }

    return $flag;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $a = $_POST['number_a'];
    $b = $_POST['number_b'];
    $errors = [];

    if (empty($a)) {
        $errors['a'] = 'Vui lòng nhập số a';
    }

    if (empty($b)) {
        $errors['b'] = 'Vui lòng nhập số b';
    }

    if (empty($errors)) {
        $NtArr = [];

        for ($i = 2; $i <= sqrt($a); $i++) {
            if ($a % $i == 0) {
                // khong phai so nguyen to
            } else {
                $NtArr[] = [$i];
            }
        }

        echo '<h1>Số nguyên tố từ 1 -> ' . $a . ':</h1>';
        show_prime(1, $a);

        // kiem tra so chinh phương
        echo '<h1>Số chính phương từ 0 -> ' . $b . ':</h1>';

        $i = 1;
        $check = 0;
        $result = [];
        while ($i < $b) {
            $check = find_square_number($i);
            if ($check == 1) {
                $result[] = $i . " ";
            }
            ++$i;
        }

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    } else {
        echo '<div class="alert alert-danger">Vui lòng kiểm tra lại giá trị nhập vào</div>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Nhập vào số a</label>
                        <input type="number" name="number_a" placeholder="Nhap vao so a" class="form-control">
                        <p style="color:red"><?= !empty($errors['a']) ? $errors['a'] : false ?></p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="">Nhập vào số b</label>
                        <input type="number" name="number_b" placeholder="Nhập vào số b" class="form-control">
                        <p style="color:red"><?= !empty($errors['b']) ? $errors['b'] : false ?></p>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary">Đồng ý</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>