
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea Marketplace</title>

 
</head>

<body>
    
        <a href="homepage.php" class="btn-home">Homepage</a>
                
        <div class="content-section">
            <h2>Employee Information</h2>
            
            
           
                <table class="employee">
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
                    
           
        </div>
    </div>
    <?php require '../controllers/showOrder_control.php'; ?>
</body>
</html>