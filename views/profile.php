<?php
session_start();
if (!isset($_SESSION["employee_id"])) {
    header("Location: login.php");
    exit();
}

require '../controllers/profileController.php'; // Fetch employee data from controller
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <link rel="stylesheet" href="../myStyle/homeStyle.css">
</head>
<body>

<h1>Employee Profile</h1>

<!-- Display employee profile data -->
<table>
    <tr>
        <td><strong>Name:</strong></td>
        <td><?php echo htmlspecialchars($employee['Name']); ?></td>
    </tr>
    <tr>
        <td><strong>Employee ID:</strong></td>
        <td><?php echo htmlspecialchars($employee['ID']); ?></td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td><?php echo htmlspecialchars($employee['Email']); ?></td>
    </tr>
    <tr>
        <td><strong>Phone:</strong></td>
        <td><?php echo htmlspecialchars($employee['Phone']); ?></td>
    </tr>
    <tr>
        <td><strong>Date of Birth:</strong></td>
        <td><?php echo htmlspecialchars($employee['Password']); ?></td>
    </tr>
   
</table>

<br>
<button onclick="window.location.href='homepage.php';">Back to Homepage</button>

</body>
</html>
