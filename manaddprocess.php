<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
$man = $_POST["manid"];
$emp = $_POST["empid"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "UPDATE `managers` SET `man_id`="."$man".",`emp_id`="."$emp"." WHERE managers.emp_id = "."$emp"."";

if (mysqli_query($conn, $sql)) {
    echo "Managers Added successfully";?>
	<html>
	<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
	<a href="employees.php">GO to Employee List</a><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
</body>
</html>