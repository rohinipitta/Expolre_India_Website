<?php
// Database credentials
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "project"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare SQL statement to retrieve user with matching credentials
    $sql = "SELECT * FROM s WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Redirect to home page upon successful login
        header("Location: ver1.html");
        exit; // Ensure script stops execution after redirect
    } else {
        // Display error message if credentials are incorrect
        header("Location:inus.html");
		exit;
    }
}

// Close database connection
$conn->close();
?>
