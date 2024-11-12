<?php
include ("allmethod.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontosm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontosm -->
    <title>Blood Search</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bgimg">
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
                    <!-- <button class="btn  colbtn" type="submit"><a href="search.php" class="sno">Search</a></button> -->
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- select -->
    <h1 class="tedt">Search Blood</h1>
    <form action="" method="post">
        <div class="container mt-4 rounded">
            <select class="form-select" aria-label="Default select example" required name="Blood">
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="O+">O+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="O-">O-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
            </select>
            <div>
                <button class=" btn btn-info mt-4" name="btn">Submit</button>
            </div>
        </div>
    </form>
    <div class="container mt-4">
        <table class="table table-bordered table-hover ">
            <thead class="table-danger">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
        
    
<?php  
            if(isset($_POST['btn'])){

                $Blood = $_POST['Blood'];
                $responce = getalldonor($Blood);

                if(mysqli_num_rows($responce)>0){

                    while($data = mysqli_fetch_assoc($responce)){
                        echo '<tr>
                                    <td class="table-light text-center">'.$data['ID'].'</td>  
                                    <td class="table-light text-center">'.$data['Name'].'</td>            
                                    <td class="table-light text-center">'.$data['Email'].'</td>   
                                    <td class="table-light text-center">'.$data['Phone'].'</td> 
                                    <td class="table-light text-center">  
                                    <a href="request.php?request='.$data['Email'].'" class="btn btn-info">Request</a>
                                    </td>
                        </tr>';
                        
                    }
                }
                else{
                    echo"no record found";
                }

            }

            
?>

</table>
</div>
    <!-- footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <!-- <div class=" my-5"> -->
    <!-- Footer -->
    <footer class="bg-body-tertiary text-center work_f onlys">
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
    <!-- select -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>