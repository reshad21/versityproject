
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
            <div class="admissionsection clearfix">
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
                <!-- form section  -->
                <div class="maincontentsection">
                    <h4 class="text-center mb-4">Student Registration From</h4>
                    <form action="studentdatainsert.php" method="post" enctype="multipart/form-data">
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" name="firstname" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Father name" name="fathername" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Mother name" name="mothername" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Present address" name="addressone" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Parmanet address" name="addresstwo" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="date" class="form-control" name="birthday" required>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Phone number" name="phnnumber" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="department" required>
                                    <option selected value="">Department</option>
                                    <option value="CSE">CSE (Computer Science & Engineering)</option>
                                    <option value="BBA">BBA (Bachalor of Business Administration)</option>
                                    <option value="EEE">EEE (Electrical & Electronics Engineering)</option>
                                    <option value="LAW">LAW (Laws of administration)</option>
                                    <option value="ENG">ENG (Bachalor of English)</option>
                                    <option value="MBA">MBA (Master of Business Administration)</option>
                                    <option value="MSC">MSC (Master of Computer Science & Engineering)</option>
                                </select>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <label class="me-4">Gender</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" required>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked required>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Enter your mail address" name="email" required>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="divisions" required>
                                    <option selected value="">Select Divisions</option>
                                    <option value="Barisal">Barisal </option>
                                    <option value="Chittagong">Chittagong </option>
                                    <option value="Dhaka">Dhaka </option>
                                    <option value="Khulna">Khulna </option>
                                    <option value="Rajshahi">Rajshahi </option>
                                    <option value="Rangpur">Rangpur </option>
                                    <option value="Sylhet">Sylhet </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formFile" class="form-label">Student ps photo</label>
                                <input class="form-control" type="file" id="formFile" name="profile" required>
                            </div>
                            <div class="col">
                                <label for="formFile" class="form-label">Student ID number</label>
                                <input type="text" class="form-control" placeholder="Student Id number" name="stdid" required>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                            <label class="form-check-label" for="defaultCheck1">
                                I agree all the terms and conditons
                            </label>
                        </div>

                        <div class="submit mt-4">
                            <input type="submit" value="submit" name="submit" class="btn btn-success">
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

