<?php

$id=$_REQUEST['id'];
$db_connection=mysqli_connect('localhost','root','','versityproject');
if(!$db_connection){
    die("database is not connected").mysqli_error($db_connection);
}

$query = "DELETE FROM `studentresult` WHERE id=$id";
$result = mysqli_query($db_connection,$query);

if($result){
    header("location:stdresult_update.php");
}



?>