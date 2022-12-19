<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['teacher_name'])){
   
}
if(!isset($_SESSION['teacher_email'])){
   
}
if(!isset($_SESSION['user_type'])){
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<style>
    body{
        padding:20px;
    }
    h3{
        border:100px;
       
        background-color:whitesmoke;
    }
</style>
<body>
<h3>Profile</h3>
<h4>Name      : <span><?php echo $_SESSION['teacher_name'] ?></span></h4>
<h4>Email     : <span><?php echo $_SESSION['teacher_email'] ?></span></h4>


</body>
</html>