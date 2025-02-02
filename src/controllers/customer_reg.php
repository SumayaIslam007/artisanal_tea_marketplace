<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nameErr = $emailErr = $phoneErr = $genderErr = $passwordErr = $confirmPasswordErr = $termsErr = "";
    $name = $email = $phone = $gender = $password = $confirmPassword = $terms = "";

    // Check if each field is empty
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required.";
    } else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]{11}$/", $phone)) {
            $phoneErr = "Invalid phone number format.";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr =  "Gender is required.";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 5) {
            $passwordErr = "Password must be at least 8 characters long.";
        }
    }
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Please confirm your password.";
    } else {
        $confirmPassword = test_input($_POST["confirm_password"]);
        if ($confirmPassword != $password) {
            $confirmPasswordErr = "Passwords do not match.";
        }
    }
    if (!isset($_POST["terms"])) {
        $termsErr = "Please agree to the terms and conditions.";
    } else {
        $terms = test_input($_POST["terms"]);
    }

    if (!empty($nameErr) || !empty($emailErr) || !empty($phoneErr) || !empty($genderErr) || !empty($passwordErr) || !empty($confirmPasswordErr) || !empty($termsErr)) {
        $_SESSION['errors'] = [
            'nameErr' => $nameErr,
            'emailErr' => $emailErr,
            'phoneErr' => $phoneErr,
            'genderErr' => $genderErr,
            'passwordErr' => $passwordErr,
            'confirmPasswordErr' => $confirmPasswordErr,
            'termsErr' => $termsErr,
        ];
        $_SESSION['form_data'] = $_POST;  
        header("Location: /artisanal_tea_marketplace/public/index.php?page=registration");
        exit();
    } else {
        // If there are errors, redirect back with errors in the URL
        header("Location: /artisanal_tea_marketplace/public/index.php?page=dashboard");
        exit();
    }
    
}

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
