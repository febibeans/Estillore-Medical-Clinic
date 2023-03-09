<?php
    require('db.php');
    include('auth_sesh.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inventory - Estillore Medical Clinic</title>
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
                        <a href="dashboard.php" class="nav_link"> 
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
                        <a href="inventory.php" class="nav_link active"> 
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
        <div class="bg-secondary" style="margin-left:80px; margin-top:69px; margin-bottom:20px;">
            <div class="container bg-dark clearfix p-5 rounded-5">
                <div>
                    <button type="button" class="btn btn-light float-right rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Add Item</button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Hatdog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <div style="text-align:center;"> 
                    <a href="medicine.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-light btn-lg rounded" style="margin:10px; width:300px; height:150px;">Medicine</button></a>
                    <a href="vaccine.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-light btn-lg rounded" style="margin:10px; width:300px; height:150px;">Vaccine</button></a>
                    <a href="supply.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-light btn-lg rounded" style="margin:10px; width:300px; height:150px;">Supplies</button></a>
                </div>
            </div>
        </div>
        <div class="bg-secondary" style="margin-left: 80px;">
            <div class="container bg-dark clearfix p-5 rounded-5">
                <table class="table table-bordered table-striped table-light text-center" style="font-size:small;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Expiration Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>