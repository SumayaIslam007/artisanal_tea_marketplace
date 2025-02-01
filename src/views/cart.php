<?php
session_start();

$products = [
    1 => ["name" => "Green Tea", "price" => 10, "quantity" => "200gm"],
    2 => ["name" => "Black Tea", "price" => 15, "quantity" => "200gm"],
    3 => ["name" => "White Tea", "price" => 20, "quantity" => "300gm"],
    4 => ["name" => "Oolong Tea", "price" => 25, "quantity" => "250gm"],
    5 => ["name" => "Herbal Tea", "price" => 15, "quantity" => "150gm"],
    6 => ["name" => "Masala Tea", "price" => 25, "quantity" => "250gm"],
    7 => ["name" => "Chamomile Tea", "price" => 30, "quantity" => "200gm"],
    8 => ["name" => "Mint Tea", "price" => 15, "quantity" => "200gm"],
    9 => ["name" => "Lemon Tea", "price" => 20, "quantity" => "200gm"],
    10 => ["name" => "Jasmine Tea", "price" => 25, "quantity" => "200gm"]

];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$totalPrice = 0;
foreach ($_SESSION['cart'] as $productId) {
    $totalPrice += $products[$productId]['price'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="../public/css/cart.css" rel="stylesheet">
</head>
<body>
<div class = "header">
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
<div class="content">
    <h2>Shopping Cart</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty. <a href="dashboard.php">Go back to shopping</a></p>
    <?php else: ?>
        <table>
            <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart'] as $productId): ?>
                <tr>
                    <td><?php echo $products[$productId]['name']; ?></td>
                    <td>$<?php echo $products[$productId]['price']; ?></td>
                    <td><?php echo $products[$productId]['quantity']; ?></td>
                    <td><button class="remove-from-cart" data-product-id="<?php echo $productId; ?>">Remove</button></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Price: $<?php echo $totalPrice; ?></p>
        <form action="../public/index.php?page=payment" method="POST">
        <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
            <button class="proceed-to-payment">Proceed to Payment</button>
        </form>
    <?php endif; ?>
</div>
<script src="/artisanal_tea_marketplace/public/js/cart.js"></script>
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
<script src="https://kit.fontawesome.com/570cc9af35.js" crossorigin="anonymous"></script>
</body>
</html>