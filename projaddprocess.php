<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
$proj = $_POST["proj"];
$mem = $_POST["mem"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO `project`(`emp_id`, `proj_name`) VALUES ("."$mem".","."'$proj'".")";

if (mysqli_query($conn, $sql)) {
    echo "Project Added successfully";?>
	<a href="addemp.php">ADD more project Members</a><br/>
	<html>
	<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
	<a href="employees.php">GO to Employee List</a><br/>
	<a href="addemp.php">ADD more project Members</a><br/><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
</body>
</html>