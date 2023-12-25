<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['code'])) {
    $verificationCode = $_GET['code'];

    // Check if the verification code is valid
    $query = "SELECT * FROM users WHERE verification_code = '$verificationCode' AND is_verified = 0";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        // Update user status to verified
        $user = $result->fetch_assoc();
        $userId = $user['id'];
        $updateQuery = "UPDATE users SET is_verified = 1 WHERE id = $userId";
        $mysqli->query($updateQuery);

        // Redirect to profile.php
        header("Location: profile.php");
        exit();
    } else {
        echo "Invalid verification code.";
    }
} else {
    echo "Invalid request.";
}
?>
