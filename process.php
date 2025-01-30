<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    echo "<h1>Registration Successful!</h1>";
    echo "<p><strong>Full Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
} else {
    echo "Invalid Request!";
}
?>
