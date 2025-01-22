<html lang = "en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!--Font Awsome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Custom CSS-->
        <link rel="stylesheet" href="./CSS/style.css">

        <title>Admin Home | Tax Collection DBMS</title>

        <!-- Custom CSS -->
        <style>
            .btn-primary:hover {
                background-color: #0E7F28 !important;
            }
            body {
                display: center;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
                background-color: #f8f9fa;
            }
            .card-body {
                max-width: 900px;
                width: 100%;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                position: relative;
                top: 5%;
                left: 20%;                
            }
            .form-row {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
            }
            .form-label {
                width: 150px;
                font-weight: bold;
            }
            .form-field {
                flex: 1;
            }
        </style>

        <title>Register Users | Tax Collection DBMS</title>
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
                <a class="navbar-brand fw-bold" href="admin_home.php">Tax Database <br> Management System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                
                <span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Use ms-auto class to push items to the right -->
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="show_users.php">Users</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="add_users2.php">Register Users</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="edit_taxes.php">Edit Taxes</a>
                        </li>
                        
                        <li class = 'nav-item'>
                            <a class = 'nav-link active' aria-current = 'page' href = 'admin_profile.php'>My Profile</a>
                        </li>
                        
                        <li class = 'nav-item'>
                            <a class = 'nav-link active' aria-current = 'page' href = 'index.php'>Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!--Navbar Ends-->
        <div class="card-body" id="form-container">
            <form action="register_users.php" method="post">
                <div class="form-row">
                    <label class="form-label" for="nid">NID:</label>
                    <input type="text" class="form-field" id="nid" name="nid" minlength ='10' maxlength = '10' required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="tin">TIN:</label>
                    <input type="text" class="form-field" id="tin" name="tin" required minlength="9" maxlength="9">
                </div>

                <div class="form-row">
                    <label class="form-label" for="name">Name:</label>
                    <input type="text" class="form-field" id="name" name="name" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="mobile_no">Mobile No.:</label>
                    <input type="text" class="form-field" id="mobile_no" name="mobile_no" required minlength="11" maxlength="11">
                </div>

                <div class="form-row">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" class="form-field" id="email" name="email" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="address">Address:</label>
                    <input type="text" class="form-field" id="address" name="address" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="dob">Date of Birth:</label>
                    <input type="date" class="form-field" id="dob" name="dob" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="salary">Salary:</label>
                    <input type="text" class="form-field" id="salary" name="salary" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="job_position">Job Position:</label>
                    <input type="text" class="form-field" id="job_position" name="job_position" required>
                </div>
                <div class="form-row">
                    <label class="form-label" for="job_type">Job Type:</label>
                    <input type="text" class="form-field" id="job_type" name="job_type" required>
                </div>


                <div class="form-row mb-3">
                    <label class="form-label">Does the user own a vehicle?</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="car_own" value="no" class="form-check-input" id="carOwnNo" checked>
                        <label class="form-check-label" for="carOwnNo">No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="car_own" value="yes" class="form-check-input" id="carOwnYes">
                        <label class="form-check-label" for="carOwnYes">Yes</label>
                    </div>
                </div>

                <div class="form-row" id="carDetails" style="display: none;">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="carRegistrationNumber">Vehicle Registration Number</label>
                        <input type="text" name="car_registration_number" class="form-control" id="carRegistrationNumber">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="carMake">Vehicle Make</label>
                        <input type="text" name="car_make" class="form-control" id="carMake">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="carCC">Vehicle CC</label>
                        <input type="text" name="car_cc" class="form-control" id="carCC">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <label class="form-label">Does the user own any property?</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="property_own" value="no" class="form-check-input" id="propertyOwnNo" checked>
                        <label class="form-check-label" for="propertyOwnNo">No</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="property_own" value="yes" class="form-check-input" id="propertyOwnYes">
                        <label class="form-check-label" for="propertyOwnYes">Yes</label>
                    </div>
                </div>

                <div class="form-row" id="propertyDetails" style="display: none;">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="propertyAddress">Property Address</label>
                        <input type="text" name="property_address" class="form-control" id="propertyAddress">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="propertyArea">Property Area</label>
                        <input type="text" name="property_area" class="form-control" id="propertyArea">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="propertyLocation">Property Location (District)</label>
                        <input type="text" name="property_location" class="form-control" id="propertyLocation">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="propertyDimension">Property Dimension (sqft)</label>
                        <input type="text" name="property_dimension" class="form-control" id="propertyDimension">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="propertyType">Please select the type of property</label>
                    </div>

                    <div class="form-check col-md-6 mb-3">
                        <input type="radio" name="property_type" value="land" class="form-check-input" id="propertyTypeLand">
                        <label class="form-check-label" for="propertyTypeLand">Land</label>
                    </div>
                    <div class="form-check col-md-6 mb-3">
                        <input type="radio" name="property_type" value="infrastructure" class="form-check-input" id="propertyTypeInfrastructure">
                        <label class="form-check-label" for="propertyTypeInfrastructure">Infrastructure</label>
                    </div>
                </div>

                <div class="form-row" id="propertyDetailsLand" style="display: none;">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="landValue">Land Value (BDT)</label>
                        <input type="text" name="land_value" class="form-control" id="landValue">
                    </div>
                </div>

                <div class="form-row" id="propertyDetailsInfrastructure" style="display: none;">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="numberOfFloorsInfra">Number of Floors (Infrastructure)</label>
                        <input type="number" name="number_of_floors_infra" class="form-control" id="numberOfFloorsInfra">
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block" name = 'reg_user'>Register</button>
            </form>
        </div>


        <script>
            const carOwnYesRadio = document.getElementById('carOwnYes');
            const carDetailsSection = document.getElementById('carDetails');
            const carOwnNoRadio = document.getElementById('carOwnNo');
            const propertyOwnYesRadio = document.getElementById('propertyOwnYes');
            const propertyDetailsSection = document.getElementById('propertyDetails');
            const propertyDetailsLandSection = document.getElementById('propertyDetailsLand');
            const propertyDetailsInfraSection = document.getElementById('propertyDetailsInfrastructure');
            const propertyOwnNoRadio = document.getElementById('propertyOwnNo');
            const propertyTypeLand = document.getElementById('propertyTypeLand');
            const propertyTypeInfrastructure = document.getElementById('propertyTypeInfrastructure');

            carOwnYesRadio.addEventListener('change', () => {
                if (carOwnYesRadio.checked) {
                    carDetailsSection.style.display = 'block';
                } else {
                    carDetailsSection.style.display = 'none';
                }
            });

            carOwnNoRadio.addEventListener('change', () => {
                carDetailsSection.style.display = 'none';
            });

            propertyOwnYesRadio.addEventListener('change', () => {
                if (propertyOwnYesRadio.checked) {
                    propertyDetailsSection.style.display = 'block';
                } else {
                    propertyDetailsSection.style.display = 'none';
                    propertyDetailsLandSection.style.display = 'none';
                    propertyDetailsInfraSection.style.display = 'none';
                }
            });

            propertyOwnNoRadio.addEventListener('change', () => {
                propertyDetailsSection.style.display = 'none';
                propertyDetailsLandSection.style.display = 'none';
                propertyDetailsInfraSection.style.display = 'none';
            });

            propertyTypeLand.addEventListener('change', () => {
                if (propertyTypeLand.checked) {
                    propertyDetailsLandSection.style.display = 'block';
                    propertyDetailsInfraSection.style.display = 'none';
                }
            });

            propertyTypeInfrastructure.addEventListener('change', () => {
                if (propertyTypeInfrastructure.checked) {
                    propertyDetailsInfraSection.style.display = 'block';
                    propertyDetailsLandSection.style.display = 'none';
                }
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            // Change color of the "Register" button
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
