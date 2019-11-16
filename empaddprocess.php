<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
$proj = $_POST["proj"];
$mem = $_POST["mem"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "UPDATE `project` SET `emp_id`="."$mem".",`proj_name`="."'$proj'"." WHERE project.emp_id = "."$mem".";";

if (mysqli_query($conn, $sql)) {
    echo "Project Added successfully";?>
	<html>
	<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
	<a href="addemp.php" class = "GoToHomepage">GO to Employee List</a><br/>
	<a href="addemp.php">ADD more project Members</a><br/><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
</body>