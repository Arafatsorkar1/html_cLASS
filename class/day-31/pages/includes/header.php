<?php
if(session_status()==PHP_SESSION_NONE)
session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>9090</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>

<?php
if(isset($_SESSION['auth_id']))
{
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav mx-auto">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>

            <li><a href="action.php?page=series" class="nav-link">Series</a></li>
            <li><a href="action.php?page=sumOfSeries" class="nav-link">summation</a></li>
            <li><a href="action.php?page=oddEven" class="nav-link">Odd Even</a></li>
<!--            <li><a href="action.php?page=login" class="nav-link">Log In</a></li>-->

            <li><a href="action.php?page=logout" class="nav-link">Log Out</a></li>
        </ul>
    </div>
</nav>
<?php }?>
