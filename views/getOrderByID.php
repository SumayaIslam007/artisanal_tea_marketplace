<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>

<body>
    
    <a href="homepage.php" class="btn-home">Homepage</a>
                
    <div class="content-section">
        <h2>Order Information</h2>

        <form method="GET" action="" class="search-form">
            <label for="search">Search by OrderID:</label>
            <input type="text" name="OrderId" id="search" placeholder="Enter OrderID" required>
            <button type="submit">Search</button>
        </form>
        
        <table class="order-details">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>ProductID</th>
                    <th>Quantity</th>
                    <th>OrderDate</th>
                    <th>OrderStatus</th>
                    <th>TotalAmount</th>
                    <th>PaymentMethod</th>
                    <th>PaymentStatus</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // Include the controller file to fetch the order details
                    require '../controllers/getOrderByID_control.php'; 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
