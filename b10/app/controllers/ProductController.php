<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $data = $this->product->getProduct();
        return $this->render('product.list', compact('data'));
    }

    public function addProduct()
    {
        $msg = getFlashData('msg');
        $msg_type = getFlashData('msg_type');
        $errors = getFlashData('errors');
        $old = getFlashData('old');
        return $this->render('product.add', compact('msg', 'msg_type', 'errors', 'old'));
    }

    public function postProduct()
    {
        // check validate
        $errors = [];
        if (empty($_POST['title'])) {
            $errors['title'] = 'Tiêu đề không được để trống';
        }

        if (empty($_POST['description'])) {
            $errors['description'] = 'Mô tả không được để trống';
        }

        if (empty($_POST['price'])) {
            $errors['price'] = 'Giá không được để trống';
        }

        if (empty($_POST['quantity'])) {
            $errors['quantity'] = 'Số lượng không được để trống';
        }

        if (empty($_POST['content'])) {
            $errors['content'] = 'Nội dung không được để trống';
        }

        if (empty($_FILES['thumbnail']['name'])) {
            $errors['thumbnail'] = 'Vui lòng chọn ảnh minh họa';
        }

        if (empty($errors)) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $content = $_POST['content'];

            // Handle image
            $thumbnailName = $_FILES['thumbnail']['name'];
            $from = $_FILES['thumbnail']['tmp_name'];
            $to = 'public/uploads/' . $thumbnailName;
            move_uploaded_file($from, $to);

            $insertStatus = $this->product->insertProduct($title, $thumbnailName, $description, $price, $content, $quantity);
            setFlashData('msg', 'Thêm sản phẩm thành công');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Có lỗi xảy ra, vui lòng kiểm tra lại dữ liệu nhập vào');
            setFlashData('msg_type', 'danger');
            setFlashData('errors', $errors);
            setFlashData('old', $_POST);
        }
        header("Location: " . BASE_URL . 'add-product');
    }
}
