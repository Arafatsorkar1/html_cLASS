<?php

//echo 'Hello World';
require_once 'vendor/autoload.php';
use App\classes\product;

if ($_GET['page']== 'home')
{
    $Product =new product();
    $products= $Product->index();
   include 'pages/home.php';
}
elseif ($_GET['page']=='product-details')
{
    $Product =new product();
    $productDetails= $Product->getProductDetails($_GET['id']);
    include 'pages/product-details.php';
}







elseif ($_GET['page']== 'about')
{
    include 'pages/about.php';
}


elseif ($_GET['page']== 'contact')
{
    include 'pages/contact.php';
}

elseif ($_GET['page']== 'portfolio')
{
    include 'pages/portfolio.php';
}


