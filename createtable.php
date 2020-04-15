<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_siswa";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE tb_siswa (id_siswa int(11) AUTO_INCREMENT PRIMARY KEY,
  nama varchar(255) NOT NULL, kelas varchar(100) NOT NULL,
  alamat varchar(255) NOT NULL) "; 
if (mysqli_query($conn, $sql)){
	echo "Created successfuly";
} else {
	echo "Error creating" . mysqli_error($conn);
}
mysqli_close($conn);
?>