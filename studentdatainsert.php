<?php

if(isset($_REQUEST['submit'])){

    echo $firstname = $_REQUEST['firstname'];
    echo $lastname = $_REQUEST['lastname'];
    echo $fathername = $_REQUEST['fathername'];
    $mothername = $_REQUEST['mothername'];
    $addressone = $_REQUEST['addressone'];
    $addresstwo = $_REQUEST['addresstwo'];
    $birthday = $_REQUEST['birthday'];
    $phnnumber = $_REQUEST['phnnumber'];
    $department = $_REQUEST['department'];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $divisions = $_REQUEST['divisions'];

    $profile = $_FILES['profile'];
    echo $pfl_name = $profile["name"];
    echo $pfl_tmp_name=$profile["tmp_name"];

    $stdid = $_REQUEST['stdid'];


    // porfile pic work
    $location = "img/";
    if($pfl_name){
        move_uploaded_file($pfl_tmp_name,$location.$pfl_name);
    }

    $db_connection=mysqli_connect('localhost','root','','versityproject');
    if(!$db_connection){
        die("database is not connected").mysqli_error($db_connection);
    }
    $query = "INSERT INTO `studentregistration`(`firstname`, `lastname`, `fathername`, `mothername`, `addressone`, `addresstwo`, `birthday`, `phnnumber`, `department`, `gender`, `email`, `divisions`, `profile`, `stdid`) VALUES ('$firstname','$lastname','$fathername','$mothername','$addressone','$addresstwo','$birthday','$phnnumber','$department','$gender','$email','$divisions','$pfl_name','$stdid')";

    $result=mysqli_query($db_connection,$query);

    if($result){
        header("location:studentinfo.php?data insert sucessfully");
    }


}



?>