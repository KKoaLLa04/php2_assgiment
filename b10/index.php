<?php
session_start();
require_once 'common/helper.php';
require_once 'env.php';
require_once 'vendor/autoload.php';
require_once 'common/route.php';

use App\Controllers\ProductController;

$controller = new ProductController();
