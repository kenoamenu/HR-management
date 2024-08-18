<?php

include 'connect2.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Registration</title>
    <link rel="stylesheet" href="displastyle.css">
</head>
<body>
<br><br><br>
    <table border="1"align="center">
        <tr>
            <td>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="useradd.php" class="text-light">Add user</a> -->

        <button class="btn btn-primary my-5"><a href="../home.php" class="text-light">logout</a>

        <button class="btn btn-primary my-5"><a href="../home.php" class="text-light">logoutuuu</a>

            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">user Name</th>
                        
                        <!-- <th scope="col">Email</th> -->
                        
                        <th scope="col">Password</th>
                        <!-- <th scope="col">Operation</th> -->
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql = "SELECT * FROM login";
                $result=mysqli_query($conn,$sql);
                if($result){
               while($row=mysqli_fetch_assoc($result)){
                $id1=$row['id1'];
                $username=$row['username'];
                
                // $email=$row['email'];
              
                $password=$row['password'];

                echo '<tr>
                    <th scope="row">'.$id1.'</th>
                    <td>'.$username.'</td>
                   
                    <td>'.$password.'</td>
                
                
                </tr>';

               }
                }

                ?>
                 </table>
            </tr>
            </td>
                </tbody>
            </table>

</body>
</html>