<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Book List</title>
</head>
<style>

</style>
<body>
    <h3>List of Books</h3>

    <div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">IMAGE</th>
      <th scope="col">BOOK ID</th>
      <th scope="col">BOOK NAME</th>
      <th scope="col">AUTHOR</th>
      <th scope="col">EDITION</th>
      <th scope="col">QUANTITY</th>
      
      
    </tr>
  </thead>
  <tbody>
    
      <?php

      
      @include 'config.php';
    $sql = "SELECT * FROM booklist ";
    
    $result = $conn->query($sql);

    while($row=$result->fetch_assoc())
    {

    ?>
    <tr>
      <td><a target="_blank" href="uploaded_img/"><img src="uploaded_img/<?php echo $row['bookimage'] ?>" height="50" alt="" ></td>
      <td><?php echo $row['bookid']; ?></td>
      <td><?php echo $row['bookname']; ?></td>
      <td><?php echo $row['bookauthor']; ?></td>
      <td><?php echo $row['bookedi']; ?></td>
      <td><?php echo $row['bookquantity']; ?></td>
      
     
      
    </tr>

    <?php
     }
    ?>
 

</table>

    </div>
</body>
</html>
