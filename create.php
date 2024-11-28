<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        body {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

       
        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

       
        h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        
        .form-control {
            border-radius: 30px;
            padding: 12px 20px;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff7e5f;
            box-shadow: 0 0 5px rgba(255, 126, 95, 0.5);
        }

        
        .btn-primary {
            background: linear-gradient(90deg, #5372F0, #5372F0);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #5372F0, #5372F0);
            transform: scale(1.05);
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  padding: 0 10px;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #5372F0;
}
.container{
  width: 440px;
  border-radius: 7px;
  background: #fff;
  box-shadow: 0 10px 20px rgba(0,0,0,0.08);
}
.container h2{
  font-size: 25px;
  font-weight: 500;
  padding: 16px 25px;
  border-bottom: 1px solid #ccc;
}
.container .content{
  margin: 25px 20px 35px;
}
.content .word{
  user-select: none;
  font-size: 33px;
  font-weight: 500;
  text-align: center;
  letter-spacing: 24px;
  margin-right: -24px;
  word-break: break-all;
  text-transform: uppercase;
}
.content .details{
  margin: 25px 0 20px;
}
.details p{
  font-size: 18px;
  margin-bottom: 10px;
}
.details p b{
  font-weight: 500;
}
.content input{
  width: 100%;
  height: 60px;
  outline: none;
  padding: 0 16px;
  font-size: 18px;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
}
.content input:focus{
  box-shadow: 0px 2px 4px rgba(0,0,0,0.08);
}
.content input::placeholder{
  color: #aaa;
}
.content input:focus::placeholder{
  color: #bfbfbf;
}
.content .buttons{
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}
.buttons button{
  border: none;
  outline: none;
  color: #fff;
  cursor: pointer;
  padding: 15px 0;
  font-size: 17px;
  border-radius: 5px;
  width: calc(100% / 2 - 8px);
  transition: all 0.3s ease;
}
.buttons button:active{
  transform: scale(0.97);
}
.buttons .refresh-word{
  background: #6C757D;
}
.buttons .refresh-word:hover{
  background: #5f666d;
}
.buttons .check-word{
  background: #5372F0;
}
.buttons .check-word:hover{
  background: #2c52ed;
}
@media screen and (max-width: 470px) {
  .container h2{
    font-size: 22px;
    padding: 13px 20px;
  }
  .content .word{
    font-size: 30px;
    letter-spacing: 20px;
    margin-right: -20px;
  }
  .container .content{
    margin: 20px 20px 30px;
  }
  .details p{
    font-size: 16px;
    margin-bottom: 8px;
  }
  .content input{
    height: 55px;
    font-size: 17px;
  }
  .buttons button{
    padding: 14px 0;
    font-size: 16px;
    width: calc(100% / 2 - 7px);
  }
  .text {
    padding: 14px;
  }
}
    </style>
    
    <body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <div class="content">
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="image" name="image" required>
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-primary" value="Simpan" name="submit" class="refresh-word">Simpan</button>
                <a href="show.php" class="btn btn-primary refresh-word">Lihat Data</a>
            </div>
        </div>
    </div>
  </body>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
