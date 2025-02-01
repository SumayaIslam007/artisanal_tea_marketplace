<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $totalPrice = $_POST['totalPrice'] ?? 0;
    $cardNumber = $_POST['cardNumber'] ?? '';
    $expiryDate = $_POST['expiryDate'] ?? '';
    $cvv = $_POST['cvv'] ?? '';
    $cardName = $_POST['cardName'] ?? '';

    // Validation
    $errors = [];
    if (empty($cardNumber)) {
        $errors[] = "Card number is required.";
    }
    if (empty($expiryDate)) {
        $errors[] = "Expiry date is required.";
    }
    if (empty($cvv)) {
        $errors[] = "CVV is required.";
    }
    if (empty($cardName)) {
        $errors[] = "Name on card is required.";
    }

    if (count($errors) > 0) {
        // Return errors to the payment page
        $errorMessage = implode('<br>', $errors);
        header("Location: ../views/payment.php?error=" . urlencode($errorMessage));
        exit();
    }

    // If validation passes, proceed with payment processing (payment logic here)
    // Assume payment is successful
    $paymentSuccessful = true;

    if ($paymentSuccessful) {
        // Redirect to payment success page
        header("Location: /artisanal_tea_marketplace/public/index.php?page=payment_status&amount=" . urlencode($totalPrice));
        exit();
    } else {
        // Payment failed
        header("Location: /artisanal_tea_marketplace/public/index.php?page=payment_status&error=" . urlencode("Payment failed. Try again."));
        exit();
    }
    
}else{
    header("Location: ../views/payment.php");
}
?>
