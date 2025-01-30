<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productId = $_POST["product_id"];

    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = [];
    }

    if(!in_array($productId, $_SESSION["cart"])){
        $_SESSION["cart"][] = $productId;
    }

    echo "Product added to cart!";
}
?>