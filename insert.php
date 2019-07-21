<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "everydaytraveller");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$emailaddress = mysqli_real_escape_string($link, $_REQUEST['emailaddress']);
 
// attempt insert query execution
$sql = "INSERT INTO subscriptions (emailaddress) VALUES ('$emailaddress')";
if(mysqli_query($link, $sql)){
    header('Location: http://www.google.com');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

