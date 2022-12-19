<?php

@include 'config.php';

if(isset($_POST['submit'])){
   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:addperson.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add person</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="form/style.css">

</head>
<style>
   a:link{
      text-decoration:none;
   }
</style>
<body>
   
<div class="form-container">

   <form action="" method="post">
       <h2>ADD PERSON</h2><br>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div  method="post" name="myForm" onsubmit="return validateForm()">
      <input type="text" name="name" required placeholder="enter your name"><br>
      <input type="email" name="email" required placeholder="enter your email"><br>
      <input type="text" name="password" required placeholder="enter your password"><br>
      <input type="text" name="cpassword" required placeholder="confirm your password"><br>
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select><br>
      <input type="submit" name="submit" value="register now" class="form-btn"><br>
      </div>
      <a href="admin_page.php">Admin Home Page</a>
      
    

</div>
<script>
function validateForm() {
  let x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}
</script>

</body>
</html>