<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="../public/css/payment.css" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="header-center">
        <img src="../public/images/logo.png" alt="Logo" class="logo">
        <h1 class="website-name">Artisanal Tea Marketplace</h1>
    </div>
    <button class="navbar-toggle" onclick="toggleNavbar()"><i class="fas fa-bars"></i> Menu</button>
    <div class="navbar-dropdown" id="navbarDropdown">
        <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
        <a href="#search"><i class="fas fa-search"></i> Search Products</a>
        <a href="/artisanal_tea_marketplace/public/index.php?page=about"><i class="fas fa-info-circle"></i> About</a>
        <a href="/artisanal_tea_marketplace/public/index.php?page=contact"><i class="fas fa-envelope"></i> Contact</a>
        <a href="/artisanal_tea_marketplace/public/index.php?page=login" class="right"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>
<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red; text-align:center;'>" . htmlspecialchars($_GET['error']) . "</p>";
}
?>
<?php
$totalPrice = isset($_POST['totalPrice']) ? $_POST['totalPrice'] : 0;
?>
<div class="content">
    <h2>Payment</h2>
    <p>Total Amount: $<?php echo $totalPrice; ?></p>
    <form action="/artisanal_tea_marketplace/src/controllers/process_payment.php" method="POST" id="paymentForm">
        
        <input type="hidden" name="totalPrice" value="<?php echo htmlspecialchars($totalPrice); ?>">
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber" ><br>

        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" name="expiryDate" ><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" ><br>

        <label for="cardName">Name on Card:</label>
        <input type="text" id="cardName" name="cardName" ><br>

        <button type="submit">Proceed to Payment</button>
    </form>
</div>
<script>
function toggleNavbar() {
    var navbarDropdown = document.getElementById("navbarDropdown");
    if (navbarDropdown.style.display === "block") {
        navbarDropdown.style.display = "none";
    } else {
        navbarDropdown.style.display = "block";
    }
}
</script>
<script src="/artisanal_tea_marketplace/public/js/payment.js"></script>
<script src="https://kit.fontawesome.com/570cc9af35.js" crossorigin="anonymous"></script>
</body>
</html>