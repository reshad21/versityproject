
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- owl-carosul-css -->
    <link href="css/owl.carousel.min.css" rel="stylesheet" >
    <link href="css/owl.theme.default.min.css" rel="stylesheet">

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
                <div class="logo">
                    <img src="img/headerlogo.png" alt="" class="img-fluid" />
                </div>
                <div class="topber">
                    <a href="index.php" class="admin">logout</a>
                </div>
            </div>
        </div>   
        <!-- dashborde content -->
        <div class="dashbord_bg">
            <div class="wrapper_content">
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
                        </ul>
                    </div>
                </div>
                <div class="maincontent_section">
                    <!-- slider section -->
                    <div class="slider_section">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/slider_img_1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/slider_img_2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/slider_img_3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <!-- owl carsosol section -->
                    <div class="teacher_carosul_section px-2 mt-4">
                        <div class="row gx-1">
                            <div class="col-md-4">
                                <div class="card"">
                                    <img src="img/imran-sir.jpg" class="card-img-top" alt="..." height="412px">
                                    <div class="card-body">
                                        <h3 style="font-size: 22px; text-align: center;">Department of Computer Science & Engineering</h3>
                                        <h5 class="text-center" style="font-size: 17px;  color: #036c72; font-weight: 600;">Name: Sayed Imran Hossain(Lecturer)</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card"">
                                    <img src="img/mumu-pp.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 style="font-size: 22px; text-align: center;">Department of Computer Science & Engineering</h3>
                                        <h5 class="text-center" style="font-size: 17px;  color: #036c72; font-weight: 600;">Name: Rejowana Islam(Head of Department)</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card"">
                                    <img src="img/anina-bal.jpg" class="card-img-top" alt="..." height="412px">
                                    <div class="card-body">
                                        <h3 style="font-size: 22px; text-align: center;">Department of Computer Science & Engineering</h3>
                                        <h5 class="text-center" style="font-size: 17px;  color: #036c72; font-weight: 600;">Name: Anindya Bal(Lecturer)</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                </div>
            </div>
        </div>
    </div>
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>

</html>

