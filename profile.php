<?php 
session_start();
if($_SESSION['role'] = 'user'){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }

        .btn-logout {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }

        .product-card {
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-details {
            padding: 15px;
        }

        .product-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .product-price {
            color: #007bff;
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .product-description {
            font-size: 1rem;
            color: #555;
            margin-top: 10px;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 20px;
            margin-top: 15px;
            font-size: 16px;
        }

        .btn-view:hover {
            background-color: #0056b3;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat datang, <?php echo $_SESSION['name']; ?></h1>
        
        
        <div class="row">
            <?php
       
            require './config/db.php';
            $products = mysqli_query($db_connect, "SELECT * FROM products");

            while($product = mysqli_fetch_assoc($products)) {
            ?>
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="../pertemuan-6/<?php echo $product['image']; ?>" class="product-img" alt="Produk">
                        <div class="product-details">
                            <div class="product-name"><?php echo $product['name']; ?></div>
                            <div class="product-price">Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <a href="./backend/logout.php" class="btn-logout">Logout</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
