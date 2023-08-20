<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>





<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand"><img src="assets/img/burger.jpg" alt="" height="50px" width="50px"></a>
        <ul class="navbar-nav mx-auto">
            <?php if (isset($_SESSION['id'])) { ?>
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=about" class="nav-link">About</a></li>
            <li><a href="action.php?page=about" class="nav-link">Portfolio</a></li>
            <li><a href="action.php?page=about" class="nav-link">Contact</a></li>
            <li><a href="action.php?page=logout" class="nav-link">Logout</a></li>

            <?php } else{ ?>

            <li><a href="action.php?page=signin" class="nav-link">Sign-in</a></li>
            <?php }  ?>


<!--            <li class="dropdown">-->
<!--                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>-->
<!--                <ul class="dropdown-menu">-->
<!---->
<!---->
<!---->
<!--                    <li><a href="action.php?page=category" class="dropdown-item"> Name</a></li>-->
<!---->
<!---->
<!---->
<!--                </ul>-->
<!--            </li>-->
        </ul>
    </div>
</nav>
