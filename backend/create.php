<?php

require './../config/db.php';

if(isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time().'-'.md5(rand()).'-'.$image;

    $uploadPath = $_SERVER['DOCUMENT_ROOT'].'/./Branching-and-Merging-Pemrograman-web/upload/'.$randomFilename;

    $upload = move_uploaded_file($tempImage, $uploadPath);
    
    if($upload) {

        mysqli_query($db_connect, "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '/./upload/$randomFilename')");
        $message = "Produk berhasil diupload!";
        $alertType = "success";
    } else {
        $message = "Gagal mengupload gambar!";
        $alertType = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Upload</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 100px;
            max-width: 600px;
        }
        .alert {
            border-radius: 10px;
            font-size: 1.2rem;
            padding: 15px;
        }
        .btn-home {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }
        .btn-home:hover {
            background-color: #45a049;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 1.2rem;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <?php if(isset($message)): ?>
    
        <div class="alert alert-<?php echo $alertType; ?> text-center">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    
    
    <a href="../show.php" class="btn btn-back w-100">Kembali</a>
</div>

<!-- Link Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
