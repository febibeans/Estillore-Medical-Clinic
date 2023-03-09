<?php
    require('db.php');
    include('auth_sesh.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Medicine Table - Estillore Medical Clinic</title>
        <link rel="stylesheet" href="table.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://kit.fontawesome.com/6a6ee22931.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <header class="header bg-black" id="header" style="opacity:; height: 69px;">
            <div class="w-20 h-20">
                <br>
                <a class="ml-3 float-left" href="inventory.php" style="text-decoration:none; color: white; opacity:.8; width:100px;"><i class='bx bx-left-arrow'></i> Inventory</a>
                <p class="mr-5 float text-center"style="text-decoration:none; color: white;">MEDICINE TABLE</p>
            </div>
        </header>
        <div class="bg-secondary">
            <div>
                <table class="table">
                    <?php
                        $localhost = "localhost";
                        $root = "root";
                        $password = "";
                        $db = "profiles";
                        $con = mysqli_connect($localhost, $root, $password, $db);
                        if(mysqli_connect_errno()){
                            echo"Failed to connect to MySQL: ".mysqli_connect_error();
                        }

                        $query = "SELECT * FROM medicines";

                        if($medicine = $con->query($query)){

                        }
                    ?>

                    <tr class="bg-dark text-white">
                        <th class="thead-dark">MEDICINE ID</th>
                        <th class="thead-dark">NAME</th>
                        <th class="thead-dark">QUANTITY</th>
                        <th class="thead-dark">PRICE</th>
                        <th class="thead-dark">EXPIRATION DATE</th>
                        <th class="thead-dark">MANUFATURING DATE</th>
                    </tr>
                    <?php
                        while ($rows = $medicine->fetch_assoc()) {
                    ?>
                    <tr class="bg-light">
                        <td><?php echo $rows['medicine_id'];?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['quantity'];?></td>
                        <td><?php echo $rows['price'];?></td>
                        <td><?php echo $rows['exp_date'];?></td>
                        <td><?php echo $rows['mnf_date'];?></td>
                    </tr>
                    <?php        
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>