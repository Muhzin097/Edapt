<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "edapt");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$head = mysqli_real_escape_string($link, $_REQUEST['head']);
$descr = mysqli_real_escape_string($link, $_REQUEST['descr']);
$pic = mysqli_real_escape_string($link, $_REQUEST['pic']); 
$short = mysqli_real_escape_string($link, $_REQUEST['short']); 
$publisher = mysqli_real_escape_string($link, $_REQUEST['publisher']); 
// Attempt insert query execution
$sql = "INSERT INTO blog (id,head,short,descr,pic,publisher ) VALUES ('$id','$head', '$short' ,'$descr', '$pic', '$publisher' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<a href="admin.php"><button class="btn btn-dark text-center"  >go back</button></a>