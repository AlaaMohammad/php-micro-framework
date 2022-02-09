<?php
include 'C:\wamp64\www\php-micro-framework\model\Product.php';
class ProductController
{
    public function view(){
        $products  = new Product();
        $data  = $products->view();
        require 'C:\wamp64\www\php-micro-framework\views\products\get-product.view.php';
    }
}

echo 'products';

$product = new ProductController();
$product->view();