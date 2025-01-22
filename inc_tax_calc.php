<html lang="en">
    <div class = "content-container">
        <h5>Income Tax Payment</h5><br>
    
        <?php
        session_start();

        require_once('DBConnection.php');

        $name = $_SESSION['name'];
        $nid = $_SESSION['nid'];
        $tax_name = 'Income Tax';

        $sql1 = "SELECT * from Person P INNER JOIN Job J ON P.NID = J.Person_NID WHERE Name = '$name' and NID = '$nid'";
        $result1 = mysqli_query($conn, $sql1);

        $row = mysqli_fetch_assoc($result1);

        $job_type = $row['Job_type'];

        $salary = $row['Salary'];
        settype($salary, "integer");

        $salary_year = $salary * 12;

        $sql2 = "SELECT * FROM Tax_rate WHERE Ref_no LIKE '%TX-INC-%'";
        $result2 = mysqli_query($conn, $sql2);

        $inc_tax_amount = 0;

        while ($row = mysqli_fetch_assoc($result2)){
            foreach ($row as $rows){
                $ref = $row['Ref_no'];
                $tref_sal = substr($ref, -3);
                
                settype($tref_sal, "integer");

                $tref_sal = $tref_sal * 1000;
                
                $trate = $row['Rate'];
                settype($trate, "integer");

                if ($salary_year <= $tref_sal){
                    $inc_tax_amount = $salary_year * ($trate/100);
                    $_SESSION['tax_ref_no'] = $ref;
                    break;
                }                
            }
            if ($inc_tax_amount != 0) {
                break;
            }
        }

        if ($inc_tax_amount == 0) {
            $inc_tax_amount = $salary_year * ($trate/100);
            $_SESSION['tax_ref_no'] = $ref;
        }

        $currentDate = date('Y-m-d');

        $_SESSION['tax_amount'] = $inc_tax_amount;
        $_SESSION['payDate'] = $currentDate;

        echo "Taxpayer Name: <b>$name</b> <br>";
        echo "Job Type: <b>$job_type</b> <br><br>";

        echo "Tax Amount : <b>BDT ". $inc_tax_amount. "</b><br><br>";
        
        ?>
        
        <form action="pay_success.php" method="post">
            <input type="submit" name="calculate" value="Pay Tax" class="pay-button" style="background-color: #0E7F28;">
        </form>
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

    <title>Income Tax Payment | Tax Collection DBMS</title>

    <style>
    .btn-primary:hover {
        background-color: #0E7F28 !important;
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

</html>