<?php
include_once('connect.php');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any user was found
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        
        // Verify the password (assuming you are using password hashing)
        if ($password==$user['password']) {
            echo "Data logged in successfully";
            header('Location: display.php');
            exit();
        } else {
            echo "<script>alert(' password incorrect!')</script>";
            echo "<script>location.href='login.php'</script>";
            
        }
    } else {
        echo "<script>alert('Username incorrect!')</script>";
        echo "<script>location.href='login.php'</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
