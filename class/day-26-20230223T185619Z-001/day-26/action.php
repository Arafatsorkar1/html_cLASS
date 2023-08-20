<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;



if (isset($_GET['page']))
{
    if ($_GET['page']== 'home')
    {
        include 'pages/home.php';
    }
}
elseif (isset($_POST['btn']))
{
    $fullName=new FullName();
    $result = $fullName->grtFullName();
   include 'pages/Home.php';
}