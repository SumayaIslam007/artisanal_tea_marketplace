<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order Status</title>
</head>

</head>
<body>
<form action="../controllers/updateOrderStatus_control.php" method="POST">

    
        <h2>Update Order Status</h2>
        <label for="OrderID">Order ID:</label>
        <input type="number" id="OrderID" name="OrderID" placeholder="Enter Order ID">
</br>
        <label for="OrderStatus">New Order Status:</label>
        <select id="OrderStatus" name="OrderStatus">
            <option value="" disabled selected>Select Status</option>
            <option value="Pending">Pending</option>
            <option value="Processing">Processing</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>

        <label for="PaymentStatus">New Payment Status:</label>
        <select id="PaymentStatus" name="PaymentStatus">
            <option value="" disabled selected>Select Status</option>
            <option value="Pending">Pending</option>
            <option value="Paid">Paid</option>
            <option value="Failed">Failed</option>      
        </select>
</br> 
        <button type="submit">Update Status</button>
    </form>
</body>
</html>