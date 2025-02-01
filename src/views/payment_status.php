<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link rel="stylesheet" href="../public/css/payment.css">
</head>
<body>
    <div class="header">
        <div class="header-center">
            <img src="../public/images/logo.png" alt="Logo" class="logo">
            <h1 class="website-name">Artisanal Tea Marketplace</h1>
        </div>
    </div>

    <div class="content">
        <?php
        // Check if there is an error parameter
        if (isset($_GET['error'])) {
            $errorMessage = htmlspecialchars($_GET['error']);
            echo "<h2 style='color:red;'>Payment Failed</h2>";
            echo "<p style='color:red;'>$errorMessage</p>";
        } else {
            // If no error, display the success message
            echo "<h2>Payment Successful</h2>";
            if (isset($_GET['amount'])) {
                $amount = htmlspecialchars($_GET['amount']);
                echo "<p>Your payment of \$$amount has been processed successfully.</p>";
            }
        }
        ?>

        <a href="dashboard.php">Return to Dashboard</a>
    </div>
</body>
</html>
