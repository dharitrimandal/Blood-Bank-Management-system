<?php
 include ("allmethod.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./asset/BDROP.webp" type="image/x-icon">
    <title>Request blood</title>
    <!--BOOTSTRAP CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--BOOTSTRAP CDN-->
    <!-- fontosm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontosm -->
    <!-- css link-->
    <link rel="stylesheet" href="./style.css">
    <!-- css link-->
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- FONT -->
</head>

<?php
session_start();
if(!isset($_SESSION['Email'])){
  header('location: U_login.php');
}

?>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg ncolr">
        <div class="container-fluid">
            <img class="navbar-brand logo" src="./asset/26547407.jpg" alt="logo">
            <!-- <a class="navbar-brand" href="./asset/26547407.jpg"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="D_login.php">Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="U_login.php">User</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->

                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn  colbtn" type="submit"><a href="search.php" class="sno">Search</a></button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <div class="container">
    <h2 class="tedt">Fill The Details For Blood.!</h2>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstname">Requested By</label>
                <input type="text" class="form-control" id="exampleInputfirstname" name="Requestedby" value="<?php echo $_SESSION['Email'];?>" readonly >
            </div>

            <div class="form-group">
                <label for="phoneno">Request To</label>
                <input type="text" class="form-control" id="exampleInputphoneno" name="Requestto" value="<?php echo $_GET['request'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="Email1">Date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="Date" required>
            </div>
            <div class="form-group">
                <label for="Password">Purpose</label>
                <input type="text" class="form-control" id="exampleInputPassword" name="Purpose">
            </div>
            <div class="form-group">
                <label for="Password">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword" name="Address">
            </div>
            <button type="submit" class="btn btn-primary mt-4" name="request">Request</button>
            <!-- <div class="lbtn">Already Register? <a href="U_login.php">Login Here..!</a></div>  -->
        </form>
    </div>
</div>






    <!-- footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <!-- <div class=" my-5"> -->
    <!-- Footer -->
    <footer class="bg-body-tertiary text-center work_f rcls">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #3b5998;"
                    href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #55acee;"
                    href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #dd4b39;"
                    href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #ac2bac;"
                    href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #0082ca;"
                    href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="">www.REDCROSS.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- </div> -->
    <!-- End of .container -->
    <!-- footer -->
    <!-- js bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- js bootstrap cdn -->
</body>

</html>


<?php
if(isset($_POST["request"])){
    $req = request($_POST);

    if($req == 1){
        echo "<script>alert('Request Done')</script>";
    }
    else{
        echo "<script>alert('Request Failed')</script>";
    }
}



?>

