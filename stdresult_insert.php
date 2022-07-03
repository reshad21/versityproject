<?php

    if(isset($_REQUEST['submit'])){
       echo $std_id = $_REQUEST['std_id'];
       $std_name = $_REQUEST['std_name'];
       echo $department = $_REQUEST['department'];
       $std_result = $_REQUEST['std_result'];

       $db_connection=mysqli_connect('localhost','root','','versityproject');
       if(!$db_connection){
           die("database is not connected").mysqli_error($db_connection);
       }

       $query = "INSERT INTO `studentresult`(`std_id`, `std_name`, `std_dept`, `std_result`) VALUES ('$std_id','$std_name','$department','$std_result')";

       $result = mysqli_query($db_connection,$query);
       if($result){
            header("Location:studentresult.php");
       }
    }


?>