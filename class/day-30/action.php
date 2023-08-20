<?php
require_once 'vendor/autoload.php';

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/Home.php';
    }

    elseif ($_GET['page'] == 'about' )
    {
        include 'pages/about.php';
    }

    elseif ($_GET['page'] == 'signin' )
    {
        include 'pages/signin.php';
    }

    elseif ($_GET['page'] == 'user-signin' )
    {

        $auth = new \App\classes\Auth($_POST);
        $message = $auth->signin();

        include 'pages/signin.php';
    }


    elseif ($_GET['page'] == 'logout' )
    {

        $auth = new \App\classes\Auth();
        $message = $auth->signOut();


    }
}

