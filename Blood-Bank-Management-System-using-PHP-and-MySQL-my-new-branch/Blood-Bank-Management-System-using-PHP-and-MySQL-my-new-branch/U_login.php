<?php
  session_start();
  ob_start();
   include('allmethod.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>U_login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./u_login.css">
    <!-- fontosm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontosm -->

</head>

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

            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- <div class="login-page bcoll"> -->
        <div class="container movvv">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mb-3"> User Login</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="" class="row g-4" method="POST">
                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="email" class="form-control" placeholder="Enter Email" name="Email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control" placeholder="Enter Password" name="Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary px-4 float-end mt-4" name="btnn">login</button>
                                        </div>
                                        <div>
                                          New User..?<a href="./U_reg.php" class="move">Register Now!!</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5  d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <img src="./asset/26547407.jpg" alt="" class="logg">
                                    <h2 class="fs-1 colo">Welcome Back!!!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
    <!-- Footer -->
    <footer class=" text-center work_f">
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
    <!-- Bootstrap JS -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jquery -->
</body>

</html>

<?php

if(isset($_POST["btnn"])){
  
    $responce = loginuser($_POST);

    $record = mysqli_num_rows($responce);
    // echo "no of records".$record;

    if($record > 0){
        $_SESSION['Email'] = $_POST['Email'];
        echo '<script>let timerInterval;
        Swal.fire({
          title: "You are successfully logged in",
          html: "I will close in <b></b> milliseconds.",
          timer: 2000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading();
            const timer = Swal.getPopup().querySelector("b");
            timerInterval = setInterval(() => {
              timer.textContent = `${Swal.getTimerLeft()}`;
            }, 100);
          },
          willClose: () => {
            clearInterval(timerInterval);
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log("I was closed by the timer");
            window.location.href = "dash.php";
          }
        });</script>';
        //  header("location:dash.php");
    }
    else{
        echo '<script>swal("Invalid login attempt.", "Login Fail!", "")</script>';
}
}
ob_end_flush();
?>