<?php

//echo 'Hello World';
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\product;


$category = new Category();
$categories = $category->getAllCategories();

if ($_GET['page'] == 'home')
{
    $product= new product();
    $products= $product->getAllproducts();

   include 'pages/home.php';
}

  elseif  ($_GET['page'] == 'about')
{



   include 'pages/about.php';
}













