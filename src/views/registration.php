<?php
session_start();
$form_data = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../public/css/customer/customer.css">

</head>
<body>
    <div class="register-container">
        <h1> Customer Registration </h1>

            <form action="/artisanal_tea_marketplace/src/controllers/customer_reg.php" method="post">
            
            <?php if (isset($_SESSION['errors']['nameErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['nameErr']); ?></span><br>
            <?php endif; ?>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($form_data['name']) ? htmlspecialchars($form_data['name']) : ''; ?>"><br>
        
            <?php if (isset($_SESSION['errors']['emailErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['emailErr']); ?></span><br>
            <?php endif; ?>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>"><br>
            
            <?php if (isset($_SESSION['errors']['phoneErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['phoneErr']); ?></span><br>
            <?php endif; ?>
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" value="<?php echo isset($form_data['phone']) ? htmlspecialchars($form_data['phone']) : ''; ?>"><br>
            
            <?php if (isset($_SESSION['errors']['genderErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['genderErr']); ?></span><br>
            <?php endif; ?>
            <div class="gender-container">
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" <?php echo (isset($form_data['gender']) && $form_data['gender'] == 'male') ? 'checked' : ''; ?>>
                <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php echo (isset($form_data['gender']) && $form_data['gender'] == 'female') ? 'checked' : ''; ?>>
                <label for="female">Female</label>
            </div><br>
        
            <?php if (isset($_SESSION['errors']['passwordErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['passwordErr']); ?></span><br>
            <?php endif; ?>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo isset($form_data['password']) ? htmlspecialchars($form_data['password']) : ''; ?>"><br>
            
            <?php if (isset($_SESSION['errors']['confirmPasswordErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['confirmPasswordErr']); ?></span><br>
            <?php endif; ?>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" value="<?php echo isset($form_data['confirm_password']) ? htmlspecialchars($form_data['confirm_password']) : ''; ?>"><br>

            <?php if (isset($_SESSION['errors']['termsErr'])): ?>
            <span style="color: red;"><?php echo htmlspecialchars($_SESSION['errors']['termsErr']); ?></span><br>
            <?php endif; ?>
            <input type="checkbox" id="terms" name="terms" <?php echo isset($form_data['terms']) ? 'checked' : ''; ?>>
            <label for="terms">I agree to the terms and conditions</label><br>
            
            <button type="submit">Register</button>
        </form>    
    <p class="account-info">Already have an account? <a href="/artisanal_tea_marketplace/public/index.php?page=login">Login here</a></p>
    </div>
</body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['form_data']);
?>