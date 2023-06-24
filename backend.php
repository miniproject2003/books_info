<?php
// DB connection values
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "books";

// Values from the form
$name = $_POST['name'];
$author = $_POST['author'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$date_of_purchase = $_POST['date_of_purchase'];

// Establishing connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
else
{
    echo "connection successful";
    // Prepare the SQL statement
    $sql = "INSERT INTO books_info (name, author, price, quantity, date_of_purchase) VALUES ('$name', '$author', '$price', '$quantity', '$date_of_purchase')";
    $result = mysqli_query($conn, $sql);
    // Close the connection
    
}
if ($result) {
    // Registration successful
    echo "Registration successful!";
} else {
    // Registration failed
    echo "Registration failed. Please try again.";
}
$conn->close();
?>
