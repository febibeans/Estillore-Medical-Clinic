<?php
require("db.php");

$id = $_GET['updateid'];
$item_category = $_GET['category'];
$item_name = $_GET['name'];
$item_quantity = $_GET['quantity'];
$item_price = $_GET['price'];

if($item_category=='Medicine'){
    if(isset($_POST['submit'])){
        if(isset($_POST['name'])){
            $name    = stripslashes($_POST['name']);
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $mnf_date = date('Y-m-d', strtotime($_POST['mnf_date']));
            $exp_date = date('Y-m-d', strtotime($_POST['exp_date']));
        
            $sql = "UPDATE `medicines` SET medicine_id=$id, name='$name',quantity='$quantity',price='$price',exp_date='$exp_date',mnf_date='$mnf_date' WHERE medicine_id=$id";
            $result = mysqli_query($con, $sql);
            if($result){
                echo '
                    <script>
                        alert("Item Updated Successfully!");
                        window.location.href="medicine.php";
                    </script>
                ';
            }else{
                echo'
                    <script>
                        alert("Something went Wrong! Redirecting you back to Inventory Page.");
                        window.location.href="inventory.php";
                    </script>
                ';
            }
        }else{
        }
    }
}elseif($item_category=='Supply'){
    if(isset($_POST['submit'])){
        if(isset($_POST['name'])){
            $name    = stripslashes($_POST['name']);
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $mnf_date = date('Y-m-d', strtotime($_POST['mnf_date']));
            $exp_date = date('Y-m-d', strtotime($_POST['exp_date']));
        
            $sql = "UPDATE `supplies` SET supply_id=$id, name='$name',quantity='$quantity',price='$price',exp_date='$exp_date',mnf_date='$mnf_date' WHERE supply_id=$id";
            $result = mysqli_query($con, $sql);
            if($result){
                echo '
                    <script>
                        alert("Item Updated Successfully!");
                        window.location.href="supply.php";
                    </script>
                ';
            }else{
                echo'
                    <script>
                        alert("Something went Wrong! Redirecting you back to Inventory Page.");
                        window.location.href="inventory.php";
                    </script>
                ';
            }
        }else{
        }
    }
}elseif($item_category=='Vaccine'){
    if(isset($_POST['submit'])){
        if(isset($_POST['name'])){
            $name    = stripslashes($_POST['name']);
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $mnf_date = date('Y-m-d', strtotime($_POST['mnf_date']));
            $exp_date = date('Y-m-d', strtotime($_POST['exp_date']));
        
            $sql = "UPDATE `vaccines` SET vaccine_id=$id, name='$name',quantity='$quantity',price='$price',exp_date='$exp_date',mnf_date='$mnf_date' WHERE vaccine_id=$id";
            $result = mysqli_query($con, $sql);
            if($result){
                echo '
                    <script>
                        alert("Item Updated Successfully!");
                        window.location.href="vaccine.php";
                    </script>
                ';
            }else{
                echo'
                    <script>
                        alert("Something went Wrong! Redirecting you back to Inventory Page.");
                        window.location.href="inventory.php";
                    </script>
                ';
            }
        }else{
        }
    }
}else{
    echo'
        <script>
            alert("Something went Wrong! Redirecting you back to Inventory Page.");
            window.location.href="inventory.php";
        </script>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update Item - Estillore Medical Clinic</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://kit.fontawesome.com/6a6ee22931.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="scripts.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container my-5 py-3 px-3 bg-white rounded-3 col-md-4">
            <form class="form" role="form" method="POST">   
                <div class="mb-5">                                 
                    <input type="hidden" name="_token" value="">
                    <div class="form-group row">
                        <label class="col-md-3">Name</label>
                        <input type="text" class="col-md-8" name="name" placeholder="<?php echo $item_name;?>" value="<?php echo $item_name;?>">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Quantity</label>
                        <input type="number" class="col-md-8" name="quantity" placeholder="<?php echo $item_quantity;?>" value="<?php echo $item_quantity;?>">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Price</label>
                        <input type="number" class="col-md-8" name="price" placeholder="<?php echo $item_price;?>" value="<?php echo $item_price;?>">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">Expiration Date</label>
                        <input type="date" class="col-md-5" name="exp_date" min="2023-01-01">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">Manufacturing Date</label>
                        <input type="date" class="col-md-5" name="mnf_date" min="2020-01-01">
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-secondary"><a href="inventory.php" class="text-light">Cancel</a></button>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>                                   
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>