<?php

$conn=new mysqli('localhost','students','','students');

if($conn){

    //echo "Connection is successfully";

}else{

    die(mysqli_error($conn));

}



?>