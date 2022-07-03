<?php

    

    if(isset($_REQUEST["submit"])){
        $db_connection=mysqli_connect('localhost','root','','versityproject');
        if(!$db_connection){
            die("database is not connected").mysqli_error($db_connection);
        }
        $recid = $_REQUEST["hideid"];
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $fathername = $_REQUEST['fathername'];
        $mothername = $_REQUEST['mothername'];
        $addressone = $_REQUEST['addressone'];
        $addresstwo = $_REQUEST['addresstwo'];
        $birthday = $_REQUEST['birthday'];
        $phnnumber = $_REQUEST['phnnumber'];
        $department = $_REQUEST['department'];
        $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $divisions = $_REQUEST['divisions'];
        // $profile = $_FILES['profile'];

        // $pfl_name=$profile['name'];
        // $pfl_tmp_name=$profile['tmp_name'];

        // $path = "img/";
        // move_uploaded_file($pfl_tmp_name,$path.$pfl_name);

        $stdid = $_REQUEST['stdid'];

        $query="UPDATE `studentregistration` SET `firstname`='$firstname',`lastname`='$lastname',`fathername`='$fathername',`mothername`='$mothername',`addressone`='$addressone',`addresstwo`='$addresstwo',`birthday`='$birthday',`phnnumber`='$phnnumber',`department`='$department',`gender`='$gender',`email`='$email',`divisions`='$divisions',`stdid`='$stdid' WHERE id=$recid";

        $result=mysqli_query($db_connection,$query);

        if($result){
            header("location:studentinfo.php?message=data update successfully");
            // echo "data update sucessfully";
        }

    }

?>