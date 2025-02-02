<?php
include '../model/db.php';

$mydb = new myDB();
$conObj = $mydb->openCon();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['OrderID'])) {
    $OrderId = intval($_POST['OrderID']);
    $response = $mydb->deleteOrderByID($OrderId, $conObj);

    if ($response) {
        echo "Order successfully deleted.";
    } else {
        echo "There is no order by this order id.";
    }
}
?>

