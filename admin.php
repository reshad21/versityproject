<?php
    session_start();
    if(isset($_REQUEST['login'])){
       $email=$_REQUEST['email'];
       $password=$_REQUEST['password'];

        $db_connection=mysqli_connect('localhost','root','','versityproject');
        if(!$db_connection){
            die("database is not connected").mysqli_error($db_connection);
        }

        $query= "SELECT * FROM `admintable`";
        $result=mysqli_query($db_connection,$query);

        if($result){
            while($row=mysqli_fetch_array($result)){
                $db_id=$row['id'];
                $db_email=$row['email'];
                $db_password=$row['password'];
                $admin_name=$row['admin_name'];
                if(($email && $db_email) && ($password && $db_password)){
                    // $_SESSION['user'] = $adminuser;
                    // $_SESSION['current_timestmp'] = time();
                    header('Location:dashbord.php?id=<?php echo $admin_name?>');
                }
            }
        }
    }



?>