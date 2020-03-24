<?php
$servername = "localhost";
$database = "book";
$username = "root";
$password = "";
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully"; 
 
$sql = "INSERT INTO book (title,price,author) VALUES ('{$title}','{$price}','{$author}')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>



<!doctype html>
<html>
<head>
<title>insertion</title>
</head>
<body>
<h1>book record management</h1>
do you want to insert more rcord???
<a href="insertform.php">click here</a>
</body>
</html>