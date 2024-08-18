<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM table1 WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
      // echo "Deleted Record is  seccussfuly";
      header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
        
    }




?>