<html lang="en">
    <div class = "content-container">
        <h5>Road Tax Payment</h5><br>
    
        <?php
    
        session_start();
    
        require_once('DBConnection.php');
    
        $name = $_SESSION['name'];
        $nid = $_SESSION['nid'];
        $tax_name = 'Road Tax';

        $sql1 = "SELECT Vehicle_Reg_no FROM Owns where NID = '$nid'";

        $result1 = mysqli_query($conn, $sql1);
        $own = mysqli_fetch_assoc($result1);

        $vehicle_reg = $own['Vehicle_Reg_no'];

        if (is_null($vehicle_reg) == 1){
            echo "You don't have any car registered.";
        }
        else{
            $sql2 = "SELECT * FROM Owns O INNER JOIN Vehicle V ON O.Vehicle_Reg_no = V.Reg_no WHERE NID = '$nid'";
            $result2 = mysqli_query($conn, $sql2);

            $vehicle_own = mysqli_fetch_array($result2);
            $vehicle_cc = $vehicle_own['CC'];

            $sql3 = "SELECT * FROM Tax_Rate WHERE Ref_no LIKE CONCAT('%R-', $vehicle_cc)";
            $result3 = mysqli_query($conn, $sql3);

            $v_rate = mysqli_fetch_assoc($result3);
            $v_tax_rate = $v_rate['Rate'];
            settype($v_tax_rate, "integer");

            $vehicle_tax_amount = $v_tax_rate;

            $currentDate = date('Y-m-d');

            $tref_no = $v_rate['Ref_no'];

            $_SESSION['tax_ref_no'] = $tref_no;
            $_SESSION['tax_amount'] = $vehicle_tax_amount;
            $_SESSION['payDate'] = $currentDate;

            echo "Vehicle No.: <b>$vehicle_reg</b> <br>";
            echo "Vehicle Engine Power: <b>$vehicle_cc Cc</b> <br>";
            echo "Vehicle Owner: <b>$name</b> <br><br>";
            echo "Tax Amount : <b>BDT ". $vehicle_tax_amount. "</b><br><br>";

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

    <title>Road Tax Payment | Tax Collection DBMS</title>

    <!--<style>
    .btn-primary:hover {
        background-color: #0E7F28 !important;
    }
    </style>-->

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