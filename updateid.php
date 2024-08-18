<?php
include_once('connect.php');
$id=$_GET['updateid'];

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $departments = $_POST['departments'];
    $monthly = $_POST['monthly'];
    $date = $_POST['date'];
    $sector = $_POST['sector'];
    $position = $_POST['position'];
    $expriance = $_POST['expriance'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $regein = $_POST['regein'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("UPDATE teacherdb SET fullname=?, sex=?, age=?, salary=?, address=?, departments=?, monthly=?, date=?, sector=?, position=?, expriance=?, country=?, state=?, regein=?, phone=?, email=? WHERE id=?");
    $stmt->bind_param("ssissssssssssssi", $fullname, $sex, $age, $salary, $address, $departments, $monthly, $date, $sector, $position, $expriance, $country, $state, $regein, $phone, $email, $id);

    if ($stmt->execute()) {
        header('Location: display.php');
        exit();
    } else {
        die("Error updating record: " . $stmt->error);
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body background="img/PH02417U.BMP">
  <div class="container my-5">
    <form method="POST" action="">
      <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" class="form-control" name="fullname" placeholder="Enter Your name" required>
      </div>

      <div class="form-group">
        <label for="sex">Sex</label>
        <select class="form-control" name="sex" required>
          <option value="">Please select sex</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" name="age" placeholder="Enter age" required>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Your address" required>
      </div>

      <div class="form-group">
        <label for="salary">Salary</label>
        <input type="number" class="form-control" name="salary" placeholder="Enter salary" required>
      </div>

      <div class="form-group">
        <label for="departments">Departments</label>
        <select class="form-control" name="departments" required>
          <option value="">Please select department</option>
          <option value="Accounting">Accounting</option>
          <option value="MIS">MIS</option>
          <option value="Other fields">Other fields</option>
        </select>
      </div>

      <div class="form-group">
        <label for="monthly">Monthly</label>
        <select class="form-control" name="monthly" required>
          <option value="">Select Monthly</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
        </select>
      </div>

      <div class="form-group">
        <label for="date">Date Of Registration</label>
        <input type="date" class="form-control" name="date" required>
      </div>

      <div class="form-group">
        <label for="sector">Employee's Office</label>
        <select class="form-control" name="sector" required>
          <option value="">Select Office</option>
          <option value="School">School</option>
          <option value="Health">Health</option>
          <option value="Culture and Tourism">Culture and Tourism</option>
          <option value="Marketing and Trading">Marketing and Trading</option>
          <option value="Civil Servant">Civil Servant</option>
          <option value="Court">Court</option>
          <option value="Legislature">Legislature</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="position">Position</label>
        <input type="text" class="form-control" name="position" placeholder="Enter Your position" required>
      </div>

      <div class="form-group">
        <label for="expriance">Experience</label>
        <input type="number" class="form-control" name="expriance" placeholder="Enter Experience in years" required>
      </div>

      <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" name="country" required>
          <option value="">Select Country</option>
          <option value="Ethiopian">Ethiopian</option>
          <option value="USA">USA</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="state">State</label>
        <select class="form-control" name="state" required>
          <option value="">Select State</option>
          <option value="Oromia">Oromia</option>
          <option value="Amhara">Amhara</option>
          <option value="Tigray">Tigray</option>
          <option value="West">West</option>
          <option value="Beneshangul Gumuz">Beneshangul Gumuz</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="regein">Region/City/Town</label>
        <select class="form-control" name="regein" required>
          <option value="">Select Region</option>
          <option value="Finfine">Finfine</option>
          <option value="Adama">Adama</option>
          <option value="Jimma">Jimma</option>
          <option value="Nekemte">Nekemte</option>
          <option value="Bardar">Bardar</option>
          <option value="Bule Hora">Bule Hora</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" name="
