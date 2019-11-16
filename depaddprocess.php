<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
$depid = $_POST["depid"];
$depname = $_POST["depname"];
$deploc = $_POST["deploc"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO `department`(`dep_id`, `dep_name`, `dep_location`) VALUES ("."$depid".","."'$depname'".","."'$deploc'".") ";

if (mysqli_query($conn, $sql)) {
    echo "Department Added successfully";?>
	<html>
	<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
	<a href="employees.php" class = "GoToHomepage">GO to Employee List</a><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
</body>
</html>