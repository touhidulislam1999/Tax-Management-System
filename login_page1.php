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

    <title>Login Portal | Tax Collection Database Management System</title>
        <style>
        /* Update blue colors to #198754 */
        .btn-primary {
            background-color: #198754;
            border-color: #198754;
        }

        .btn-primary:hover {
            background-color: #116633;
            border-color: #116633;
        }

        .form-check-input:checked {
            background-color: #198754;
            border-color: #198754;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-center fw-bold">User Login</h5>
                    <div class="card-body">

                        <form action = 'signin.php' method = 'post'>
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1" name = "name">Name</label>
                                <input type="text" name = "name" id="form2Example1" class="form-control"required="required" />
                                
                            </div>

                            <!-- NID input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2" name = "nid">NID</label>
                                <input type="text" name = "nid" id="form2Example2" class="form-control"required="required" minlength = "10" maxlength = "10"  />
                                
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>

                                <!--<div class="col">
                                    <a href="register.html">Forgot password?</a>
                                </div>-->
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Admin Login button -->
                            <div class="text-center">
                                <p><a href="login_page2.php">Admin Login</a></p>
                               
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>






    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Change color of the "Sign in" button
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

        // Change color of "Remember me" and "Admin Login" links
        var formCheckLabel = document.querySelector(".form-check-label");
        if (formCheckLabel) {
            formCheckLabel.style.color = "#198754";
        }

        var adminLoginLink = document.querySelector(".text-center a[href='login_page2.php']");
        if (adminLoginLink) {
            adminLoginLink.style.color = "#198754";
        }

        
        var forgotPasswordLink = document.querySelector(".text-center a[href='register.html']");
        if (forgotPasswordLink) {
            forgotPasswordLink.style.color = "#198754";
        }
    });
</script>    

</body>

</html>