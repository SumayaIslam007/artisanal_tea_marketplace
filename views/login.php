<?php
session_start();
require '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $mydb = new myDB();
    $conobj = $mydb->openCon();
    $stmt = $conobj->prepare("SELECT * FROM Employee WHERE Email = ? AND Password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['user_email'] = $email;
        header("Location: homepage.php"); // Redirect to dashboard or home page
        exit();
    } else {
        echo "<p>Invalid email or password. Please try again.</p>";
    }

    $stmt->close();
    $mydb->closeCon($conobj);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="myJS.js"></script> 
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password" ></td>
            </tr>
        </table>
        
        <input type="submit" value="Login">
        <button onclick="location.href='forgot_password.php'">
    Forgot Password?
</button>
    </form>
</body>
</html>
