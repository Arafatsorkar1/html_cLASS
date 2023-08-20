<?php

//echo 'Hello World';

if ($_GET['page']== 'home')
{
   include 'pages/home.php';
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


