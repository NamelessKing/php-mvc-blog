<?php
namespace App\Controllers;

class PostController{
    
    protected $layout = "layout/index.tpl.php";
    
    public function __construct(){
        // echo "post cont created";
    } 
    
    public function display(){
        require $this->layout;
    } 
}