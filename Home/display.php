<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Students Registration</title>
    <link rel="stylesheet" href="dispstyle.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
            </button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">sex</th>
                        <th scope="col">Age</th>
                        <th scope="col">Grade</th>
                        <th scope="col">address</th>
                        <th scope="col">Houseno</th>
                        <th scope="col">School</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Password</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql = "SELECT * FROM table1";
                $result=mysqli_query($conn,$sql);
                if($result){
               while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $sex=$row['sex'];
                $Age=$row['Age'];
                $grade=$row['grade'];
                $address=$row['address'];
                $Houseno=$row['Houseno'];
                $school=$row['school'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];

                echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$sex.'</td>
                    <td>'.$Age.'</td>
                    <td>'.$grade.'</td>
                    <td>'.$address.'</td>
                    <td>'.$Houseno.'</td>
                    <td>'.$school.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button>
                </td>
                
                </tr>';

               }
                }

                ?>
                
                </tbody>
            </table>

</body>
</html>