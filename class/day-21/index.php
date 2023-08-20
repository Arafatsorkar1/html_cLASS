<?php
require_once 'vendor/autoload.php';
//use App\classes\Statment;
use App\classes\Student;


// $arafat = new Statment();
// $arafat->index();


 $student = new Student();
 $students = $student->getAllStudents();
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<table border="1" width="1200" >

    <tr align="center">
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
    </tr>
    <?php
    foreach ($students as $student) {
    ?>
    <tr align="center">
        <td> <?php echo $student['name'] ?> </td>
        <td> <?php echo $student['email'] ?> </td>
        <td> <?php echo $student['phone'] ?> </td>
        <td> <?php echo $student['city'] ?> </td>
        <td> <?php echo $student['Address'] ?> </td>
    </tr>

    <?php } ?>

<!-- --><?php // ?><!--   -->





</table>

</body>
</html>
