<html>
<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>
<?php
	$man = $_POST["managers"];
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
$man = $_POST["managers"];
$sql = " select man_id from managers,employees where managers.man_id = employees.emp_id and employees.emp_name = "."'$man'".";";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row["man_id"];
$sql2 = "SELECT emp_name,job_name from employees,managers where employees.emp_id=managers.emp_id and managers.man_id = "."$id".";";
$result = mysqli_query($conn, $sql2);
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