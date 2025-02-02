<?php
include '../model/db.php';

$mydb = new myDB();
$conObj = $mydb->openCon();


if (isset($_GET['OrderId'])) {
  $OrderId = $_GET['OrderId'];  
  $result = $mydb->getOrderByID($OrderId, $conObj);  




if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
        <td>".$row["OrderID"]."</td>
        <td>".$row["CustomerID"]."</td>
        <td>".$row["ProductID"]."</td>
        <td>".$row["Quantity"]."</td>
        <td>".$row["OrderDate"]."</td>
        <td>".$row["OrderStatus"]."</td>
        <td>".$row["TotalAmount"]."</td>
        <td>".$row["PaymentMethod"]."</td>
        <td>".$row["PaymentStatus"]."</td>
        </tr>";
      }
    } else {
        echo "<tr><td colspan='9' class='no-data'>No data found for this order.</td></tr>";
    }
} else {
   
    echo "<tr><td colspan='9' class='no-data'>Order ID is missing.</td></tr>";
}
?>
