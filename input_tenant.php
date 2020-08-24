<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("bikepriexpo.com:3306", "bikepri_user", "exploit9827", "bikepri_produk");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$desc = mysqli_real_escape_string($link, $_REQUEST['desc']);
$cluster = mysqli_real_escape_string($link, $_REQUEST['cluster']);

// Attempt insert query execution
$sql = "INSERT INTO tenant (`id`, `name`, `desc`, `cluster`) VALUES ('$id', '$name', '$desc', '$cluster')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("Location: input.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>