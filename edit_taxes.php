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

    <title>Edit Tax Information | Tax Collection DBMS</title>

    <style>
        .btn-primary:hover {
            background-color: #0E7F28 !important;
        }

        /* Custom CSS for equal-height cards */
        .course .box {
            display: flex;
            flex-direction: column;
        }

        .course .card-body {
            flex: 1;
        }

        .center-boxes {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust to desired height */
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Use ms-auto class to push items to the right -->
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="show_users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="add_users.php">Register Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="edit_taxes.php">Edit Taxes</a>
                    </li>
                    <li class = 'nav-item'>
                        <a class = 'nav-link active' aria-current = 'page' href = 'admin_profile.php'>My Profile</a>
                    </li>
                    <li class = 'nav-item'>
                    <a class = 'nav-link active' aria-current = 'page' href = 'logout.php'>Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Navbar Ends-->

    <!--Courses Section Start-->
    <main id="Courses" class="course mt-5 pt-4">
        <div class="container">
            <h2 class="h2-responsive fw-bold text-center my-2">Taxes</h2>
            <div class="row mt-1 center-boxes">
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Seven.jpg" class="card-img-top" alt="Road Tax">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Road Tax</h5>
                            <button type="button" class="btn btn-success"
                                onclick="window.location.href='update_tax_rate.php'">Edit Tax Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Six.png" class="card-img-top" alt="Income Tax">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Income Tax</h5>
                            <button type="button" class="btn btn-success"
                                onclick="window.location.href='update_tax_rate.php'">Edit Tax Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Five.jpg" class="card-img-top" alt="Land Tax">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Land Tax</h5>
                            <button type="button" class="btn btn-success"
                                onclick="window.location.href='update_tax_rate.php'">Edit Tax Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        

 <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get all the card elements
            const cards = document.querySelectorAll(".card.box");

            
            let maxHeight = 0;
            cards.forEach(card => {
                const cardHeight = card.offsetHeight;
                if (cardHeight > maxHeight) {
                    maxHeight = cardHeight;
                }
            });

            
            cards.forEach(card => {
                card.style.height = maxHeight + "px";
            });
        });
    </script>


</body>

</html>