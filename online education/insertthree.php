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
$name = $_POST['name'] ?? ''; // Use null coalescing operator to handle unset POST data
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$Designation = $_POST['Designation'] ?? '';
$email = $_POST['email'] ?? ''; // Corrected typo here from 'emial' to 'email'
$password = $_POST['password'] ?? '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO `registrationstaff` (`Name`, `Phone`, `Address`, `Designation`, `Email`, `Password`) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $phone, $address, $Designation, $email, $password);

// Execute and check for errors
if ($stmt->execute()) {
    echo "<script>alert('Successfully Registered!'); document.location.href = '../feedback/index.php';</script>";
} else {
    // Check for duplicate entry on unique field
    if ($conn->errno === 1062) {
        echo "<script>alert('Error: Duplicate Phone Number!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>