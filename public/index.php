<?php

use App\Controllers\PostController;

// echo getcwd()."<br>";

chdir(dirname(__DIR__));

require_once __DIR__."/../app/Controllers/PostController.php";

// echo dirname(__DIR__)."<br>";

// echo getcwd()."<br>";

// echo __DIR__;

$controller = new PostController();
$controller->display();