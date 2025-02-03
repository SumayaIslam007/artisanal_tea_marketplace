<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../JS/showProduct.js" defer></script>
    <title>Tea Marketplace</title>

</head>

<body>
        <a href="homepage.php" class="btn-home">Homepage</a>
        <div class="content-section">
            <h2>Customers</h2>

            <div class="search-container">
                <input type="text" id="search-box" placeholder="Search Product by id" onkeyup="search_product();">
            </div>  

            <!-- Product table -->
            <div id="searchProduct">
                <table>
                    <thead>
                        <tr>
                            <th>ProductID</th>
                            <th>SelletID</th>
                            <th>CategoryID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require '../model/db.php';
                            $db = new myDB();
                            $conn = $db->openCon();
                            $result = $db->showProduct("product", $conn);

                            if ($result->num_rows > 0) {
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
                            } else {
                                echo "<tr><td>No customers found</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <table>
</body>
</html>