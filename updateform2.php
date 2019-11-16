
<?php
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Corp";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$update = $_POST["update"];
$sql = "select *from employees where employees.emp_id="."$update".";";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body style="text-align:center">
<form action="updateprocess4.php" method="post"><br/><br/>
ID<input type="text" name ="id" value="<?php echo $row["emp_id"];?>"><br/><br/>
Name<input type="text" name ="name" value="<?php echo $row["emp_name"];?>"><br/><br/>
JOb<input type="text" name ="job" value="<?php echo $row["job_name"];?>"><br/><br/>
Hire Date<input type="date" name ="date" value="<?php echo $row["hire_date"];?>"><br/><br/>
Salary<input type="text" name ="salary" value="<?php echo $row["salary"];?>"><br/><br/>
Department ID<input type="text" name ="depid" value="<?php echo $row["dep_id"];?>"><br/><br/>
<?php
$sql = "select *from login where login.emp_id="."$update".";";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
Password<input type="password" name ="psw" value="<?php echo $row["password"];?>"><br/><br/>

<?php
$sql = "select *from managers where managers.emp_id="."$update".";";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

Manager ID<input type="text" name ="manid" value="<?php echo $row["man_id"];?>"><br/><br/>
<?php
$sql = "select *from project where project.emp_id="."$update".";";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
Project<input type="text" name ="proj" value="<?php echo $row["proj_name"];?>"><br/><br/>
<input type="submit">
</body>
</html>