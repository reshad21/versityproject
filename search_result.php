



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

    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
/* 
        tr:nth-child(even) {
        background-color: #dddddd;
        } */
    </style>

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
            

            <!-- result view section -->
            <div class="result_data_table mt-5">
                <div class="student_result_search mb-3">
                    <form action="" method="get">
                        <input type="search" name="search_result" placeholder="Enter Name">
                        <input type="submit" name="search" value="search">
                    </form>
                </div>
                <table>
                    <tr>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Department</th>
                        <th>Final Result</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    if(isset($_REQUEST['search'])){
                        $db_connection=mysqli_connect('localhost','root','','versityproject');
                        if(!$db_connection){
                            die("database is not connected").mysqli_error($db_connection);
                        }
                        $search_result=$_REQUEST['search_result'];
                        $query = "SELECT * FROM `studentresult` WHERE `std_name` LIKE '%$search_result%'";
                        $query = mysqli_query($db_connection,$query);
                        while($row = mysqli_fetch_assoc($query)){
                            $id = $row['id'];
                            $std_id = $row['std_id'];
                            $std_name = $row['std_name'];
                            $std_dept = $row['std_dept'];
                            $std_result = $row['std_result'];
                        ?>
                        <tr>
                            <td><?php echo $std_name;?></td>
                            <td><?php echo $std_id;?></td>
                            <td><?php echo $std_dept;?></td>
                            <td><?php echo $std_result;?></td>
                            <td>
                                <a href="stdrslt_delete.php?id=<?php echo $id?>" onclick="return confirm('Are You Sure?')"class="btn btn-primary">DELETE</a> ||
                                <a href="stdrslt_edit.php?id=<?php echo $id?>" class="btn btn-danger">EDIT</a>
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
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
</body>

</html>

