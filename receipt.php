<?php
$fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
$product = isset($_POST['product']) ? htmlspecialchars($_POST['product']) : '';
$quantity = isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : '';
$price = isset($_POST['price']) ? htmlspecialchars($_POST['price']) : '';
$totalAmount = $price * $quantity;
?>


<!DOCTYPE html>
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
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h1 class="card-title">Receipt</h1>
        </div>
        <div class="card-body">
            <p><strong>Full Name:</strong> <?php echo $fname; ?></p>
            <p><strong>Email Address:</strong> <?php echo $email; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
            <p><strong>Product:</strong> <?php echo $product; ?></p>
            <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
            <p><strong>Price:</strong> <?php echo $price; ?></p>
            <p><strong>Total Amount:</strong> <?php echo $totalAmount; ?></p>
        </div>
        <div class="card-footer text-muted">
            Thank you for your purchase!
        </div>
    </div>
</div>
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h1 class="card-title">Payment</h1>
            </div>
            <div class="card-body">
                <form method="post" action="logic.php" >
                    <div class="mb-3">
                        <label for="paymentAmount" class="form-label">Payment Amount</label>
                        <input type="number" class="form-control" id="paymentAmount" name="paymentAmount" required>
                    </div>
                    <input type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>">
                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>