<?php
// Connection to MySQL server
$servername = "localhost";
$port = "3306";
$username = "root";
$password = "subodhugile@8483";
$dbname = "mydatabas"; // Use the name of your database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate form data
    if (strlen($username) < 2 || strlen($username) > 50) {
        die("Username must be between 2 and 50 characters");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters");
    }

    // Insert data into database
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful signup
        header("Location: log.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
