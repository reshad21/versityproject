<?php

    $hidenid = $_REQUEST['hideid'];
    $std_name = $_REQUEST['std_name'];
    $std_id = $_REQUEST['std_id'];
    $std_dept = $_REQUEST['department'];
    $std_result = $_REQUEST['std_result'];

    $db_connection=mysqli_connect('localhost','root','','versityproject');
    if(!$db_connection){
        die("database is not connected").mysqli_error($db_connection);
    }
    $query="UPDATE `studentresult` SET `std_id`='$std_id',`std_name`='$std_name',`std_dept`='$std_dept',`std_result`='$std_result' WHERE id=$hidenid";

    $result = mysqli_query($db_connection,$query);

    if($result){
        header("location:stdresult_update.php");
    }



?>