<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hard-coded user credentials
    $valid_email = "";
    $valid_password = "jfnff";

    // Check if the provided credentials match the hard-coded values
    if ($email == $valid_email && $password == $valid_password) {
        // Credentials are valid, user is authenticated
        echo "Login successful!";
    } else {
        // Credentials are incorrect
        echo "Incorrect email or password!";
    }
}
?>
