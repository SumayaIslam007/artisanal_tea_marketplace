<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["product_id"];
    
    if (isset($_SESSION['cart']) && ($key = array_search($productId, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
        // Reindex the array to maintain proper indexing
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo "Product removed from cart.";
    } else {
        echo "Product not found in cart.";
    }
} else {
    echo "Invalid request method.";
}
?>