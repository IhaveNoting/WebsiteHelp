<?php
$totalAmount = isset($_GET['totalAmount']) ? $_GET['totalAmount'] : '';
$paymentAmount = isset($_GET['paymentAmount']) ? $_GET['paymentAmount'] : '';
$change = $paymentAmount - $totalAmount;

function calculateBills($amount) {
    $bills = [100000, 50000, 20000, 10000, 5000, 2000, 1000];
    $result = [];

    foreach ($bills as $bill) {
        if ($amount >= $bill) {
            $result[$bill] = intdiv($amount, $bill);
            $amount %= $bill;
        } else {
            $result[$bill] = 0;
        }
    }

    return $result;
}

$bills = calculateBills($change);
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
                        <input type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <p><strong>Your Change:</strong> <?php echo $change; ?></p>
        <p><strong>Change Breakdown:</strong></p>
        <ul>
            <?php foreach ($bills as $bill => $count): ?>
                <li><?php echo $bill; ?>: <?php echo $count; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>