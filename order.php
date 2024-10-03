<?php
$selectedProduct = isset($_GET['product']) ? $_GET['product'] : '';
$productprice = isset($_GET['price']) ? $_GET['price'] : '';
?>

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

    

    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <h2 class="text-center mb-5">Order Form</h2>
            <hr class="border border-secondary border-2 opacity-50">

    <form action="receipt.php" method="post">
        <div class="mb-3">
            <label for="fname" class="form-label">
                <h6>Full Name</h6>
            </label>
            <div class="input-group">
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="basic-addon3 basic-addon4" placeholder="Full Name">
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">
                <h6>Email Address</h6>
            </label>
            <div class="input-group">
                <input type="text" class="form-control" id="email" name="email" aria-describedby="basic-addon3 basic-addon4" placeholder="Name@example.com">
            </div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">
                <h6>Phone Number</h6>
            </label>
            <div class="input-group">
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="basic-addon3 basic-addon4" placeholder="Ex : 089129038713">
            </div>
        </div>
        <div class="mb-3">
            <label for="addres" class="form-label">
                <h6>Address</h6>
            </label>
            <div class="input-group">
                <input type="text" class="form-control" id="addres" name="address" aria-describedby="basic-addon3 basic-addon4" placeholder="Street name, House name, District, City, Province, Postal Code" rows="4">
            </div>
        </div>
        <br>
        <hr class="border border-secondary border-2 opacity-50">
        
        <div class="input-group mb-3">
            <label class="input-group" for="product"><h6> Options</h6></label>
            <select class="form-select" id="product" name="product">
                <option value="" disabled <?php echo $selectedProduct == '' ? 'selected' : ''; ?>> -- Select Product --</option>
                <option value="Kazusa Nendo" <?php echo $selectedProduct == 'Kazusa Nendo' ? 'selected' : ''; ?>>Kazusa Nendo</option>
                <option value="Neru Jacket" <?php echo $selectedProduct == 'Neru Jacket' ? 'selected' : ''; ?>>Neru Jacket</option>
                <option value="Hibiki Figure" <?php echo $selectedProduct == 'Hibiki Figure' ? 'selected' : ''; ?>>Hibiki Figure</option>
                <option value="Iroha Figure" <?php echo $selectedProduct == 'Iroha Figure' ? 'selected' : ''; ?>>Iroha Figure</option>
                <option value="Yuuka Figure" <?php echo $selectedProduct == 'Yuuka Figure' ? 'selected' : ''; ?>>Yuuka Figure</option>
                <option value="Hoshino Plush" <?php echo $selectedProduct == 'Hoshino Plush' ? 'selected' : ''; ?>>Hoshino Plush</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">
                <h6>Quantity</h6>
            </label>
            <div class="input-group">
                <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="basic-addon3 basic-addon4" placeholder="Quantity" required>
            </div>
        </div>
        <div class="d-grid gap-2 mb-4">
            <button type="submit" class="btn btn-primary" formaction="receipt.php">Submit</button>
            <button type="reset" class="btn btn-danger" formaction="order.php">Reset</button>
        </div>

        <input type="hidden" name="price" value="<?php echo htmlspecialchars($productprice); ?>">
</form>
        </div>
    </div>

    <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024:
            <a class="text-white" href="https://mdbootstrap.com/">Anak Agung</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>