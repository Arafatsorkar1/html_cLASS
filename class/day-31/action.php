<?php
require_once 'vendor/autoload.php';

use App\classes\OddEven;
use App\classes\Series;
use App\classes\Auth;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/Home.php';
    }

    elseif ($_GET['page'] == 'series' )
    {
        include 'pages/series.php';
    }

    elseif ($_GET['page'] == 'series-result' )
    {
        $series = new \App\classes\Series($_POST);
        $result = $series->series();
        include 'pages/series.php';
    }

    elseif ($_GET['page'] == 'sumOfSeries' )
    {
        include 'pages/sumOfSeries.php';
    }

    elseif ($_GET['page'] == 'sum-of-series-result' )
    {
        $series = new \App\classes\Series($_POST);
        $result = $series->sumOfSeries();
        include 'pages/sumOfSeries.php';
    }
    elseif ($_GET['page'] == 'oddEven' )
    {

        include 'pages/oddEven.php';
    }
    elseif ($_GET['page'] == 'odd-even-result' )
    {
        $oddEven = new OddEven($_POST);
        $result = $oddEven->getOddEven();

        include 'pages/oddEven.php';
    }
    elseif ($_GET['page'] == 'login' )
    {

        include 'pages/login.php';
    }
     elseif ($_GET['page'] == 'user-login' )
        {
            $auth = new Auth($_POST);
            $message =$auth->checkUser();
            include 'pages/login.php';
        }


    elseif ($_GET['page'] == 'logout' )
    {
        $auth = new Auth($_POST);
        $message =$auth->logout();
        include 'pages/login.php';
    }




}

