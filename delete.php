<?php
include 'connect.php';


if(isset($_GET['indexID'])){

    $id=$_GET['indexID'];
    $sql="DELETE FROM `employe` where id='$id'";
    $result=mysqli_query($con,$sql);

    

if(isset($result)){
        header("location:display.php");
        // echo ' the delete is working';
        
    }
    else{
        echo'error in delete';
    }
}
?>