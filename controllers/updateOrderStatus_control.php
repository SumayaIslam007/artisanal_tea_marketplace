<?php
include '../model/db.php';

$mydb = new myDB();
$conObj = $mydb->openCon();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['OrderID'], $_POST['OrderStatus'], $_POST['PaymentStatus'])) {
    $OrderId = intval($_POST['OrderID']);
    $OrderStatus = $_POST['OrderStatus'];
    $PaymentStatus = $_POST['PaymentStatus'];

    $response = $mydb->updateOrderStatus($OrderId, $OrderStatus, $PaymentStatus, $conObj);

    if ($response) {
        echo "Order status successfully updated.";
    } else {
        echo "Failed to update order status. Please check the Order ID.";
    }
}
?>
