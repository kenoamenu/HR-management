
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

  $name=$_POST['name'];
  $sex=$_POST['sex'];
  $Age=$_POST['Age'];
  $grade=$_POST['grade'];
  $address=$_POST['address'];
  $Houseno=$_POST['Houseno'];
  $school=$_POST['school'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  

    $sql = "INSERT INTO table1 (name,sex, Age, grade,address,Houseno,school, email, mobile, password)
VALUES ('$name','$sex','$Age','$grade','$address','$Houseno','$school', '$email','$mobile','$password')";
$result=mysqli_query($conn,$sql);
    if($result){
  echo "Data inserte seccesfully";
  header('location:display.php');
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
    <input type="name" class="form-control" id="exampleInputname" aria-describedby="name" placeholder="Enter Your name" name="name" outocomplete="off">
    <small id="namelHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">Sex</label>
    <input type="sex" class="form-control" id="exampleInputsex" aria-describedby="name" placeholder="Enter Your sex" name="sex" outocomplete="off">
    <small id="sexlHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">Age</label>
    <input type="Age" class="form-control" id="exampleInputaddress" aria-describedby="name" placeholder="Enter Your Age" name="Age" outocomplete="off">
    <small id="AgelHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">Grade</label>
    <input type="grade" class="form-control" id="exampleInputsex" aria-describedby="name" placeholder="Enter Your Grade" name="grade" outocomplete="off">
    <small id="gradelHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputname">Address</label>
    <input type="address" class="form-control" id="exampleInputaddress" aria-describedby="name" placeholder="Enter Your address" name="address" outocomplete="off">
    <small id="addresslHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">Houseno</label>
    <input type="Houseno" class="form-control" id="exampleInputaddress" aria-describedby="name" placeholder="Enter Your house" name="Houseno" outocomplete="off">
    <small id="HousenolHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputname">School</label>
    <input type="school" class="form-control" id="exampleInputaddress" aria-describedby="name" placeholder="Enter school" name="school" outocomplete="off">
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
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>


 
</table>
</tr>
</td>
  </body>
</html>

