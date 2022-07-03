



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- font awosome -->
    <script src="https://kit.fontawesome.com/1e7710cd21.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>
<body>
    <!-- header secton -->
    <div class="container-fluid header_bg">
        <div class="">
            <div class="header-top-section">
                <div class="logo ms-4">
                    <img src="img/headerlogo.png" alt="" class="img-fluid" />
                </div>
                <div class="topber">
                    <a href="#" class="admin">logout</a>
                </div>
            </div>
        </div>   
        <!-- dashborde content -->
        <div class="container-fluid dashbord_bg">
            <div class="sidebarsection">
                <div class="adminlogo text-center">
                    <img src="img/demo.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="dashbord.php">Home</a></li>
                        <li><a href="admission.php">Admission</a></li>
                        <li><a href="studentinfo.php">Student info</a></li>
                        <li><a href="studentresult.php">Student result</a></li>
                        <li><a href="stdresult_update.php">Result Show</a></li>
                        <li><a href="search_result.php">Serach Result</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- student infor tabel -->
        <div class="student_info_tabel my-5">
            <div class="search_section mb-3">
                <form action="student_details_show.php" method="post">
                    <!-- <label for="gsearch"><strong>STUDENT NAME:</strong></label>
                    <input type="text" id="gsearch" name="search_name" placeholder="search_name"> -->
                    <input type="submit" name="search" class="btn btn-success" value="Search student">
                </form>                
            </div>
            <table>
                <tr>
                    <th>Profile</th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DEPARTMENT</th>
                    <th>ACTION</th>
                </tr> 
<?php

$db_connection=mysqli_connect('localhost','root','','versityproject');
if(!$db_connection){
    die("database is not connected").mysqli_error($db_connection);
}
$limit = 4;
if(isset($_GET['page'])){
    $page_number = $_GET['page'];
}else{
    $page_number = 1;
}
$offset = ($page_number - 1)*$limit;
$query = "SELECT * FROM `studentregistration` LIMIT {$offset} ,{$limit}";
$result = mysqli_query($db_connection,$query);
while($row = mysqli_fetch_assoc($result)){
    $db_id = $row['id'];
    $db_firstname = $row['firstname'];
    $db_lastname = $row['lastname'];
    $db_fathername = $row['fathername'];
    $db_mothername = $row['mothername'];
    $db_addressone = $row['addressone'];
    $db_addresstwo = $row['addresstwo'];
    $db_birthday = $row['birthday'];
    $db_phnnumber = $row['phnnumber'];
    $db_department = $row['department'];
    $db_gender = $row['gender'];
    $db_email = $row['email'];
    $db_divisions = $row['divisions'];
    $db_profile = $row['profile'];
    $db_stdid = $row['stdid'];
?>
        <tr>
            <td><img src="img/<?php echo $db_profile ?>" width="50px" height="50px" alt=""></td>
            <td><?php echo $db_firstname ?></td>
            <td><?php echo $db_stdid ?></td>
            <td><?php echo $db_department?></td>
            <td>
                <a href="stddelete.php?id=<?php echo $db_id?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger">DELETE</a> ||
                <a href="stdedit.php?id=<?php echo $db_id?>" class="btn btn-success">EDIT</a> ||
                <a href="stdview.php?id=<?php echo $db_id?>" class="btn btn-info">VIEW</a>
            </td>
        </tr>
<?php
}
?>
</table> 


<!-- paginaton section  work with php-->
<nav aria-label="Page navigation example" class="my-5">
<ul class="pagination">
<?php
$db_connection=mysqli_connect('localhost','root','','versityproject');
$query2="SELECT * FROM `studentregistration`";
$result2=mysqli_query($db_connection,$query2);
if(mysqli_num_rows($result2)){
    $total_record = mysqli_num_rows($result2);
    $total_page = ceil($total_record / $limit);
    
    if($page_number > 1){
        echo '<li class="page-item"><a class="page-link" href="studentinfo.php?page='.($page_number-1).'">Previous</a></li>';
    }

    for($i=1; $i<=$total_page; $i++){
        if($i == $page_number){
            $active = "active";
        }else{
            $active = "";
        }
        echo '<li class='.$active.'><a class="page-link" href="studentinfo.php?page='.$i.'">'.$i.'</a></li>';
    }

    if($total_page > $page_number){
        echo '<li class="page-item"><a class="page-link" href="studentinfo.php?page='.($page_number+1).'">Next</a></li>';
    }
}
?>
  </ul>
</nav>
<!-- paginaton section work end with php -->



         
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
</body>

</html>


