<html>
<head>
<link rel="stylesheet" type="text/css" href="buttonmaking.css">
</head>
<body style="text-align:center">
<?php
	$empid = $_POST["emp_id"];
	$passwrd = $_POST["password"];
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
$sql = "SELECT  password FROM login where emp_id = '".$empid."' and password = '".$passwrd."'" ;
$sql2 = "select *from employees where emp_id = '".$empid."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
	$row = mysqli_fetch_assoc($result);
	
		if($passwrd == $row["password"]){
			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_assoc($result);?>
			 <table border="2" class="tablestyle" id="myid"> <tr><td>Name</td><td><?php echo $row["emp_name"]?></td></tr><tr><td>Job</td><td><?php echo $row["job_name"];?></td></tr>
			<tr><td>Hire Date</td><td><?php echo $row["hire_date"]?></td></tr>
			<tr><td>Salary</td><td><?php echo $row["salary"]?></td></tr>
			<tr><td>Department ID</td><td><?php echo $row["dep_id"]?></td></tr>
			<?php 
			$sql2 = "select *from department where dep_id = '".$row["dep_id"]."'";
			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_assoc($result);
			?>
			<tr><td>Department Name</td><td><?php echo $row["dep_name"]?></td></tr>
			<tr><td>Department Location</td><td><?php echo $row["dep_location"]?></td></tr>
			<?php 
			$sql2 = "select *from managers where managers.emp_id = "."$empid".";";
			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_assoc($result);
			?>
			<tr><td>Manager ID</td><td><?php echo $row["man_id"]?></td></tr>
			<?php 
			$sql2 = "select *from project where project.emp_id = "."$empid".";";
			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_assoc($result);
			?>
			<tr><td>Project Name</td><td><?php echo $row["proj_name"]?></td></tr>
			<?php
		}
}    
else {
    echo "No such Employee";
}?>
<br/>
<br/>
<br/>
<br/>
<br/>

<button onclick="window.location.href = 'passwordchange.php';" class="button">Password Change</button>
<br/><br/><br/><br/>
<button onclick="window.location.href = 'index.php';" class="button" id="myid">Logout</button><br/>
			

 



</table>

</body>
</html>