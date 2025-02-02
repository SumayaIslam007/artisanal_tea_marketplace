<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/customer/customer.css">

</head>
<body>
    <div class="login-container">
        <h1> Customer Login </h1>
        <form action="dashboard.php" method="post">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" ><br>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" ><br>
            
            <button type="submit">Login</button>    
        </form>
    <p class="account-info"> Don't have an account? <a href="/artisanal_tea_marketplace/public/index.php?page=registration"> Register here </a></p>
    </div>
</body>
</html>