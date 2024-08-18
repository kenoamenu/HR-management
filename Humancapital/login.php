<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        table {
            margin-top: 150px;
            border: 1px solid;
            background-color: #eee;
        }
        td {
            border: 0px;
            padding: 10px;
        }
        th {
            border-bottom: 1px;
            background-color: #ddd;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #000;
            background-color: #fff;
            padding: 20px;
            z-index: 1000;
        }
        .popup.active {
            display: block;
        }
        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
    <script type="text/javascript">
        function togglePopup() {
            document.getElementById('popup').classList.toggle('active');
        }
    </script>
</head>
<body>

    <?php
    include_once('connect.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "<script>document.getElementById('popup').classList.add('active');</script>";
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>

    <form action="welcome.php" method="post">
        <table align="center" border="1">
            <tr>
                <th colspan="2"><h2 align="center">Login</h2></th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>

    <div class="popup" id="popup">
        <span class="close" onclick="togglePopup()">X</span>
        <p>Data inserted successfully!</p>
    </div>

</body>
</html>
