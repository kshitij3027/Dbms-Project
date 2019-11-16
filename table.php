

<html>
<head>

</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {?>
    <table border="1"><tr>
	<th>Empno</th></tr><?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
        <tr><td><?php echo   $row["emp_no"] ;?></td></tr><?php
    }
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>