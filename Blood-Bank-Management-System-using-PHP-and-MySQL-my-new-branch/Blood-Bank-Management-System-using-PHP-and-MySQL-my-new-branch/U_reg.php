<?php
   include "allmethod.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>User registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontosm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontosm -->
    <style>
        .container {
            margin-top: 1%;
            width: 400px;
            border: ridge 1.5px white;
            padding: 20px;
        }

        body {
            background: #E0EAFC;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CFDEF3, #E0EAFC);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .ncolr {
            background-color: #f18973;
            border-bottom: 1px solid black;
            box-shadow: 20px;
        }

        .logo {
            width: 4%;
            height: 4%;
            border-radius: 50px;

        }

        .work_f {
            margin-top: 8%;
            background-color: rgba(128, 128, 128, 0.607);
        }
        .lbtn{
            padding-top: 20px;
        }
    </style>


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
    <h2 style="text-align: center; margin-top: 1%;color:red;"> User Registration </h2>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" id="exampleInputfirstname" name="Name">
            </div>

            <div class="form-group">
                <label for="phoneno">Phone</label>
                <input type="number" class="form-control" id="exampleInputphoneno" name="Phone">
            </div>
            <div class="form-group">
                <label for="Email1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="Email">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="Password">
            </div>
            <div class="form-group">
                <label for="Password">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword" name="Address">
            </div>
            <button type="submit" class="btn btn-primary" name="Register">Register</button>
            <div class="lbtn">Already Register? <a href="U_login.php">Login Here..!</a></div> 
        </form>
    </div>

    <!-- footer -->
    <!-- Footer -->
    <footer class=" text-center work_f">
        <!-- Grid container -->
        <div class=" p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-2">
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jquery -->


</body>

</html>

<?php
  if(isset($_POST["Register"]))
  {
    
    $response = registeruser($_POST);
    
    if($response == 1){
        echo '<script>swal("Registration Done", "Login Now", "success")</script>';
    }
    else{
        echo '<script>swal("Registration Failed", "", "success")</script>';
    }

  }

?>