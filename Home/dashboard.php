<?php
    require('db.php');
    include('auth_sesh.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard - Estillore Medical Clinic</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/6a6ee22931.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="scripts.js"></script>
    </head>
    <body class="p-3 mb-2 bg-secondary text-white" id="body-pd">
        <header class="header bg-black" id="header" style="opacity:.2; height: 69px;">
            <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
        </header>
        <div class="l-navbar p-3 mb-2 bg-black text-white" id="nav-bar">
            <nav class="nav">
                <div> 
                    <div>
                        <a href="dashboard.php" class="nav_link crazy"> 
                            <i class="bx bxs-user-circle bx-sm nav_icon"></i>
                            <span class="nav_name">Welcome, <strong><?php echo $_SESSION['username'];?></strong>!</span>
                        </a> 
                    </div>
                    <br><br>
                    <div class="nav_list"> 
                        <a href="dashboard.php" class="nav_link active"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Dashboard</span> 
                        </a> 
                        <a href="profiles.php" class="nav_link"> 
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Profiles</span> 
                        </a> 
                        <a href="appointment.php" class="nav_link"> 
                            <i class='bx bx-bookmark nav_icon'></i> 
                            <span class="nav_name">Appointment</span> 
                        </a>
                        <a href="calendar.php" class="nav_link"> 
                            <i class='bx bx-calendar nav_icon'></i> 
                            <span class="nav_name">Calendar</span> 
                        </a>  
                        <a href="inventory.php" class="nav_link"> 
                            <i class='bx bx-folder nav_icon'></i> 
                            <span class="nav_name">Inventory</span> 
                        </a> 
                        <a href="reports.php" class="nav_link"> 
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                            <span class="nav_name">Reports</span> 
                        </a> 
                        <a href="analytics.php" class="nav_link"> 
                            <i class='bx bx-analyse nav_icon'></i> 
                            <span class="nav_name">Analytics</span> 
                        </a>
                    </div>
                </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="height-100 bg-secondary">
            <div class="left_bar"></div>
            <div class="top_bar"></div>
            <div>

            </div>
        </div>
        <!--Container Main end-->
    </body>
</html>