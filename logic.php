<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paymentAmount = isset($_POST['paymentAmount']) ? (float)$_POST['paymentAmount'] : 0;
    $totalAmount = isset($_POST['totalAmount']) ? (float)$_POST['totalAmount'] : 0;

    if ($paymentAmount < $totalAmount) {
        header('Location: fail.php');
        exit();
    } else {
        // Process the payment
        // Redirect to success.php with query parameters
        $query = http_build_query([
            'paymentAmount' => $paymentAmount,
            'totalAmount' => $totalAmount
        ]);
        header('Location: success.php?' . $query);
        exit();
    }
}