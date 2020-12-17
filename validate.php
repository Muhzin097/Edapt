<?php
// Start the session
session_start();
?>
<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM login");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) && 
			($user['password'] == $password)) {
				$_SESSION['adminname'] = $adminname;
			 
				header("Location: admin.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
            echo "</script>";
            
			die();
		}
	}
}

?>
<a href="login.php"><button class="btn btn-dark text-center"  >go back</button></a>