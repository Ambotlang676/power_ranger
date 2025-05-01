<?php 
require_once("database/connection.php");

$sql = "SELECT * FROM prod";
$getProd = $conn->query($sql);
$results = $getProd->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dashboardCSS.css">
</head>
<body>

    <div class="header">
        
    </div>
    
    <div class="sidenav">
        <a href="" class="btn ">Dashboard</a>
        <a href="" class="btn ">Users</a>
        <a href="" class="btn ">About</a>
        <a href="" class="btn lOut">Log out</a>
    </div>

    <!-- Subgrid -->
    <div class="wrapper">
     <?php foreach($results as $result): ?>
        <div class="box">
            <h2><?= $result['product_name'] ?></h2>
            <!-- Profile -->
            <img src="img/pink.jpeg" alt="Image">
            <p> <?= substr($result['detail'], 0 ,100) ?> </p>
            <p class="price"> <strong>$<?= $result['price'] ?></strong> </p>
            <button class="btn">Add to Cart</button>
        </div>
    <?php endforeach; ?>
    </div>
    <!-- End Subgrid -->


    
</body>
</html>