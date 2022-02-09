<?php
include 'model/Model.php';

class Product extends Model
{
    public function view(){
        $data = ['name' =>'samsung'];
      return $data;
    }
    public function edit(){

    }
}