<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
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
   <title>user page</title>

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


</style>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a  class="active" href="user_page.php">Student Profile</a></li>
  <li style="float:right"><a href="login_form.php">Logout</a></li>
</ul>
<h2 align="center"></h2>
   
<div class="container">
<div class="row">
   <div class="col-md-3">
   <div class="user-menu">
    <a href="userprofile.php"><Button >VIEW PROFILE</Button></a></br>
    <a href="booklist.php"><Button >BOOK LIST</Button></a><br>
    <a href="requestbook_user.php"><Button > BOOK REQUEST</Button></a><br>
    <a href="issuebook_user.php"><Button > ISSUE BOOK</Button></a><br>
    <!--<a href="fine_student.php"><button> FINE</button></a><br>-->
    </div>
    <footer>
     <a href="login_form.php" class="btn">login</a>
     <a href="register_form.php" class="btn">register</a>
     <a href="logout.php" class="btn">logout</a>
   </footer> 
   </div>
   <div class="col-md-9">

      <div class="row">
         <div class="col-md-6">
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptas non ratione beatae libero tempora dolores inventore quam laborum dicta assumenda possimus praesentium, harum voluptatem recusandae delectus quaerat aspernatur voluptatum!</p>
      <h3>Term and Condition</h3> 
      <p>1. The General Library shall be opened from 7.30 A. M. to 9  P. M. while the University is in session and from 7.30 A. M. to 8. P. M. during vacations.</p>     
      <p>2. The Librarian is empowered to close the General Library or any section or Sections when he thinks circumstances justify it; particular of every such case must be reported to the library Committee at their next meeting.</p>
      <p>3.  Students who have completed a course of study in the University and are eligible to appear at any University or Government Competitive Examinations shall be permitted to use the University Library under the same conditions as those applicable to regular students on deposit of a sum of TK. 25.00 by the students in the Faculties of Arts, Social Sciences, Commerce and Law and TK. 50.00 by the students of the Faculties of Science and biological Sciences as caution money in each case provided that the Provost concerned certifies that they are resident at Dhaka and are preparing for University or Government Competitive Examinations.</p>  
   </div>
         <div class="col-md-3">
         <img src="image/index.jpg">
         </div>
         
      </div>
   </div>

</div>
  
   </div>
  
   
</body>
</html>