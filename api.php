<?php
@include 'config.php';
$response=array();
if($conn){
    $sql="select *from user_form";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Content-Type:JSON");
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$i]['name']=$row['name'];
            $response[$i]['email']=$row['email'];
            $response[$i]['user_type']=$row['user_type'];
            $i++;

        }
        echo json_encode($response, JSON_PRETTY_PRINT );
    }
}
else{
    echo"Database connection Failed";
}
//by using api ,we collect data jason formate
?>
