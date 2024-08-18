




<br><br><br><br><br>



<?php
include_once('connect2.php');
if(isset($_POST['login'])){

  $username=$_POST['username'];
  
  // $email=$_POST['email'];
 
  $password=$_POST['password'];
  

    $sql = "INSERT INTO login (username, password)
VALUES ('$username','$password')";
  $result=mysqli_query($conn,$sql);
  if($result){
  echo "Data inserte seccesfully";
//  header('location:display1.php');

//  header('location:display1.php');
 
 
 
   }else{

    die(mysqli_error($conn));
 }

}

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style type="text/css">
        <table{
            margin-top:150px;
            border: 1px solid;
            background-color:#eee;

        }
td{
    border:0px;
    padding:10px;

}
th{
    border-bottom:1px;
    background-color:#ddd;
}

</style>
</head>
<body>

    <form action="welcome.php" method="post">
        <table align="center"border="1">
            <tr>
                <th colspan="2"><h2 align="center">login</h1></h2>
                <tr>
                    <td>Username:</td>
                    <td><input type="text"name="username"></td>
</tr>
</td>
                    <td>Password:</td>
                    <td><input type="text"name="password"></td>
</tr>
<tr>
    <td align="right"colspan="2"><input type="submit"name="login"value="login"></td>
   
</tr>



        </table>
</form>
</body>
</html>



