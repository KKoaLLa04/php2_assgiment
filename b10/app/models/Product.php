<?php

namespace App\Models;

use App\Models\BaseModel;

class Product extends BaseModel
{
    private $table = 'product';
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public function getProduct()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function insertProduct($title, $thumbnail, $description, $price, $content, $quantity)
    {
        $sql = "INSERT INTO `product`(`title`, `thumbnail`, `description`, `price`, `content`, `quantity`) VALUES ('$title','$thumbnail','$description','$price','$content','$quantity')";
        $this->setQuery($sql);
        $this->execute();
    }
}
