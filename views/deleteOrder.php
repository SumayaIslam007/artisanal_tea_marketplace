<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../JS/myJS.js"></script>
</head>

</head>
<body>
    <form action="../controllers/deleteOrder_Control.php" method="POST">
        <h2>Delete Order</h2>
        <label for="OrderID">Enter Order ID to Delete:</label>
        <input type="number" id="OrderID" name="OrderID" placeholder="Enter Order ID" required>
        <button type="submit">Delete Order</button>
    </form>
</body>
</html>