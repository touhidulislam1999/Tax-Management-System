<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Pay Taxes | Tax Collection DBMS</title>
    <style>
        .btn-success, .btn-success:hover {
            background-color: #198754;
            border-color: #116633;
        }

        .box {
            height: 100%;
        }

        /* Center the boxes */
        .center-boxes {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; /* Adjust this value as needed */
        }
    </style>
</head>

<body>
    <header class="text-center header-social-icon text-lg-start bg-success text-white">
        <div class="container">
            <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
                <div class="me-5 d-lg-block">
                    <span> People's Republic of Bangladesh</span>
                </div>
            </section>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Tax Database <br> Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="user_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pay_taxes.php">Pay Taxes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_profile.php">My Profile</a>
                    </li>
                    <li class = 'nav-item'>
                    <a class = 'nav-link active' aria-current = 'page' href = 'logout.php'>Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                                onclick="window.location.href='road_tax_calc.php'">Pay Tax</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Six.png" class="card-img-top" alt="Income Tax">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Income Tax</h5>
                            <button type="button" class="btn btn-success"
                                onclick="window.location.href='inc_tax_calc.php'">Pay Tax</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="Tools/Five.jpg" class="card-img-top" alt="Land Tax">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Land Tax</h5>
                            <button type="button" class="btn btn-success"
                                onclick="window.location.href='land_tax_calc.php'">Pay Tax</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
   

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
