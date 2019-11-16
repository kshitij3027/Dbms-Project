<html>
<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<button onclick="window.location.href = 'add.php';">Add Employee</button><br/>
<button onclick="window.location.href = 'depadd.php';">Add Department</button><br/>
<button onclick="window.location.href = 'projadd.php';">Add Project</button><br/>
<button onclick="window.location.href = 'manadd.php';">Add Manager of Employee</button><br/>
<button onclick="window.location.href = 'index.php';">Logout</button><br/>
<button onclick="window.location.href = 'updateform.php';">Update Employee</button><br/>
<button onclick="window.location.href = 'deleteform.php';">Delete Employee</button><br/>
<?php
$sql1 = "select *,dep_name from employees,department where department.dep_id = employees.dep_id";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {?>
    <table border="1"><tr>
	<th>Employee no</th><th>Employee Name</th><th>Job Name</th><th>Hire date</th><th>Salary</th><th>Department id</th><th>Department Name</th></tr><?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		?>
		<tr><td><?php echo   $row["emp_id"] ;?></td><td>
		<?php echo   $row["emp_name"] ;?></td><td>
		<?php echo   $row["job_name"] ;?></td><td>
		
		<?php echo   $row["hire_date"] ;?></td><td>
		<?php echo   $row["salary"] ;?></td><td>
		
		<?php echo   $row["dep_id"] ;?></td><td>
		<?php echo   $row["dep_name"] ;?></td>
		</tr><?php
		}	
    }
    
 else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>