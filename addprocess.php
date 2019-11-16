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
$depname = $_POST["depname"];
$psw = $_POST["psw"];
$manid = $_POST["manid"];
$proj = $_POST["proj"];
$sql = "INSERT INTO `employees`(`emp_id`, `emp_name`, `job_name`, `hire_date`, `salary`, `dep_id`) VALUES ("."$id".","."'$name'".","."'$job'".","."'$date'".","."$salary".","."$depid".");";
$sql .= "INSERT INTO `login`(`emp_id`, `password`) VALUES ("."$id".","."'$psw'".");";
$sql .= "INSERT INTO `managers`(`man_id`, `emp_id`) VALUES ("."$manid".","."$id".");";
$sql .= "INSERT INTO `project`(`emp_id`, `proj_name`) VALUES ("."$id".","."$proj".");";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";?>
	<a href="employees.php"> Go to Employee List</a><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>