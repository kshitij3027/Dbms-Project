<?php
	$empid = $_POST["empid"];
	$passwrd = $_POST["newpswd"];
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Corp";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$empid = $_POST["empid"];
if(isset($_POST['newpswd'])) {
	$newpass = $_POST["confirm"];
	$sql = 	"UPDATE `login` SET `password`= "."'$newpass'"." WHERE `emp_id`= "."$empid".";" ;
	mysqli_query($conn, $sql);
	echo " Your password is changed";
	?>
	<a href="employeelogin.php" class="GoToHomepage">Go to Login</a>
<?php
}
?>