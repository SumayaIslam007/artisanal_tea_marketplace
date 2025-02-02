<?php
require '../controllers/employeeProfileDetails.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanal Tea Marketplace</title>
    <link rel="stylesheet" href="../myStyle/mystyle.css">
    <script src="../JS/myReg.js" defer></script>
</head>
<body>
    <h1>Welcome to Artisanal Tea Marketplace</h1>
    <hr>

    <form action="../controllers/employeeProfileDetails.php" method="post" enctype="multipart/form-data">
        <h2>Employee Registration</h2>

        <!-- Personal Information -->
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td>
                        <input type="text" id="name" name="name">
                        <span id="nameError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="email" id="email" name="email">
                        <span id="emailError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>
                        <input type="text" id="username" name="username">
                        <span id="usernameError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>
                        <input type="password" id="password" name="password">
                        <span id="passwordError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number</label></td>
                    <td>
                        <input type="tel" id="phone" name="phone">
                        <span id="phoneError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>
                        <input type="date" id="dob" name="dob">
                        <span id="dobError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td>
                        <textarea id="address" name="address" rows="3"></textarea>
                        <span id="addressError" class="error"></span>
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Employee Information -->
        <fieldset>
            <legend>Employee Information</legend>
            <table>
                <tr>
                    <td><label for="employee_id">Employee ID</label></td>
                    <td>
                        <input type="text" id="employee_id" name="employee_id">
                        <span id="employeeIdError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="department">Department</label></td>
                    <td>
                        <input type="text" id="department" name="department">
                        <span id="departmentError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="position">Position</label></td>
                    <td>
                        <input type="text" id="position" name="position">
                        <span id="positionError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="joining_date">Joining Date</label></td>
                    <td>
                        <input type="date" id="joining_date" name="joining_date">
                        <span id="joiningDateError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="salary">Salary</label></td>
                    <td>
                        <input type="number" id="salary" name="salary" min="0">
                        <span id="salaryError" class="error"></span>
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Emergency Contact -->
        <fieldset>
            <legend>Emergency Contact</legend>
            <table>
                <tr>
                    <td><label for="emergency_contact_name">Contact Name</label></td>
                    <td>
                        <input type="text" id="emergency_contact_name" name="emergency_contact_name">
                        <span id="emergencyContactNameError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_relationship">Relationship</label></td>
                    <td>
                        <input type="text" id="emergency_contact_relationship" name="emergency_contact_relationship">
                        <span id="emergencyContactRelationshipError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_phone">Contact Phone</label></td>
                    <td>
                        <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone">
                        <span id="emergencyContactPhoneError" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td><input type="file" class="file" name="images"></td>
                </tr>
            </table>
        </fieldset>

        <br>
        <input type="submit" class="register" value="Register as Employee">
        <br>
        <span class="sp">Already have an account?</span>
        <a href="login.php">Sign In</a>
    </form>

</body>
</html>
