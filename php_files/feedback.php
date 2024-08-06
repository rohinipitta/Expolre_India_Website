<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email already exists
    $email = $_POST['email'];
    $check_email_query = "SELECT * FROM s WHERE email = '$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        // Email already exists, insert feedback data
        $rating = $_POST['rating'];
        $opinion = $_POST['opinion'];
        $feedback = $_POST['feedback'];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO f (email, rating, opinion, feedback) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $rating, $opinion, $feedback);

        // Execute the statement
        $stmt->execute();

        header("Location:thankyou.html");
		exit;
    } else {
        // Email does not exist, show error
        echo "Email does not exist. Please create an account.";
    }

    // Close connection
    $conn->close();
}
?>
