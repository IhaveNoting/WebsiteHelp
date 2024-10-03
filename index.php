<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="src/img/schale.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url('./src/img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(5px);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-info" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="src/img/Title.png" alt="Logo" width="80" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>






 

         
<div class="container mt-5">
    <h2 class="text-center mb-5">Catalogue</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100 card-small hover-zoom">
            <a href="order.php?product=Hoshino%20Plush&price=1500000" class="text-decoration-none">
                <img src="https://resize.cdn.otakumode.com/ex/700.700/shop/product/efc4628dc7894c0e957a7f829b4c5623.jpg.webp" class="img-fluid card-img-top" alt="Hoshino Plush">
                <div class="card-body text-center">
                    <h5 class="card-title">Hoshino Plush </h5>
                    <p class="card-text">Rp. 1.500.000,00</p>
            </div>
            </a>
        </div>
    </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100 card-small hover-zoom">
            <a href="order.php?product=Yuuka%20Figure&price=2000000"class="text-decoration-none">
                <img src="https://resize.cdn.otakumode.com/ex/700.933/shop/product/a1065d0ec22c4e59aa51934621d7ae2c.jpg.webp" class="img-fluid card-img-top" alt="Yuuka Figure">
                <div class="card-body text-center">
                    <h5 class="card-title">Yuuka Figure</h5>
                    <p class="card-text">Rp. 2.000.000,00</p>
                </div>
                </a>

            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100 card-small hover-zoom">
                <a href="order.php?product=Iroha%20Figure&price=2100000" class="text-decoration-none">

                    <img src="https://resize.cdn.otakumode.com/ex/700.1049/shop/product/a67ff4de028d48098a9a1afda0a95db1.jpg.webp" class="img-fluid card-img-top" alt="Iroha Figure">
                    <div class="card-body text-center">
                        <h5 class="card-title">Iroha Figure</h5>
                        <p class="card-text">Rp. 2.100.000,00</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100 card-small hover-zoom">
                <a href="order.php?product=Hibiki%20Figure&price=2400000" class="text-decoration-none">

                    <img src="https://resize.cdn.otakumode.com/ex/700.980/shop/product/dbe81f702cc54d7aa5f70388da8ed4e6.jpg.webp" class="img-fluid card-img-top" alt="Hibiki Figure">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hibiki Figure</h5>
                        <p class="card-text">Rp. 2.400.000,00</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100 card-small hover-zoom">
                <a href="order.php?product=Neru%20Jacket&price=750000" class="text-decoration-none">

                    <img src="https://resize.cdn.otakumode.com/ex/700.700/shop/product/450fd7e9ddb34fc6b700f68867cb4605.jpg.webp" class="img-fluid card-img-top" alt="Neru Jacket">
                    <div class="card-body text-center">
                        <h5 class="card-title">Neru Jacket</h5>
                        <p class="card-text">Rp. 750.000,00</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100 card-small hover-zoom">
                <a href="order.php?product=Kazusa%20Nendo&price=900000" class="text-decoration-none">

                    <img src="https://resize.cdn.otakumode.com/ex/700.933/shop/product/12a2dca3f52e48239eb8c5d2d5e36fa8.jpg.webp" class="img-fluid card-img-top" alt="Kazusa Nendo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kazusa Nendo</h5>
                        <p class="card-text">Rp. 900.000,00</p>
                    </div>
                </a>
            </div>
        </div>

        
    </div>

</div>

<footer
        class="text-center text-lg-start text-white"
        style="background-color: #3e4551">
        <!-- Grid container -->
        
        <!-- Grid container -->

        <!-- Copyright -->
        <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024:
            <a class="text-white" href="https://mdbootstrap.com/">Anak Agung</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>