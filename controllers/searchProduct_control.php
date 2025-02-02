<?php
require '../model/db.php';

if (isset($_GET['ProductID'])) {
    $productID = $_GET['ProductID'];

    $db = new myDB();
    $conn = $db->openCon();
    $result = $db->get_product_by_id("product", $conn, $productID);

    if ($result->num_rows > 0) {
        echo "<table>
                <thead>
                    <tr>
                        <th>ProductID</th>
                        <th>SellerID</th>
                        <th>CategoryID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["ProductID"]."</td>
                    <td>".$row["SellerID"]."</td>
                    <td>".$row["CategoryID"]."</td>
                    <td>".$row["Name"]."</td>
                    <td>".$row["Description"]."</td>
                    <td>".$row["Price"]."</td>
                    <td>".$row["StockQuantity"]."</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>No product found with ID: $productID</p>";
    }

    $conn->close();
}
?>
