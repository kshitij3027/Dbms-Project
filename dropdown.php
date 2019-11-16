<html>
<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
<?php
	$dept = $_POST["departments"];
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Corp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select emp_name, job_name from employees, department where employees.dep_id = department.dep_id and department.dep_name ='".$dept."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {?>
    <table border="1" class="tablestyle" id="myid"><tr>
	<th>Employee Name</th><th>JOB</th></tr><?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
        <tr><td><?php echo   $row["emp_name"] ;?></td><td><?php echo   $row["job_name"] ;?></td></tr><?php
    }
    
} else {
    echo "0 results";
}

?>

</body>
</html>