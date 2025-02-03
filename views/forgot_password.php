<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <head>
  <title>Forgot Password</title>
</head>
<body>

<div class="forgot-password-container">
    <h2>Forgot Password</h2>
    <p>Enter your registered email address, and we'll send you a link to reset your password.</p>
    <form action="process_forgot_password.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email">

<button onclick="location.href='forgotPin.php'">
    Send Reset Link
</button>
    </form>
    <a href="login.php">Back to Login</a>
</div>

</body>
</html>