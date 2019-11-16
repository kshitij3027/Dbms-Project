<html>
<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body style="text-align:center;">
<?php
	$proj = $_POST["project"];
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
$sql = "SELECT `emp_name`,`job_name` from employees,project where employees.emp_id=project.emp_id and project.proj_name='".$proj."'";
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