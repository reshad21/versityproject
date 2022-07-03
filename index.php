
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
                    <a href="#" class="admin">Admin login</a>
                    <!-- <a href="#" class="student">Student login</a> -->
                </div>
            </div>
        </div>
        <!-- popup box one-->
        <div class="popup">
            <div class="popup_content">
                <span class="cross"><i class="far fa-times-circle"></i></span>
                <img src="img/admin-support.jpg" alt="" />
                <form action="admin.php" method="post">
                    <input type="email" name="email" placeholder="Enter your email" required="required"/><br />
                    <input type="text" name="password" placeholder="Enter your password" required="required"/><br />
                    <input type="submit" name="login" value="Login" />
                </form>
            </div>
        </div>
    </div>

        <div class="container-fluid my-4">
            <div class="container text-center">
                <h4><strong>Faculty of Science & Engineering</strong></h4>
                <h4><strong>Department of Computer Science & Engineering</strong></h4>
                <div class="course mb-4">
                    <h4 style="color:cadetblue; text-decoration:underline"><strong>About Course</strong></h4>
                    <h5><strong>Course Titel: Computer Science & Engineering</strong></h5>
                    <h5><strong>Course Code: CSE-400</strong></h5>
                </div>
                <div class="course mb-4">
                    <h4 style="color:cadetblue; text-decoration:underline"><strong>Submitted To</strong></h4>
                    <h5><strong>Name: Sayed Imran Hossain</strong></h5>
                    <h5><strong>Lecturer: Department of Computer Science & Engineering </br> GLOBAL UNIVERSITY BANGLADESH</strong></h5>
                </div>
                <div class="course mb-4">
                    <h4 style="color:cadetblue; text-decoration:underline"><strong>Submitted By</strong></h4>
                    <h5><strong>Rashed Uzzaman Reshad ( id:181-011-021 )</strong></h5>
                    <h5><strong>Santo Chandro Das ( id:181-011-011 )</strong></h5>
                    <h5><strong>Masiur Rahman Munna ( id:181-011-008 )</strong></h5>
                    <h5><strong>Department: Computer Science & Engineering</strong></h5>
                    <h5><strong>Program: B.Sc in CSE</strong></h5>
                </div>
            </div>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custome js -->
    <script src="js/main.js"></script>
</body>

</html>
