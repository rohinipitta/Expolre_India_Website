<?php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['password'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'project');
if ($conn->connect_error) {
    echo json_encode(array("error" => true, "message" => "Connection failed: " . $conn->connect_error));
    exit();
} 

// Check if email or name already exists
$checkStmt = $conn->prepare("SELECT * FROM s WHERE email = ? OR name = ?");
$checkStmt->bind_param("ss", $Email, $Name);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

if ($checkResult->num_rows > 0) {
    // Redirect to u.html if user already exists
    header('Location: ../html_files/u.html');
    exit();
} else {
    // Hash password before storing
    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO s (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Name, $Email, $hashedPassword);
    if ($stmt->execute()) {
        // Redirect to acs.html on successful registration
        header('Location: ../html_files/acs.html');
        exit();
    } else {
        echo json_encode(array("error" => true, "message" => "Error during registration: " . $stmt->error));
    }
    $stmt->close();
}
$conn->close();
?>
