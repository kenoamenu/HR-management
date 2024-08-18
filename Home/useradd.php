
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
include_once('connect.php');
if(isset($_POST['submit'])){

  $username=$_POST['username'];
 
  $password=$_POST['password'];
  

    $sql = "INSERT INTO login (username, password)
VALUES ('$username','$password')";
$result=mysqli_query($conn,$sql);
    if($result){
  echo "Data inserte seccesfully";
  header('location:display1.php');
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
    <link rel="stylesheet" href="userstyle.css">

    <title>Crud Operation!</title>
  </head>
  <body background="img/J0178460.JPG">
  <table border="10"align="center"width="50%"height="40%"bgcolor="pink">
  <tr>
    <td>
  <div class="container my-5">

  <form method="POST" actoin="connect.php">
  <div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="username" class="form-control" id="exampleInputusername" aria-describedby="username" placeholder="Enter Your name" name="username" outocomplete="off">
    <small id="usernamelHelp" class="form-text text-muted"></small>
  </div>

  
  <div class="form-group">
    <label for="exampleInputepassword">Password</label>
    <input type="password" class="form-control" id="exampleInputepassword" placeholder="Enter Your Password"name="password" outocomplete="off">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>


 
</table>
</tr>
</td>
  </body>
</html>