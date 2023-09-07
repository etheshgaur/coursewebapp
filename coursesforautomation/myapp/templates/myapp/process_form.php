<?php
// Database connection parameters
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user details from the form
$name = $_POST['name'];
$place = $_POST['place'];
$email = $_POST['email'];

// SQL query to insert data into a table (assuming you have a 'users' table)
$sql = "INSERT INTO users (name, place, email) VALUES ('$name', '$place', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
