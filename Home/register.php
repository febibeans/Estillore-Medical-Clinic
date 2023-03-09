<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register - Estillore Medical Clinic</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/6a6ee22931.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body class="bg-dark">
        <?php
            session_start();
            require('db.php');

            // When form submitted, insert values into the database.
            if (isset($_POST['username']) && isset($_POST['password'])==isset($_POST['repassword'])) {
                $name    = stripslashes($_POST['name']);
                $name    = mysqli_real_escape_string($con, $name);
                $username = stripslashes($_POST['username']);
                $username = mysqli_real_escape_string($con, $username);
                $age = $_POST['age'];
                $dob = date('Y-m-d', strtotime($_POST['dob']));
                $phone = $_POST['phone'];
                $email    = stripslashes($_POST['email']);
                $email    = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_POST['password']);
                $password = mysqli_real_escape_string($con, $password);
                $create_datetime = date("Y-m-d H:i:s");
                $query    = "INSERT into patients (name, email, username, phone, age, dob, password, create_datetime)
                    VALUES ('$name', '$email', '$username', '$phone', '$age', '$dob', '" . md5($password) . "', '$create_datetime')";
                $result   = mysqli_query($con, $query);
                if ($result) {
                    echo '<script>
                            alert("Registered Succesfully!");
                            window.location.href="login.php";
                        </script>';
                }
            } else {
        ?>
        <nav class="navbar navbar-expand-lg bg-black fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Estillore Medical Clinic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <a href="login.php" class="link-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
              </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <br>  
            <hr>

            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mt-3 text-center">Create Account</h4>
                    <p class="text-center">Get started with your free account</p>
                    <br>
                    <form method="post">
                        <!--Name-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input name="name" class="form-control" placeholder="Full Name" type="text" required>
                        </div>
                        <!--Email-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address" type="email" required>
                        </div>
                        <!--Username-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                            </div>
                            <input name="username" class="form-control" placeholder="Username" type="text" required>
                        </div>
                        <!--Phone-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <select class="custom-select" style="max-width: 120px;">
                                <option selected="">+63</option>
                            </select>
                            <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
                        </div>
                        <!--Age-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-arrow-up-9-1"></i></span>
                            </div>
                            <input name="age" class="form-control" placeholder="Age" type="number" min="0" max="80" required>
                        </div>
                        <!--Date of Birth-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input name="dob" class="form-control" placeholder="Birthday" type="date" required>
                        </div>
                        <!--Password-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" class="form-control" placeholder="Create password" type="password" required>
                        </div>
                        <!--Confirm Password-->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="repassword" class="form-control" placeholder="Repeat password" type="password" required>
                        </div>    
                        <!--Submit-->                             
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="create_account">Create Account</button>
                        </div>   
                        <p class="text-center">Have an account?<a href="login.php"> Log In</a></p>                                                                 
                    </form>
                </article>
                <br>
                <p class="display-10 position-absolute bottom-0 end-0 mr-3"><i class="fa-regular fa-copyright"></i> 2023 - Estillore Medical Clinic</p>
            </div>
        </div>
        <?php
            }        
        ?>
    </body>
</html>