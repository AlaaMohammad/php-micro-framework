<?php

class Router
{
    public function handelRequest($uri, $method)
    {
        switch (true) {

            case $uri === '/php-micro-framework/products/get' && $method === 'GET':
                require 'C:\wamp64\www\php-micro-framework\controller\ProductController.php';
                break;

            default:
                http_response_code(404);
                require 'C:\wamp64\www\php-micro-framework\views\errors\404.php';
                break;

        }

    }
}