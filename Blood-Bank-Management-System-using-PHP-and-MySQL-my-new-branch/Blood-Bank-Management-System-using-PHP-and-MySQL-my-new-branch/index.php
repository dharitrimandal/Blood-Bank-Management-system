<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./asset/BDROP.webp" type="image/x-icon">
    <title>Red Cross</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    <marquee behavior="" direction="left" bgcolor="#b5e7a0" style="color: red;">***We never charge for blood donations.
        Don't pay
        for blood, It's a selfless act. Save lives with out cost, if anyone asks for money to donate blood, Please do
        not encourage.***</marquee>
    <!-- Carousel -->
    <div id="carouselExampleInterval" class="carousel slide cou" data-bs-ride="carousel" data-bs-interval="10000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./asset/Blood-Donation-1.webp" class="ry w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="./asset/Blood-Donation.jpg" class="ry w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./asset/6553602.jpg" class="ry w-100 " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel -->
    <h1 class="tex">Donation highlights</h1>
    <!-- card -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            <div class="col">
                <div class="card h-100 sah">
                    <img src="./asset/card 1.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Benefits of blood donation</h5>
                        <p class="card-text">
                            If you are thinking, "What good would it do to donate my blood!", then keep reading. Many
                            people hesitate to donate blood, thinking it is a tedious process and that they'd faint
                            after that. First, let’s bust the myths about donating blood. These are the reasons why
                            potential and existing...
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sah">
                    <img src="./asset/card 2.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">A Mighty Challenge Blood Crisis in Corona Times</h5>
                        <p class="card-text">All it takes is 350 ml blood to save a life. Whether it is red blood cells,
                            platelets or other components; human blood is life giving. Ask anybody who has been through
                            a challenging health crisis about the importance of blood. content.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sah">
                    <img src="./asset/card 3.jpg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">How can Technology help to reduce blood crisis in hard times?</h5>
                        <p class="card-text">
                            Saving lives by donating blood sometimes feels over-exaggeration, and India remains the
                            world's most substantial shortage of blood, with all states together battling an enormous
                            shortfall of 41 million units and demand...


                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card -->
    <!--about start -->
    <section id="about" class="about about-sec">
        <div class="section-heading text-center">
            <h2 class="maintext">About me</h2>
        </div>
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-about-txt">

                            <h2 class="tag">Donate Blood. Save Lives.</h2> <br>
                            <h4> Every donation is critical and you can make a lifesaving difference. Patients with
                                trauma, undergoing surgery, or with conditions that require blood transfusions, such as
                                sickle cell disease, need blood and blood products. You can help.
                            </h4>
                            <p>
                                Today in the developed world, most blood donors are unpaid volunteers who donate blood
                                for a community supply. In some countries, established supplies are limited and donors
                                usually give blood when family or friends need a transfusion (directed donation). Many
                                donors donate for several reasons, such as a form of charity, general awareness
                                regarding the demand for blood, increased confidence in oneself, helping a personal
                                friend or relative, and social pressure. Despite the many reasons that people donate,
                                not enough potential donors actively donate. However, this is reversed during disasters
                                when blood donations increase.
                            </p>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-about-add-info">
                                        <h3>Phone</h3>
                                        <p>+91 9801245171</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-about-add-info">
                                        <h3>Email</h3>
                                        <p>adi@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-about-add-info">
                                        <h3>website</h3>
                                        <p>www.REDCROSS.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5">
                        <div class="single-about-img">
                            <img src="./asset/26547407.jpg" class="aimg" alt="profile_image">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/.about-->
    <!--about end -->
    <!-- footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <!-- <div class=" my-5"> -->
    <!-- Footer -->
    <footer class="bg-body-tertiary text-center work_f">
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