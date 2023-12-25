<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>User Profile</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome to Your Profile</h2>
        <?php
        // Check if user is logged in
        if (isset($_SESSION['user_id'])) {
            // Display user details and update form
            // Replace the following with the actual user data retrieval and update form
            echo "<p>Full Name: $user['full_name']</p>";
            echo "<p>Phone Number: $user['phone_number']</p>";
            echo "<form action='update_profile.php' method='post'>";
            echo "   <div class='form-group'>";
            echo "      <label for='full_name'>Full Name:</label>";
            echo "      <input type='text' class='form-control' id='full_name' name='full_name' value='$user['full_name']'>";
            echo "   </div>";
            echo "   <div class='form-group'>";
            echo "      <label for='phone_number'>Phone Number:</label>";
            echo "      <input type='text' class='form-control' id='phone_number' name='phone_number' value='$user['phone_number']'>";
            echo "   </div>";
            echo "   <button type='submit' class='btn btn-primary'>Update Profile</button>";
            echo "</form>";
        } else {
            // Redirect to login page if not logged in
            header("Location: login.php");
            exit();
        }
        ?>
    </div>
</body>
</html>
