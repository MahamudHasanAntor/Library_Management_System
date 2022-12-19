<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
    body{
      background-color:whitesmoke;
   }
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
  Button {
  background-color: gray;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width: 80%;
  cursor: pointer;
}

<style>
body{
      background-color:whitesmoke;
   }
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
  Button {
  background-color: gray;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width: 80%;
  cursor: pointer;
}
</style>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a  class="active" href="admin_page.php">Admin Profile</a></li>
  <li style="float:right"><a href="login_form.php">Logout</a></li>
</ul>
<h2 align="center"></h2>
</p> 
<div class="container">
   <div class="row">
      <div class="col-md-3">
      <div >
      <a href="addbook.php"><Button class="admin-menu" id="menu">ADD BOOK</Button></a></br>
      <a href="api.php"><Button class="admin-menu" id="menu">ALL USER</Button></a></br>
      <a href="booklist.php"><Button class="admin-menu"id="menu">BOOK LIST</Button></a><br>
      <a href="bookreport.php"><Button class="admin-menu"id="menu"> BOOK REPORT</Button></a><br>
      <a href="bookrequest.php"><Button class="admin-menu" id="menu"> BOOK REQUESTS</Button></a><br>
      <a href="addperson.php"><Button class="admin-menu" id="menu"> ADD PERSON</Button></a><br>
      <a href="issuebook.php"><Button class="admin-menu" id="menu"> ISSUE BOOK</Button></a><br>
    </div>
    <footer>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_form.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
      <a href="admin_page.php" class="btn">Admin Home page</a>
    </footer>
 

      </div>
      <div class="col-md-9">
         <div class="row">
            <div class="col-md-6">
            <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ea earum totam voluptatem nobis impedit explicabo qui harum asperiores. Consectetur expedita repudiandae, quaerat enim vero molestiae doloribus rerum nemo quae.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, veritatis consequatur exercitationem animi aut, adipisci illo saepe consequuntur accusantium soluta fugit ut dignissimos earum neque ipsam eos voluptatum asperiores. Repellat!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias facere repellendus voluptatibus iusto cum quae similique obcaecati minus fuga error quo sint, dolores ullam reprehenderit explicabo in ab excepturi. Odit.</p>
         </div>
            <div class="col-md-3">
               <img src="image/login.jpg"width="250%">

            </div>
         </div>

      </div>
   </div>
</div>



</body>
</html>