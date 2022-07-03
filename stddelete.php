<?php

    
    
    


        $db_connection=mysqli_connect('localhost','root','','versityproject');
        if(!$db_connection){
            die("database is not connected").mysqli_error($db_connection);
        }
        $recid = $_REQUEST["id"];
        $query="DELETE FROM `studentregistration` WHERE id=$recid";

        $result=mysqli_query($db_connection,$query);
        if($result){
            header("location: studentinfo.php?data delete sucessfully");
        }








    



?>