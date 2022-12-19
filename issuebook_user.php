<?php

@include 'config.php';

if(isset($_POST['confirm'])){
    
   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $problem = mysqli_real_escape_string($conn, $_POST['problem']);



   $select = " SELECT * FROM user_form WHERE id = '$id' && email='$email' ";
  

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

         $insert = "INSERT INTO problem (email, problem) VALUES
         ('$email','$problem')";
        $query =  mysqli_query($conn, $insert);
  
     
         header('location:problem.php');
      
   }else{
       echo "Book not found";
   }

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form/style.css">
    <title>Issue Book</title>
</head>
<style>
    a:link{
        text-decoration:none;
    }
</style>
<body>
<div>
     <h2>Book Issue</h2></br>
     <form action="issuebook_user.php" method="post" name="myForm" onsubmit="return validateForm()">
     <label></label><input  type="text" name="bookname"placeholder="enter the book name"/></br>
     <label></label><input  type="number" name="bookid" placeholder="enter the book id"/></br>
     <label></label><input type="text"name="issue"placeholder="enter the book issue"/></br>
     <br>

    <input type="submit" name="confirm" value="SUBMIT"/><br>
    <a href="user_page.php" class="btn">User Home page</a>

    </form>
</div>
<script>
    function validateForm() {
  let x = document.forms["myForm"]["bookid"].value;
  if (x == "") {
    alert("Book ID must be filled out");
    return false;
  }
}
</script>


</body>
</html>