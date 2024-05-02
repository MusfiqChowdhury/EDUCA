<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$level = $_POST['level'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Check if the phone number already exists
$check = $conn->prepare("SELECT * FROM `registrationstudent` WHERE `Phone` = ?");
$check->bind_param("s", $phone);
$check->execute();
$result = $check->get_result();
if ($result->num_rows > 0) {
    echo "<script>alert('Error: Duplicate Phone Number!'); window.location.href = 'registration_form.php';</script>";
    $check->close();
    $conn->close();
    exit;
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO `registrationstudent` (`Name`, `Phone`, `Address`, `Level`, `Email`, `Password`) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $phone, $address, $level, $email, $password);

// Execute and check for errors
if ($stmt->execute()) {
    echo "<script>alert('Successfully Registered!'); window.location.href = 'login.php';</script>";
} else {
    echo "<script>alert('Error: Registration Failed!'); window.location.href = 'registration_form.php';</script>";
}

$stmt->close();
$conn->close();
?>