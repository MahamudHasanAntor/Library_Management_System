<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Book Request</title>
</head>
<body>
    <h2>Request for book</h2><br>
    <div>
    <table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">USER EMAIL</th>
      <th scope="col">BOOK ID</th>
      <th scope="col">BOOK NAME</th>
      <th scope="col">DAYS</th>

    </tr>
  </thead>
  <tbody>
    
      <?php

      
      @include 'config.php';

    $sql = "SELECT * FROM bookrequest";
    $result = $conn->query($sql);

    while($row=$result->fetch_assoc())
    {

    ?>
    <tr>
    
      <td><?php echo $row['bookemail']; ?></td>
      <td><?php echo $row['bookid']; ?></td>
      <td><?php echo $row['bookname']; ?></td>
      <td><?php echo $row['days']; ?></td>
     
      
    </tr>

    <?php
     }
    ?>
  </tbody>
</table>

    </div>
</body>
</html>