<html lang="en">
    <div class = 'content-container'>

        <h5>Land Tax Payment</h5><br>

        <?php
        session_start();
        require_once('DBConnection.php');

        $name = $_SESSION['name'];
        $nid = $_SESSION['nid'];
        $tax_name = 'Property Tax';

        $sql1 = "SELECT Property_Address, Property_Area FROM Owns WHERE NID = '$nid'";
        $result1 = mysqli_query($conn, $sql1);
        $own = mysqli_fetch_assoc($result1);
        $address = $own['Property_Address'];
        $area = $own['Property_Area'];

        if (is_null($address) and is_null($area)) {
            echo "You don't have any property registered.";
        }
        else {
            $sql2 = "SELECT Property_Type FROM Owns O INNER JOIN Property P ON O.Property_Address = P.Property_Address AND O.Property_Area = P.Property_Area WHERE NID = '$nid'";
            $result2 = mysqli_query($conn, $sql2);

            $property_info = mysqli_fetch_assoc($result2);
            $propertyType = $property_info['Property_Type'];
            
            if ($propertyType == 'Infrastructure'){
                $sql3 = "SELECT * FROM Property WHERE Property_Address = '$address' AND Property_Area = '$area'";
                $result3 = mysqli_query($conn, $sql3);

                $propInfo = mysqli_fetch_assoc($result3);
                $floor_no = $propInfo['Floors'];
                $prop_loc = $propInfo['Location'];

                if (strlen((string)$floor_no) == 1) {
                    $sql4 = "SELECT Ref_no, Rate FROM Tax_Rate WHERE Ref_no LIKE '%PInf-_'";
                    $result4 = mysqli_query($conn, $sql4);

                    $ref = mysqli_fetch_assoc($result4);
                    $tref = $ref['Ref_no'];

                    $tref = substr($tref, -1);
                    settype($tref, "integer");

                    if ($floor_no <= $tref) {
                        $sql5 = "SELECT Ref_no, Rate FROM Tax_Rate WHERE Ref_no Like '%PInf-_'";
                        $result5 = mysqli_query($conn, $sql5);
                        
                        $ref = mysqli_fetch_assoc($result5);
                        $tref_no = $ref['Ref_no'];

                        $_SESSION['tax_ref_no'] = $tref_no;

                        $tref_no = substr($tref_no, -1);
                        settype($tref_no, "integer");

                        $rate = $ref['Rate'];
                    }
                    else{
                        $sql6 = "SELECT Ref_no, Rate FROM Tax_Rate WHERE Ref_no LIKE '%PInf-__'";
                        $result6 = mysqli_query($conn, $sql6);

                        $ref = mysqli_fetch_assoc($result6);
                        $tref_no = $ref['Ref_no'];

                        $_SESSION['tax_ref_no'] = $tref_no;

                        $tref_no = substr($tref_no, -2);
                        settype($tref_no, "integer");

                        $rate = $ref['Rate'];
                    }
                }
                else{
                    $sql7 = "SELECT Ref_no, Rate FROM Tax_Rate WHERE Ref_no LIKE '%PInf-__'";
                    $result7 = mysqli_query($conn, $sql7);

                    $ref = mysqli_fetch_assoc($result7);
                    $tref_no = $ref['Ref_no'];

                    $_SESSION['tax_ref_no'] = $tref_no;

                    $tref_no = substr($tref_no, -2);
                    settype($tref_no, "integer");

                    $rate = $ref['Rate'];
                }

                $prop_tax_amount = ($tref_no * 10000) * ($rate/100);
            }
            else if ($propertyType == 'Land'){
                $sql8 = "SELECT * FROM Property WHERE Property_Address = '$address' AND Property_Area = '$area'";
                $result8 = mysqli_query($conn, $sql8);

                $land = mysqli_fetch_assoc($result8);
                $land_value = $land['Land_Value'];
                $prop_loc = $land['Location'];

                $sql9 = "SELECT Ref_no, Rate FROM Tax_Rate WHERE Ref_no = 'TX-PL'";
                $result9 = mysqli_query($conn, $sql9);

                $r = mysqli_fetch_assoc($result9);
                $tref_no = $r['Ref_no'];
                $rate = $r['Rate'];
                
                $_SESSION['tax_ref_no'] = $tref_no;

                $prop_tax_amount = $land_value * ($rate/100);
            }

            $currentDate = date('Y-m-d');

            $_SESSION['tax_amount'] = $prop_tax_amount;
            $_SESSION['payDate'] = $currentDate;

            echo "Property Holding Number: <b>$address, $area</b> <br>";
            echo "Property Location: <b>$prop_loc</b> <br>";
            echo "Property Type: <b>$propertyType</b><br><br>";
            echo "Property Owner: <b>$name</b> <br><br>";

            echo "Tax Amount : <b>BDT ". $prop_tax_amount. "</b> <br><br>";
        ?>

            <form action="pay_success.php" method="post">
                <input type="submit" name="calculate" value="Pay Tax" class="pay-button">
            </form>
        <?php
        }
        
        ?>
    </div>

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

        <title>Land Tax Payment | Tax Collection DBMS</title>

        <style>
            .btn-primary:hover {
                background-color: #0E7F28 !important;
            }
            
            .content-container {
                max-width: 600px;
                margin: auto;
                padding: 20px;
                background-color: #ffffff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                text-align: center;
                position: absolute;
                top: 55%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* Additional styles for the "Pay Tax" button */
            .pay-button {
                padding: 10px 20px;
                background-color: #0E7F28;
                border: none;
                color: white;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s;
                border-radius: 4px;
            }

            .pay-button:hover {
                background-color: #0a5c1b;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f5f5f5;
            }

            .header-social-icon {
                background-color: #0E7F28;
                color: white;
            }

            .navbar {
                background-color: #343a40;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .nav-link {
                color: white;
            }

            .nav-link:hover {
                color: #0E7F28;
            }

            .container {
                margin-top: 0;
            }

            h5 {
                margin-top: 20px;
                font-weight: 600;
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
    </body>
</html>