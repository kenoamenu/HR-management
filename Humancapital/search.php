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
