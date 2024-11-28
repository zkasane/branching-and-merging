<?php
require './config/db.php';

$id = $_GET['id'];


$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; 

    
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    header("Location: show.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #00bcd4, #004d61);
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }
        .form-container {
            background-color: #ffffff;
            margin-top: 50px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 2rem;
            color: #004d61;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
        .form-label {
            font-size: 1.1rem;
            font-weight: bold;
            color: #004d61;
        }
        .form-control {
            border-radius: 8px;
            border: 2px solid #00bcd4;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #004d61;
            box-shadow: 0 0 5px rgba(0, 76, 97, 0.5);
        }
        .btn-success {
            background-color: #00bcd4;
            border-color: #00bcd4;
            padding: 12px 20px;
            font-size: 1.1rem;
            border-radius: 30px;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-success:hover {
            background-color: #004d61;
            border-color: #004d61;
            transform: scale(1.05);
        }
        .btn-secondary {
            background-color: #f1f1f1;
            color: #004d61;
            border-color: #f1f1f1;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 30px;
            width: 100%;
            text-align: center;
            display: block;
            margin-top: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #004d61;
            color: #fff;
            transform: scale(1.05);
        }
        /* Responsif */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
            h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 form-container">
                <h1>Edit Produk</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $row['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga:</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?= $row['price']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar URL:</label>
                        <input type="text" class="form-control" id="image" name="image" value="<?= $row['image']; ?>">
                    </div>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                </form>
                <a href="show.php" class="btn btn-secondary mt-3">Kembali ke Data Produk</a>
            </div>
        </div>
    </div>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
