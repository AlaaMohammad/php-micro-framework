<?php
include './core/Router.php';
$router = new Router();
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
var_dump($uri);
$router->handelRequest($uri,$method);