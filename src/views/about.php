<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="../public/css/about.css" rel="stylesheet">
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
        <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
        <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        <a href="login.php" class="right"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>
<div class="content">
    <h2>About Us</h2>
    <p>Welcome to Artisanal Tea Marketplace, your number one source for all things tea. We're dedicated to providing you the very best of artisanal teas, with an emphasis on quality, sustainability, and customer service.</p>
    <p>Founded in 2024, Artisanal Tea Marketplace has come a long way from its beginnings. When we first started out, our passion for eco-friendly and high-quality teas drove us to start our own business.</p>
    <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
    <p>Sincerely,<br>The Artisanal Tea Marketplace Team</p>
</div>
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