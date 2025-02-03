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
        header("Location: ../views/homepage.php"); 
        exit();
    } else {
        echo "<p>Invalid email or password. Please try again.</p>";
    }

    $stmt->close();
    $mydb->closeCon($conobj);
}
?>