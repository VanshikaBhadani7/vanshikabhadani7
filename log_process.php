<?php
// Include common database connection code if needed
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
    $password = $_POST["password"];

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists and password matches
        header("Location: index.html");
        // Redirect to another page or perform other actions as needed
    } else {
        // User does not exist or password is incorrect
        echo "Invalid username or password";
    }
}

$conn->close();
?>
