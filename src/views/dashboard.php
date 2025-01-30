<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="../public/css/dashboard.css" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="header-center">
    <img src="../public/images/logo.png" alt="Logo" class="logo"> <!-- Logo -->
    <h1 class="website-name">Artisanal Tea Marketplace</h1>
</div>
    <button class="navbar-toggle" onclick="toggleNavbar()"><i class="fas fa-bars"></i> Menu</button>    <div class="navbar-dropdown" id="navbarDropdown">
        <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
        <a href="#search"><i class="fas fa-search"></i> Search Products</a>
        <a href="/artisanal_tea_marketplace/public/index.php?page=about"><i class="fas fa-info-circle"></i> About</a>
        <a href="/artisanal_tea_marketplace/public/index.php?page=contact"><i class="fas fa-envelope"></i> Contact</a>
        <a href="/artisanal_tea_marketplace/public/index.php?page=login" class="right"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>
<div class="product-container">
    <div class="product-details">
        <img src="../public/images/green_tea.png" alt="Green-tea" class="product-image">
        <div class="product-info">
            <h2>Green Tea</h2>
            <p class="Price">Price: $10</p>
            <p class="Quantity">Quantity: 200gm</p>
            <p class="Description">Description: Fresh and organic green tea, rich in antioxidants to boost your health.</p>
            <div class="product-buttons">
            <button class="add-to-cart" data-product-id="1">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/black_tea.png" alt="Black-tea" class="product-image">
        <div class="product-info">
            <h2>Black Tea</h2>
            <p class="Price">Price: $15</p>
            <p class="Quantity">Quantity:200gm</p>
            <p class="Description">Description:Strong and aromatic black tea, perfect for a morning boost.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="2">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/white_tea.png" alt="White-tea" class="product-image">
        <div class="product-info">
            <h2>White Tea</h2>
            <p class="Price">Price: $20</p>
            <p class="Quantity">Quantity:300gm</p>
            <p class="Description">Description: Delicate and fragrant white tea, perfect for a relaxing evening.</p>
            <div class="product-buttons">
            <button class="add-to-cart" data-product-id="3">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/olong_tea.png" alt="Oolong-tea" class="product-image">
        <div class="product-info">
            <h2>Oolong Tea</h2>
            <p class="Price">Price: $25</p>
            <p class="Quantity">Quantity:250gm</p>
            <p class="Description">Description: Semi-fermented oolong tea, with a unique taste and aroma.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="4">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/herbal_tea.png" alt="Herbal-tea" class="product-image">
        <div class="product-info">
            <h2>Herbal Tea</h2>
            <p class="Price">Price: $30</p>
            <p class="Quantity">Quantity:150gm</p>
            <p class="Description">Description: A blend of organic herbs, perfect for relaxation and rejuvenation.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="5">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/masala_tea.jpg" alt="Masala-tea" class="product-image">
        <div class="product-info">
            <h2>Masala Tea</h2>
            <p class="Price">Price: $35</p>
            <p class="Quantity">Quantity:250gm</p>
            <p class="Description">Description: Spiced tea blend, with a perfect balance of flavors and aroma.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="6">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>
    
    <div class="product-details">
        <img src="../public/images/chemomile_tea.png" alt="chamomile-tea" class="product-image">
        <div class="product-info">
            <h2>Chamomile Tea</h2>
            <p class="Price">Price: $40</p>
            <p class="Quantity">Quantity:200gm</p>
            <p class="Description">Description: Soothing chamomile tea, perfect for relaxation and stress relief.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="7">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/mint_tea.png" alt="mint-tea" class="product-image">
        <div class="product-info">
            <h2>Mint Tea</h2>
            <p class="Price">Price: $15</p>
            <p class="Quantity">Quantity:200gm</p>
            <p class="Description">Description: Refreshing mint tea, perfect for a cool and refreshing drink.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="8">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/lemon_tea.png" alt="lemon-tea" class="product-image">
        <div class="product-info">
            <h2>Lemon Tea</h2>
            <p class="Price">Price: $20</p>
            <p class="Quantity">Quantity:200gm</p>
            <p class="Description">Description: Tangy and refreshing lemon tea, perfect for a cool and refreshing drink.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="9">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <img src="../public/images/jasmine_tea.png" alt="Iced-tea" class="product-image">
        <div class="product-info">
            <h2>Jasmine Tea</h2>
            <p class="Price">Price: $25</p>
            <p class="Quantity">Quantity:200gm</p>
            <p class="Description">Description: Fragrant jasmine tea, perfect for a relaxing and aromatic drink.</p>
            <div class="product-buttons">
                <button class="add-to-cart" data-product-id="10">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>
</div> 
<script src="/artisanal_tea_marketplace/public/js/cart.js"></script>
<script src="https://kit.fontawesome.com/570cc9af35.js" crossorigin="anonymous"></script>   
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
</body>
</html>