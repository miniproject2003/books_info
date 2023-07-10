<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "books";

$name = $_POST['name'];
$author = $_POST['author'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$date_of_purchase = $_POST['date_of_purchase'];

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) 
{
    die("Connection Failed: " . $conn->connect_error);
}
else
{
    echo "connection successful";
    $sql = "INSERT INTO books_info (name, author, price, quantity, date_of_purchase) VALUES ('$name', '$author', '$price', '$quantity', '$date_of_purchase')";
    $result = mysqli_query($conn, $sql);
}
if ($result) 
{
    echo "<br>Registration successful!";
} 
else 
{
    echo "<br>Registration failed. Please try again.";
}
$conn->close();
?>
