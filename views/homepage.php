<?php
session_start();
if (!isset($_SESSION["employee_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../myStyle/homeStyle.css">
    <script src="../JS/myJS.js"></script>
</head>
<body>

<h2>Welcome to Artisanal Tea Marketplace</h2>
<h1>Welcome to Employee Page</h1>


<button type="button" id="profile" onclick="window.location.href='profile.php';">
    Me
</button>

<button type="button" id="logout" onclick="window.location.href='logout.php';">
    Sign Out
</button>

<form>
    <fieldset>
        <legend>About</legend>
        <p>Our online Artisanal Tea Marketplace offers a wide selection of premium, handcrafted teas sourced from around the world. Whether you're a tea enthusiast or a beginner, we provide high-quality blends, personalized recommendations, and an easy shopping experience to help you explore the best in tea.</p>
    </fieldset>
</form>

<form>
    <fieldset>
        <legend>Manage Customer Order</legend>
        <table>
            <button type="button" id="showOrder" onclick="window.location.href='show_Order.php';">
                View Customer Order
            </button>
</br>
            <button type="button" id="searchOrder" onclick="window.location.href='getOrderByID.php';">
                Search Order
            </button>
</br>
            <button type="button" id="DeleteOrder" onclick="window.location.href='deleteOrder.php';">
                Delete Order
            </button>
</br>
            <button type="button" id="updateOrderStatus" onclick="window.location.href='updateOrderStatus.php';">
                Update Order Status
            </button>

 </br>
            <button type="button" id="showProduct" onclick="window.location.href='showproduct.php';">
                View Product Details
            </button>
        </table>
    </fieldset>
</form>


</body>
</html>
