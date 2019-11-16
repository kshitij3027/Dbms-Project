<html><head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head><body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$delete = $_POST["delete"];
$sql = "delete from employees where employees.emp_id = "."$delete"."; ";
$sql .= "delete from login where login.emp_id = "."$delete"."; ";
$sql .= "delete from managers where managers.emp_id = "."$delete"."; ";
$sql .= "delete from project where project.emp_id = "."$delete"."; ";
if (mysqli_multi_query($conn, $sql)) {
    echo "Records deleted successfully";?>
	<a href="employees.php" class="GoToHomepage">GO to Employee List</a><?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

</body>
</html>
