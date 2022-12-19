
<?php

@include 'config.php';

if(isset($_POST['add'])){
    
   $bookname = mysqli_real_escape_string($conn, $_POST['bookname']);
   $bookid = mysqli_real_escape_string($conn, $_POST['bookid']);
   $bookdetail = ($_POST['bookdetail']);
   $bookauthor = ($_POST['bookauthor']);
   $bookpub = ($_POST['bookpub']);
   $bookedi = ($_POST['bookedi']);
   $bookprice = ($_POST['bookprice']);
   $bookquantity = ($_POST['bookquantity']);
   $bookimage = ($_FILES['bookimage']['name']);
   $bookimage_tmp_name= $_FILES['bookimage']['tmp_name'];
   $bookimage_folder='uploaded_img/'.$bookimage;

   

   $select = " SELECT * FROM booklist WHERE bookid = '$bookid' && bookname= '$bookname' ";
  

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{
   

      if($bookname != $bookdetail){
         $error[] = ' not matched!';
      }else{
         $insert = "INSERT INTO booklist(bookname, bookid, bookdetail, bookauthor, bookpub, bookedi, bookprice, bookquantity, bookimage) VALUES
         ('$bookname','$bookid','$bookdetail','$bookauthor','$bookpub','$bookedi','$bookprice','$bookquantity','$bookimage')";

       
        $query =  mysqli_query($conn, $insert);
        if($query)
        {
           move_uploaded_file($bookimage_tmp_name,$bookimage_folder);
           $message[] ='new product update successfully';
        }
        else{
           $message[]='could not add product';
        }
        // var_dump( $query);
        // die();
         header('location:addbook.php');
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
    <link rel="stylesheet" href="form/style.css">
    <title>Add Book</title>
</head>
<style>
   a:link{
      text-decoration:none;
   }
</style>
<body>

    <div>
        <h2 >ADD Book</h2></br>
       <form action="addbook.php" method="post" name="myForm" onsubmit="return validateForm()">
            <label></label><input type="text" name="bookname" placeholder="book name"><br>
            <label></label><input  type="number" name="bookid" placeholder="book id"/></br>
            <label></label><input  type="text" name="bookdetail"placeholder="book details"/></br>
            <label></label><input type="text" name="bookauthor" placeholder="book author"/></br>
            <label></label><input type="text" name="bookpub" placeholder="book publication"/></br>
            <label></label><input type="number" name="bookedi" placeholder="book edittion"/></br>
            <!--<div>Branch:<input type="radio" name="branch" value="AIUB"/>AIUB<div style="margin-left:80px"><input type="radio" name="branch" value="Others"/>Others</div>
            </div>-->
            <label></label><input  type="number" name="bookprice" placeholder="book price"/></br>
            <label></label><input type="number" name="bookquantity" placeholder="book quantity"/></br>
            <label>Book Photo</label><input  type="file" accept="image/jpg , image/jpeg , image/png "name="bookimage"/></br>
            </br>
   
            <input type="submit" value="ADD BOOK" name="add" /><br>
            <a href="admin_page.php" class="btn">Admin Home page</a>
            </br>
            </br>
        </form>
    </div>
    <script>
     function validateForm() {
     let x = document.forms["myForm"]["bookid"].value;
     if (x == "") {
     alert("Book ID must be filled out");
     return false;
     }
    let y = document.forms["myForm"]["bookname"].value;
    if (y == "") {
    alert("Book Name must be filled out");
    return false;
    }
}
</script>
    
</body>
</html>