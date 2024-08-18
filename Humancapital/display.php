<?php
include 'connect.php';
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <!-- Existing head content here -->
</head>
<body background="img\PH02417U.BMP">
<div class="container my-5">
    <!-- Search Form -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="searchId">Search by ID:</label>
            <input type="number" name="searchId" placeholder="Enter ID" class="form-control">
        </div>
        <div class="form-group">
            <label for="searchName">Search by Name:</label>
            <input type="text" name="searchName" placeholder="Enter Full Name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="searchSubmit">Search</button>
    </form>
    
    <!-- Existing form for data entry -->
    <form method="POST" action="connect.php">
        <!-- Existing form content here -->
    </form>
</div>
</body>
</html>


<?php
if(isset($_POST['searchId'] )  ||  isset($_POST['searchName'] )){
    ?>
    <table border="1">
    <tr>
        <td>
            <button class="btn btn-primary my-5">
                <a href="adduser.php" class="text-light">Add user</a>
            </button>
            <div class="container">
            </div>
            
                    <?php
                    $sql=" ";
                    if(isset($_POST['searchId'])){
                        $searchId=$_POST['searchId'];
                        $sql = "SELECT * FROM teacherdb where id=$searchId";
                    }
                   if(isset($_POST['searchName'])){
                    $searchName=$_POST['searchName'];
                    $sql = "SELECT * FROM teacherdb where fullname='$searchName'";
                    }                                   
                   
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        ?>
                        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employees Name</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Age</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Address</th>
                        <th scope="col">Departments</th>
                        <th scope="col">Monthly</th>
                        <th scope="col">Date Of Registration</th>
                        <th scope="col">Employees Office</th>
                        <th scope="col">Position</th>
                        <th scope="col">Experience</th>
                        <th scope="col">Country</th>
                        <th scope="col">State</th>
                        <th scope="col">Region/City/Town</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $fullname = $row['fullname'];
                            $sex = $row['sex'];
                            $age = $row['age'];
                            $salary = $row['salary'];
                            $address = $row['address'];
                            $departments = $row['departments'];
                            $monthly = $row['monthly'];
                            $date = $row['date'];
                            $sector = $row['sector'];
                            $position = $row['position'];
                            $expriance = $row['expriance'];
                            $country = $row['country'];
                            $state = $row['state'];
                            $regein = $row['regein'];
                            $phone = $row['phone'];
                            $email = $row['email'];
   
                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$fullname.'</td>
                                <td>'.$sex.'</td>
                                <td>'.$age.'</td>
                                <td>'.$salary.'</td>
                                <td>'.$address.'</td>
                                <td>'.$departments.'</td>
                                <td>'.$monthly.'</td>
                                <td>'.$date.'</td>
                                <td>'.$sector.'</td>
                                <td>'.$position.'</td>
                                <td>'.$expriance.'</td>
                                <td>'.$country.'</td>
                                <td>'.$state.'</td>
                                <td>'.$regein.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$email.'</td>
                                <td>
                                    <div class="popup">
                                        <button class="btn btn-primary">Actions</button>
                                        <div class="popup-content">
                                            <a href="update.php?updateid='.$id.'">Update</a>
                                            <a href="delete.php?deleteid='.$id.'">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>';
                        }
                 
                    ?>
                </tbody>
            </table>
        </td>
    </tr>
   </table>
   <?php
      }
      else{
          echo "Data with that search information not found";
      }
       }
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Popup container - can be anything */
        .popup {
            position: relative;
            display: inline-block;
        }

        /* The actual popup (hidden by default) */
        .popup-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Popup link */
        .popup-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of popup links on hover */
        .popup-content a:hover {background-color: #f1f1f1}
    </style>
</head>
<body>
    <?php
     if(!isset($_POST['searchId'] )  &&  !isset($_POST['searchName'] )){
        ?>
    <table border="1">
        <tr>
            <td>
                <button class="btn btn-primary my-5">
                    <a href="adduser.php" class="text-light">Add user</a>
                </button>
                <div class="container">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Employees Name</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Age</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Address</th>
                            <th scope="col">Departments</th>
                            <th scope="col">Monthly</th>
                            <th scope="col">Date Of Registration</th>
                            <th scope="col">Employees Office</th>
                            <th scope="col">Position</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">Region/City/Town</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM teacherdb";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $fullname = $row['fullname'];
                                $sex = $row['sex'];
                                $age = $row['age'];
                                $salary = $row['salary'];
                                $address = $row['address'];
                                $departments = $row['departments'];
                                $monthly = $row['monthly'];
                                $date = $row['date'];
                                $sector = $row['sector'];
                                $position = $row['position'];
                                $expriance = $row['expriance'];
                                $country = $row['country'];
                                $state = $row['state'];
                                $regein = $row['regein'];
                                $phone = $row['phone'];
                                $email = $row['email'];

                                echo '<tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$fullname.'</td>
                                    <td>'.$sex.'</td>
                                    <td>'.$age.'</td>
                                    <td>'.$salary.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$departments.'</td>
                                    <td>'.$monthly.'</td>
                                    <td>'.$date.'</td>
                                    <td>'.$sector.'</td>
                                    <td>'.$position.'</td>
                                    <td>'.$expriance.'</td>
                                    <td>'.$country.'</td>
                                    <td>'.$state.'</td>
                                    <td>'.$regein.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$email.'</td>
                                    <td>
                                        <div class="popup">
                                            <button class="btn btn-primary">Actions</button>
                                            <div class="popup-content">
                                                <a href="update.php?updateid='.$id.'">Update</a>
                                                <a href="delete.php?deleteid='.$id.'">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <?php
     }
     ?>

    <button class="back"><a href="user.php">Back</a></button>

    <script>
        // JavaScript to handle the popup menu
        document.addEventListener('DOMContentLoaded', function() {
            var popups = document.querySelectorAll('.popup');

            popups.forEach(function(popup) {
                var button = popup.querySelector('button');
                var content = popup.querySelector('.popup-content');

                button.addEventListener('click', function() {
                    content.style.display = content.style.display === 'block' ? 'none' : 'block';
                });

                document.addEventListener('click', function(event) {
                    if (!popup.contains(event.target) && content.style.display === 'block') {
                        content.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
