<?php
include '../model/db.php';

$mydb = new myDB();
$conObj = $mydb->openCon();
$result = $mydb->showOrder("order", $conObj);


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
      
        #<td><a href='../view/edit_user.php?id=" . $data["ID"] . "' class='edit-btn'>Edit</a></td>";
    }
} else {
    echo "<tr><td colspan='10' class='no-data'>No data found.</td></tr>";
}
?>
