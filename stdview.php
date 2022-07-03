<?php
    $recid = $_REQUEST["id"];
    $db_connection=mysqli_connect('localhost','root','','versityproject');
    if(!$db_connection){
        die("database is not connected").mysqli_error($db_connection);
    }
    $query = "SELECT `id`, `firstname`, `lastname`, `fathername`, `mothername`, `addressone`, `addresstwo`, `birthday`, `phnnumber`, `department`, `gender`, `email`, `divisions`, `profile`, `stdid` FROM `studentregistration` WHERE id=$recid";
    $result = mysqli_query($db_connection, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $fathername = $row['fathername'];
            $mothername = $row['mothername'];
            $addressone = $row['addressone'];
            $addresstwo = $row['addresstwo'];
            $birthday = $row['birthday'];
            $phnnumber = $row['phnnumber'];
            $department = $row['department'];
            $gender = $row['gender'];
            $email = $row['email'];
            $divisions = $row['divisions'];
            $profile = $row['profile'];
            $stdid = $row['stdid'];
        }
    }
?>


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
    <div class="header_bg">
        <div class="">
            <div class="header-top-section">
                <div class="logo">
                    <img src="img/headerlogo.png" alt="" class="img-fluid" />
                </div>
                <div class="topber">
                    <a href="#" class="admin">logout</a>
                </div>
            </div>
        </div>   
        <!-- dashborde content -->
        <div class=" dashbord_bg">
            <div class="dashbord_body_Section">
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
            <!-- student single infromation show  -->
            <div class="student_single_data">
                <div class="student_image text-center">
                    <img src="img/<?php echo $profile?>" width="200px" height="200px" alt="">
                </div>
                <form class="mt-5">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Studnet id no</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $stdid?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Department Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $department?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $firstname.$lastname?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Father Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $fathername?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mother Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $mothername?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Present address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $addressone?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Permanent address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $addresstwo?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date of birth</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputEmail3" value="<?php echo $birthday?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone number</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $phnnumber?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $email?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Divisions</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="<?php echo $divisions?>">
                        </div>
                    </div>

                </form>
            </div>

            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
</body>

</html>


