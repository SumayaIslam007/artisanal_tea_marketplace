<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require '../model/db.php';

if (!isset($_SESSION["employee_id"])) {
    header("Location: login.php");
    exit();
}

$employee_id = $_SESSION["employee_id"];
$db = new myDB();
$conn = $db->openCon();

$sql = "SELECT Name, ID, Password, Phone, Email  FROM Employee WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $employee_id);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();

if (!$employee) {
    echo "Employee details not found.";
    exit();
}

$stmt->close();
$db->closeCon($conn);
?>
