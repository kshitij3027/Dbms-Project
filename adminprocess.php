<?php
	$admin = $_POST["password"];
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Corp";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT  password FROM login where emp_id = 11011 ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($admin == $row["password"]){
	header("Location: employees.php");

}

?>