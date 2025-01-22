<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Home | Tax Collection DBMS</title>

    <style>
    .btn-primary:hover {
        background-color: #0E7F28 !important;
    }
    </style>

   
  
</head>

<body>
    <!-- Header -->
    <header class="text-center header-social-icon text-lg-start bg-success text-white">
        <div class="container">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
                <!-- Left -->
                <div class="me-5 d-lg-block">
                    <span><i class="fa fa-calender mx-1"></i> People's Republic of Bangladesh</span>
                </div>
                <!-- Left -->
            </section>
            <!-- Section: Social media -->

        </div>
    </header>


    <!--Navbar Start-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="user_home.php">Tax Database <br> Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Use ms-auto class to push items to the right -->
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="user_home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pay_taxes.php">Pay Taxes</a>
                </li>
                <li class = 'nav-item'>
                    <a class = 'nav-link active' aria-current = 'page' href = 'user_profile.php'>My Profile</a>
                </li>
                <li class = 'nav-item'>
                    <a class = 'nav-link active' aria-current = 'page' href = 'logout.php'>Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!--Navbar Ends-->

    <!--Carousel Start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="h-100 w-100"
                    src="Tools/One.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h2><span>Welcome</span> To Tax Collection System</h2>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img class="h-100 w-100"
                    src="Tools/Two.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    
                </div>
            </div>
            <div class="carousel-item">
                <img class="h-100 w-100" src="Tools/Three.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Caraousel Ends-->


    <!--About Start-->
    <main id="about"  class="mt-5 mb-5">
        <div class="about mt-5 mb-5">
            <div class="container">
                <!--Section Head Starts-->
                <h2 class="h2-responsive fw-bold text-center my-2">About</h2>
                <style>
                    .section-heading {
            color: black;
                      }
    </style>
                <p class="text-center w-responsive mx-auto mb-1">A momentous step in the Government of Bangladesh's promise of a Digital Bangladesh, this website is an integrated solution for e-payment of income taxes, road, and other taxes. The site employs global-standard secure payment systems and is very simple to use.</p>
                <!--Section Head Ends-->

                <div class="row pt-5 align-items-center">
                    <div class="col-md-6 ">
                        <img class="img-fluid"
                            src="Tools/Four.jpg" alt="">
                    </div>
                    <div class="col-md-5">
                        <h2 class="h2-responsive fw-bold text-start section-heading">Important</h2>
                        <p class="lh-base">Taxation not only pays for public goods and services; it is also a key ingredient in the social contract between citizens and the economy. How taxes are raised and spent can determine a government's very legitimacy.</p>
                        <p class="lh-base">The most important purpose of taxation is to raise resources for governments to deliver essential public services. Taxes pay for many of the things that are fundamental to functioning societies around the world, such as health care, schools, and social services. Studies have shown that the bare minimum tax revenue for countries is at least 15 percent of gross domestic product in order to be able to provide basic services to their citizens</p>

                        
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!--About End-->


    <!--Courses Section Start-->
    <main id="Courses" class="course mt-5 pt-4">
        <div class="container">
            <!--Section Head Starts-->
            <h2 class="h2-responsive fw-bold text-center my-2">Taxes</h2>
            
            <!--Section Head Ends-->

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Seven.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Road Tax</h5>
                            <p class="card-text">Road tax, known by various names around the world, is a tax which has to be paid on, or included with, a motorised vehicle to use it on a public road.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Six.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Income Tax</h5>
                            <p class="card-text">An income tax is a tax imposed on individuals or entities (taxpayers) in respect of the income or profits earned by them.
                                Income tax generally is computed as the product of a tax rate times the taxable income.
                                </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Five.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Land Tax</h5>
                            <p class="card-text">A property/land tax (whose rate is expressed as a percentage or per mille, also called millage) is an ad valorem tax on the value of a property.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Contact Us Starts-->

    <main id="contact" style="margin-top: 70px;">
        <div class="container">
            <!--Section Head Starts-->
            <h2 class="h2-responsive fw-bold text-center my-2">Contact Us</h2>
            
            <!--Section Head Ends-->
            <!--Section: Contact v.2-->
            <section class="mb-4">

                <div class="row mt-5">

                    <!--Grid column-->
                    <div class="col-md-6 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Enter Name">

                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="Enter Email">

                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12 pt-3">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="Enter Subject">

                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12 pt-3">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="6"
                                            class="form-control md-textarea" placeholder="Message"></textarea>

                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="text-center text-md-left mt-3 ">
                            <a class="btn btn-primary"
                                >Send</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.25938632708!2d90.38425380000001!3d23.7985053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1666653536013!5m2!1sen!2sbd"
                            width="600" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </main>


    <!--Footer-->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-success text-white pt-4">


        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa fa-home me-3"></i>Taxation
                        </h6>
                        <p>
                        Taxation is a term for when a taxing authority, usually a government, levies or imposes a financial obligation on its citizens or residents.
                        Paying taxes to governments or officials has been a mainstay of civilization since ancient times.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Features
                        </h6>
                        <p>
                            <a href="user_home.php" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="user_home.php" class="text-reset">Career</a>
                        </p>
                        
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Prime Minister's Office</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">National Board of Revenue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Controller General of Accounts</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ministry of Finance</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fa fa-home me-3"></i> Dhaka,Bangladesh</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>
                            teamhercules1@gmail.com
                        </p>
                        <p><i class="fa fa-phone me-3"></i>+8801722233355</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="">Team Hercules</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Get the maximum height of all card elements
    var maxHeight = 0;
    $(".card").each(function() {
        var cardHeight = $(this).outerHeight();
        if (cardHeight > maxHeight) {
            maxHeight = cardHeight;
        }
    });
    
    // Set all card elements to have the same maximum height
    $(".card").css("min-height", maxHeight);
});

document.addEventListener("DOMContentLoaded", function () {
        // Change color of the "Send" button
        var signInButton = document.querySelector(".btn-primary");
        if (signInButton) {
            signInButton.style.backgroundColor = "#198754";
            signInButton.style.borderColor = "#198754";

            signInButton.addEventListener("mouseover", function () {
                signInButton.style.backgroundColor = "#116633";
                signInButton.style.borderColor = "#116633";
            });

            signInButton.addEventListener("mouseout", function () {
                signInButton.style.backgroundColor = "#198754";
                signInButton.style.borderColor = "#198754";
            });
        }
});
</script>


</body>

</html>