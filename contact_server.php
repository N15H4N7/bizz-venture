<?php 

include_once('db_connect.php')

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mysqli_query($conectdb,$query);
$message = mysqli_error($conectdb);

$query = "INSERT INTO contact us values ( '$name', '$email', '$message' )";

header('location:index.php')

?>