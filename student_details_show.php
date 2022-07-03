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
        <div class="student_info_tabel my-3">
            <div class="search_section my-3">
                <form action="" method="get">
                    <!-- <label for="gsearch"><strong>STUDENT NAME:</strong></label> -->
                    <input type="text" id="gsearch" name="search_mail" placeholder="Enter Studnet Email">
                    <input type="submit" name="search" value="search">
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
                    // isset($_REQUEST['search'])
                    if(isset($_REQUEST['search_mail'])){
                        $db_connection=mysqli_connect('localhost','root','','versityproject');
                        if(!$db_connection){
                            die("database is not connected").mysqli_error($db_connection);
                        }
                        $search = $_REQUEST['search_mail'];
                        $query = "SELECT * FROM `studentregistration` WHERE `email` LIKE '%$search%'";
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
                                    <a href="stddelete.php?id=<?php echo $db_id?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a> ||
                                    <a href="stdedit.php?id=<?php echo $db_id?>" class="btn btn-success">EDIT</a> ||
                                    <a href="stdview.php?id=<?php echo $db_id?>" class="btn btn-info">VIEW</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    <?php
                    }
                ?>
            </table> 
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
</body>

</html>


