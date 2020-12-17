<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edapt";
// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
<?php
$link = mysqli_connect("localhost", "root", "", "edapt");
$id = $_GET['id'];
 
$sql ="DELETE from blog WHERE id='$id'";
if(mysqli_query($link,$sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
?>
<a href="admin.php"><button class="btn btn-dark text-center"  >go back</button></a>