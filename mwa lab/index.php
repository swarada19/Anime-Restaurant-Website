<?php
// Establish database connection
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = "password"; // Change this to your database password
$dbname = "swarada"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    
    // SQL query to insert data into database
    $sql = "INSERT INTO registrations (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
}
?>
