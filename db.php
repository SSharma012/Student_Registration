<?php
// Database connection details
$host = "localhost"; // Default XAMPP host
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$database = "student_registration"; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>