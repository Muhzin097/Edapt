<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "edapt");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$position = mysqli_real_escape_string($link, $_REQUEST['position']);
$number = mysqli_real_escape_string($link, $_REQUEST['number']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$qualification = mysqli_real_escape_string($link, $_REQUEST['qualification']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO career (Position,Number,Description,Qualification,Mail) VALUES ('$position', '$number', '$description','$qualification','$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<a href="admin.php"><button class="btn btn-dark text-center"  >go back</button></a>