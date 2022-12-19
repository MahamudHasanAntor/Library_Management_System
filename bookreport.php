<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Book Report</title>
</head>
<body>
<div>
    <h2>Book Report</h2></br>
    <div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">BOOK ID</th>
      <th scope="col">BOOK NAME</th>
      <th scope="col">PPROBLEM</th>

    </tr>
  </thead>
  <tbody>
    
      <?php

      
      @include 'config.php';

    $sql = "SELECT * FROM reportbook";
    $result = $conn->query($sql);

    while($row=$result->fetch_assoc())
    {

    ?>
    <tr>
      
      <td><?php echo $row['bookid']; ?></td>
      <td><?php echo $row['bookname']; ?></td>
      <td><?php echo $row['bookdetail']; ?></td>

      
    </tr>

    <?php
     }
    ?>
  </tbody>
</table>

    </div>
  
 
</form>
</div>
</body>
</html>