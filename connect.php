<?php
$con=new mysqli('localhost','root','','database');

if($con){
    // header('location:display.php');
    // echo 'connection is working';
    
}
else{
    die(mysqli_error($con));
}

?>