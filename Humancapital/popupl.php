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
            width: 50%;
            margin: auto;
        }
        td {
            border: 0px;
            padding: 10px;
        }
        th {
            border-bottom: 1px solid #ddd;
            background-color: #ddd;
        }
        /* Popup modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form id="loginForm" action="welcome.php" method="post">
        <table border="1">
            <tr>
                <th colspan="2"><h2 align="center">Login</h2></th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Data inserted successfully!</p>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user submits the form, open the modal
        document.getElementById("loginForm").onsubmit = function(event) {
            event.preventDefault(); // Prevent the form from submitting the traditional way
            // Display the modal
            modal.style.display = "block";

            // Submit the form data using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "welcome.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            var formData = new FormData(document.getElementById("loginForm"));
            xhr.send(new URLSearchParams(formData).toString());

            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Successfully inserted data
                    document.querySelector(".modal-content p").textContent = "Data inserted successfully!";
                } else {
                    // Error occurred
                    document.querySelector(".modal-content p").textContent = "An error occurred: " + xhr.statusText;
                }
            };
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
