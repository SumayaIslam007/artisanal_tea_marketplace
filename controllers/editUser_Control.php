<?php
include_once '../model/db.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new MyDB();
    $conn = $db->openCon(); // Open the database connection

    // Retrieve form data
    $userId = $_POST['id'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password storage

    // Update data in the database
    $result = updateUser($userId, $username, $gender, $dob, $email, $phone, $password, "users", $conn);

    if ($result === 1) {
        echo "Information updated successfully.";
        header("Location: ../view/showuser.php"); // Redirect to show user data page
        exit(); // Ensure the script stops after the redirect
    } else {
        echo "Error updating information: " . $result;
    }

    $db->closeCon(); // Close the database connection
}

// Function to update user information
function updateUser($id, $username, $gender, $dob, $email, $phone, $password, $table, $conn) {
    // SQL query to update user information
    $sql = "UPDATE $table SET Name = ?, Gender = ?, DOB = ?, Email = ?, Phone = ?, Password = ? WHERE ID = ?";

    // Prepare and bind the statement
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssi", $username, $gender, $dob, $email, $phone, $password, $id);

        // Execute the statement
        if ($stmt->execute()) {
            return 1; // Success
        } else {
            return "Error: " . $stmt->error; // Return error message if execution fails
        }

        $stmt->close(); // Close the prepared statement
    } else {
        return "Error preparing the statement: " . $conn->error;
    }
}
?>
