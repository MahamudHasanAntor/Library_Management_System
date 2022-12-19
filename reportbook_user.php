<?php

@include 'config.php';

if(isset($_POST['confirm'])){
    
   
   $bookid = mysqli_real_escape_string($conn, $_POST['bookid']);
   $bookname = mysqli_real_escape_string($conn, $_POST['bookname']);
   $bookdetail = ($_POST['bookdetail']);
  


   $select = " SELECT * FROM booklist WHERE bookid = '$bookid'  ";
  

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

         $insert = "INSERT INTO reportbook (bookid, bookname, bookdetail) VALUES
         ('$bookid','$bookname','$bookdetail')";
        $query =  mysqli_query($conn, $insert);
  
     
         header('location:reportbook_user.php');
      
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
    <title>Report Book</title>
</head>
<style>
    a:link{
        text-decoration:none;
    }
</style>
<body>
<div>
    <h2>Book Report</h2></br>
  
       <form action="reportbook_user.php" method="post" name="myForm" onsubmit="return validateForm()">
            <label></label><input type="text" name="bookname"placeholder="enter book name"/><br>
            <label></label><input  type="number" name="bookid" placeholder="enter book id"/></br>
            <label></label><input  type="text"  name="bookdetail"placeholder="enter book problem"/></br>
            <input type="submit" name="confirm" value="Confirm"/><br>
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