<?php
// Database connection parameters
$servername = "localhost";
$database = "UserData"; // Your MySQL database name

// Create connection
$conn = new mysqli($MVR\SQLEXPRESS, $UserData);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$dob = $_POST['dob'];

// Insert data into database
$sql = "INSERT INTO users (Name, Email, Age, DateOfBirth) VALUES ('$name', '$email', '$age', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>