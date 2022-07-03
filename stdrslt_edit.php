<?php

    $recid=$_REQUEST['id'];
    $db_connection=mysqli_connect('localhost','root','','versityproject');
    if(!$db_connection){
        die("database is not connected").mysqli_error($db_connection);
    }
    $query ="SELECT `id`, `std_id`, `std_name`, `std_dept`, `std_result` FROM `studentresult` WHERE id=$recid";

    $result = mysqli_query($db_connection,$query);

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $std_id = $row['std_id'];
        $std_name = $row['std_name'];
        $std_dept = $row['std_dept'];
        $std_result = $row['std_result'];
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
    <div class="container-fluid header_bg">
        <div class="container">
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

            <!-- result input section -->
            <div class="result_input_section my-4">
                <form action="stdfinalyearresultedit.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Student name</label>
                    <input type="text" name="std_name" class="form-control" id="formGroupExampleInput" placeholder="Student name" value="<?php echo $std_name?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Student ID</label>
                    <input type="text" name="std_id" class="form-control" id="formGroupExampleInput2" placeholder="Student ID" value="<?php echo $std_id?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Chose department</label>
                        <select class="form-select" aria-label="Default select example" name="department" value="<?php echo $std_dept?>">
                            <!-- <option selected value="">Department</option> -->
                            <option value="CSE">CSE (Computer Science & Engineering)</option>
                            <option value="BBA">BBA (Bachalor of Business Administration)</option>
                            <option value="EEE">EEE (Electrical & Electronics Engineering)</option>
                            <option value="LAW">LAW (Laws of administration)</option>
                            <option value="ENG">ENG (Bachalor of English)</option>
                            <option value="MBA">MBA (Master of Business Administration)</option>
                            <option value="MSC">MSC (Master of Computer Science & Engineering)</option>
                        </select>
                </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Enter final year result</label>
                        <input type="text" name="std_result" class="form-control" id="formGroupExampleInput2" placeholder="Enter final year result" value="<?php echo $std_result?>">
                    </div>
                    <div class="submit_section d-flex justify-content-between">
                        <input type="submit" name="submit" value="Update" class="btn btn-success mt-3">
                        <input type="hidden" name="hideid" value="<?php echo $id ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
</body>

</html>

