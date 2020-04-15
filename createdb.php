<?php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname, $username, $password);
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE db_siswa";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>