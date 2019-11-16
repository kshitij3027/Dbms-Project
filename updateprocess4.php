<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = $_POST["id"];
$name = $_POST["name"];
$job = $_POST["job"];
$date = $_POST["date"];
$salary = $_POST["salary"];
$depid = $_POST["depid"];
$psw = $_POST["psw"];
$manid = $_POST["manid"];
$proj = $_POST["proj"];
$sql = "UPDATE `employees` SET `emp_id`= "."$id".",`emp_name`="."'$name'".",`job_name`= "."'$job'".",`hire_date`="."'$date'".",`salary`="."$salary".",`dep_id`="."$depid"." WHERE employees.emp_id = "."$id".";";
$sql .= "UPDATE `login` SET `emp_id`="."$id".",`password`="."'$psw'"." WHERE login.emp_id = "."$id".";";
$sql .= "UPDATE `managers` SET `man_id`="."$manid".",`emp_id`="."$id"." WHERE managers.emp_id="."$id".";";
$sql .= "UPDATE `project` SET `emp_id`="."$id".",`proj_name`="."$proj"." WHERE project.emp_id="."$id".";";

if (mysqli_multi_query($conn, $sql)) {
    echo "Records Updated";?>
	<html>
	<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
	<a href="employees.php" class ="GoToHomepage">GO to Employee List</a><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
</body>
</html>