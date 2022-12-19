<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Library Management System</title>
</head>
<body>
        <div class="nav">
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#">LMS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
             <li class="active"><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Gallery</a></li>
             <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
             <li id="myAnchor"  ><a href="login_form.php">Login</a></li>
            </ul>
            <script>
              function myFunction() {
              var x = document.getElementById("myAnchor").hreflang;
              document.getElementById("demo").innerHTML = x;
            }  
            </script>
        </div>
        </div>
        </nav>
        </div><!--nav-->

    <div class="content">
    <div class="about">
    <img src="image/index.jpg" style="float : right; margin: left 10px; margin: bottom 5px; border: solid black 1px; padding: 2px;" />
    <h3 class="heading">Library Management System</h3>
    <p>
    Online Library Management System is an Automated Library System that handles the various functions of the library. It provides a complete solution to the library management software. The online Library Management System is classified into two parts Bar Code System and RFID System.
    </p>
    <p>
    Library plays an important role in all schools and colleges, no educational institution can exist without Library Administration Software. It is an important part of every school and college and it helps the librarian to keep records of available books as well as issued books. Library Management System software helps in different ways by providing students the facility to learn, gather resources, promote group learning and improve knowledge and skills.. With Advance Library Software user can easily find books, catalogs, magazines of their interest. The library is a great place to study and make notes which ultimately help in scoring a good score.
    </p>
    <p>
    The library management system that we are developing contains a list of features that will enable the teachers and students to manage and carry out the various complex processes in a library system digitally and with ease. The features of the library management system are divided into 3 sections. These are Admin, Teacher and Student. The user can login to the form with correct password and he will be able to update user information, show all Book/Book request. The admin will also have the access to see the information. Admin can show user information by user account name and id . Admin can also check the information of the teachers by teachers id, name. With this web application the admin can manages all the features and the procedures of the library system more accurately than before. The user can open new account for view book and request for book.
    </p>  
    </div>    <!--about--> 
    
   
        <!-- news section starts  -->

<section class="news" id="news">

<h1 class="heading">  News </h1>

<div class="box-container">
    
    <div class="box tilt">
        <img src="image/book.jpeg" alt="">
        <h3> New books have arrived! </h3>
        <p>Check out the latest titles added to our library!. See more ideas about new books, books, fiction.</p>
        <a href="#" class="btn">learn more</a>
    </div>

    <div class="box tilt">
        <img src="image/update.jpg" alt="">
        <h3> Update alert! </h3>
        <p>Our system will be updated soon</p>
        <a href="#" class="btn">learn more</a>
    </div>

    <div class="box tilt">
        <img src="image/eid.jpg" alt="">
        <h3> Eid Mubarak </h3>
        <p>May this Eid fills your life with the brightest of colours. Here’s wishing you and your family a very happy Eid! May Allah bless you with the gift of kindness, patience and love. Eid Mubarak!</p>
        <a href="#" class="btn">learn more</a>
    </div>

</div>

</section>
<!--news-->

    <!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> Contact <span> Us </span> </h1>

<div class="row">

    <div class="image">
        <img class="tilt" src="image/contact-img.svg" alt="">
    </div>

    <form action="" onsubmit="sendEmail();reset();return false;">

        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>

        <input type="text" placeholder="subject" class="box">

        <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

        <input type="submit" class="btn" value="send message">

    </form>

</div>

</section>

<!-- contact section ends -->

    </div><!--content-->
    <footer class="footer" text align="center">
        <p>&#169 Libray Management System, All rights reserved!</p>

    </footer>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        fuction sendEmail(){
            Email.send({
    Host : "smtp.gmail.com",
    Username : "hasanmahamudantor@gmail.com",
    Password : "appantor.bhasma",
    To : 'hasanmahamudantor@.com',
    From : document.getElementById("email").value,
    Subject : "Next Contact From Enquiry",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
        }
        </script>
    
</body>
</html>