<?php
include_once('connect.php');
if(isset($_POST['submit'])){
  $fullname=$_POST['fullname'];
  $sex=$_POST['sex'];
  $age=$_POST['age'];
  $salary=$_POST['salary'];
  $address=$_POST['address'];
  $departments=$_POST['departments'];
  $monthly=$_POST['monthly'];
  $date=$_POST['date'];
  $sector=$_POST['sector'];
  $position=$_POST['position'];
  $expriance=$_POST['expriance'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $regein=$_POST['regein'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];

  

    $sql = "INSERT INTO teacherdb (fullname,sex,age,salary, address, departments,monthly,date,sector,position,expriance,country,state,regein,phone,email)
VALUES ('$fullname','$sex','$age','$salary','$address','$departments','$monthly','$date','$sector','$position','$expriance','$country','$state','$regein','$phone','$email')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "Data inserte seccesfully";
  header('location:display.php');
  }else{

    die(mysqli_error($conn));
  }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Crud Operation!</title>
  </head>
  <body background="img\PH02417U.BMP">
  <table border="10" align="center"width="50%" height="40%" bgcolor="pink">
  <tr>
    <td>
    <div class="container my-5">
  <form method="POST" actoin="connect.php">
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="fullname=name" placeholder="Enter Your name" name="fullname" outocomplete="off">
    <small id="fullnamelHelp" class="form-text text-muted"></small>
  </div>
 
  
  <div class="form-group">
    <label for="sex">Sex :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       <select name="sex" required>
        
       <option value="" >Please elect sex &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
    <option value= "Female">Female</option>
    <option value= "Male">Male</option>
    <option value= "Other">Other</option>
</select>
  </div>

  <div class="form-group">
    <label for="name">Age:</label>
    <input type="number" name="age" placeholder="Enter age" required />
    <small id="agelHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="name">Address</label>
    <input type="address=name" placeholder="Enter Your address" name="address" outocomplete="off">
    <small id="addressHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="name">Salary:</label>
    <input type="number" name="salary" placeholder="Enter age" required />
    <small id="salarylHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="departments">Departments :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       <select name="departments" required>
        
       <option value="" >Please elect sex &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
    <option value= "Accounting">Accounting</option>
    <option value= "MIS">MIS</option>
    <option value= "Other feilds">Other feilds</option>
</select>
  </div>
  
  <div class="form-group">
  <label for="monthly">Monthly</label>
    <Select name="monthly"  required>
    <option value="">Select Monthly</option>   
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="Nevenber">Nevenber</option>
  <option value="Decenbe">Decenber</option>
  <option value="Junwary">Junwary</option>
  <option value="Febrary">Febrary</option>
  <option value="March">March</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="Jully">Jully</option>
  <option value="Agoust">Agoust</option>


</select>

  </div>

  
  <div class="form-group">
    <label for="date">Date Of Registration</label>
    <input type="date" name="date" outocomplete="off">
    <small id="datelHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="sector">Employees Office:</label>
    <Select name="sector"  required>
    <option value="">Enter Emplyees Office</option>   
  <option value="School">School</option>
  <option value="Health">Health</option>
  <option value="Culture and Turizim">Culture and Turizim</option>
  <option value="Marketing and Trading">Marketing and Trading</option>
  <option value="Civil Servant">Civil Servant</option>
  <option value="Court">Court</option>
  <option value="Legisral">Legisral </option>
  <!-- <option value="RoomH">Room H</option>
  <option value="RoomI">Room I</option>
  <option value="RoomJ">Room J</option>
  <option value="RoomK">Room K</option>
  <option value="RoomL">Room L</option>
  <option value="RoomM">Room M</option>
  <option value="RoomN">Room N</option>
  <option value="RoomO">Room O</option>
  <option value="RoomP">Room P</option>
  <option value="RoomQ">Room Q</option>
  <option value="RoomR">Room R</option>
  <option value="RoomS">Room S</option>
  <option value="RoomT">Room T</option>
  <option value="RoomU">Room U</option>
  <option value="RoomV">Room V</option>
  <option value="RoomW">Room W</option>
  <option value="RoomX">Room X</option>
  <option value="RoomY">Room Y</option>
  <option value="RoomZ">Room Z</option> -->
  <option value="Other">Other</option>
</select>
  </div>

  <div class="form-group">
    <label for="name">Position</label>
    <input type="position=name" placeholder="Enter Your name" name="position" outocomplete="off">
    <small id="positionlHelp" class="form-text text-muted"></small>
  </div>


  <div class="form-group">
    <label for="expriance">Expriance:</label>
    <input type="number" name="expriance" placeholder="Enter Employees Expriance" required />
    <small id="expriancelHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <Select name="country"  required>
    <option value="">Enter Country</option>   
  <option value="Etiopian">Etiopian</option>
  <option value="USA">USA</option>
  
  <!-- <option value="RoomH">Room H</option>
  <option value="RoomI">Room I</option>
  <option value="RoomJ">Room J</option>
  <option value="RoomK">Room K</option>
  <option value="RoomL">Room L</option>
  <option value="RoomM">Room M</option>
  <option value="RoomN">Room N</option>
  <option value="RoomO">Room O</option>
  <option value="RoomP">Room P</option>
  <option value="RoomQ">Room Q</option>
  <option value="RoomR">Room R</option>
  <option value="RoomS">Room S</option>
  <option value="RoomT">Room T</option>
  <option value="RoomU">Room U</option>
  <option value="RoomV">Room V</option>
  <option value="RoomW">Room W</option>
  <option value="RoomX">Room X</option>
  <option value="RoomY">Room Y</option>
  <option value="RoomZ">Room Z</option> -->
  <option value="Other">Other</option>
</select>
  </div>
  
  <div class="form-group">
    <label for="state">State</label>
    <Select name="state"  required>
    <option value="">Enter State</option>   
  <option value="Oromia">Oromia</option>
  <option value="Amhara">Amhara</option>
  <option value="Tigiray">Tigiray</option>
  <option value="West of people">West of people</option>
  <option value="Beneshangul Gumuz">Beneshangul Gumuz</option>
  
  <!-- <option value="RoomH">Room H</option>
  <option value="RoomI">Room I</option>
  <option value="RoomJ">Room J</option>
  <option value="RoomK">Room K</option>
  <option value="RoomL">Room L</option>
  <option value="RoomM">Room M</option>
  <option value="RoomN">Room N</option>
  <option value="RoomO">Room O</option>
  <option value="RoomP">Room P</option>
  <option value="RoomQ">Room Q</option>
  <option value="RoomR">Room R</option>
  <option value="RoomS">Room S</option>
  <option value="RoomT">Room T</option>
  <option value="RoomU">Room U</option>
  <option value="RoomV">Room V</option>
  <option value="RoomW">Room W</option>
  <option value="RoomX">Room X</option>
  <option value="RoomY">Room Y</option>
  <option value="RoomZ">Room Z</option> -->
  <option value="Other">Other</option>
</select>
  </div>
  <div class="form-group">
    <label for="regein">Regien/city/Town:</label>
    <Select name="regein"  required>
    <option value="">Enter Regein</option>   
  <option value="Finfine">Finfine </option>
  <option value="Adama">Adama</option>
  <option value="Jimma">Jimma</option>
  <option value="Nekemte">Nekemte</option>
  <option value="Bardar">Bardar</option>
  <option value="Bule Hora">Bule Hora</option>
  <!-- <option value="RoomG">Legisral </option>
  <option value="RoomH">Room H</option>
  <option value="RoomI">Room I</option>
  <option value="RoomJ">Room J</option>
  <option value="RoomK">Room K</option>
  <option value="RoomL">Room L</option>
  <option value="RoomM">Room M</option>
  <option value="RoomN">Room N</option>
  <option value="RoomO">Room O</option>
  <option value="RoomP">Room P</option>
  <option value="RoomQ">Room Q</option>
  <option value="RoomR">Room R</option>
  <option value="RoomS">Room S</option>
  <option value="RoomT">Room T</option>
  <option value="RoomU">Room U</option>
  <option value="RoomV">Room V</option>
  <option value="RoomW">Room W</option>
  <option value="RoomX">Room X</option>
  <option value="RoomY">Room Y</option>
  <option value="RoomZ">Room Z</option> --> 
  <option value="Other">Other</option>
</select>
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone=name" placeholder="Enter phone number" name="phone" outocomplete="off">
    <small id="phoneHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="textarea=name" placeholder="@gmail.com" name="email" outocomplete="off">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>

  <button id="backButton">Go Back</button>
  
</form>
</table>
</tr>
</td>
  </body>
</html>


