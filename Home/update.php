<?php
include_once('connect.php');
$id=$_GET['updateid'];
if (isset($_POST['id'], $_POST['name'],$_POST['sex'],$_POST['address'], $_POST['email'], $_POST['mobile'], $_POST['password'])) {
  $id=$_POST['id'];
  $name=$_POST['name'];
  $sex=$_POST['sex'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $query = "UPDATE `table1` SET id='$id',`name`='$name',`sex`='$sex',`address`='$address', `email`='$email', `mobile`='$mobile', `password`='$password' WHERE `id`='$id'";

$result=mysqli_query($conn,$query);
    if($result){
  //echo "update is  seccesfully";
  //header('location:display.php');
  }else{

    die(mysqli_error($conn));
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation!</title>
  </head>
  <body>
  <div class="container my-5">

  <form method="POST" actoin="connect.php">
  <div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="name" class="form-control" id="exampleInputname" aria-describedby="name" placeholder="Enter Your name" name="name" outocomplete="off">
    <small id="namelHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">sex</label>
    <input type="sex" class="form-control" id="exampleInputsex" aria-describedby="name" placeholder="Enter Your sex" name="sex" outocomplete="off">
    <small id="sexlHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">address</label>
    <input type="address" class="form-control" id="exampleInputaddress" aria-describedby="name" placeholder="Enter Your address" name="address" outocomplete="off">
    <small id="addresslHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputemail">Email</label>
    <input type="email" class="form-control" id="exampleInputemail" placeholder="Enter Your Email"name="email" outocomplete="off">
  </div>

  <div class="form-group">
    <label for="exampleInputemobile">Mobile</label>
    <input type="mobile" class="form-control" id="exampleInputemobile" placeholder="Enter Your Mobilename="name" name="mobile" outocomplete="off">
  </div>

  <div class="form-group">
    <label for="exampleInputepassword">Password</label>
    <input type="password" class="form-control" id="exampleInputepassword" placeholder="Enter Your Password"name="password" outocomplete="off">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>


  </div>


  </body>
</html>