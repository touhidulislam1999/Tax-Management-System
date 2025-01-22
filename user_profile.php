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

    <title>User Profile | Tax Collection DBMS</title>

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
        <a class="navbar-brand fw-bold" href="#">Tax Database <br> Management System</a>
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

    <?php
    
    session_start();
    require_once('DBConnection.php');

    $name = $_SESSION['name'];
    $nid = $_SESSION['nid'];

    $sql = "SELECT * from Person where Name = '$name' and NID = '$nid'";

    $result = mysqli_query($conn, $sql);
    
    ?>

    <br><br><br>

    <div class="container">
        <table class="table table-bordered">
            <div class="container text-center"> 
                <h2>User Profile</h2><br>
                
                <thead class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>NID</th>
                        <th>TIN</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>Salary</th>
                        <th>Job Position</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <?php
                    
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                            <td><?php echo $row[8]; ?></td>
                        </tr>
                
                </tbody>
        </table>
        <br><br><br><br>
    </div>
    <?php
    }
    ?>

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
                            <a href="login.html" class="text-reset">Login</a>
                        
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
</script>


</body>

</html>