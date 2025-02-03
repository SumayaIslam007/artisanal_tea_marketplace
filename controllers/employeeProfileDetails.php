<?php
require '../model/db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize user inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $dob = htmlspecialchars(trim($_POST['dob']));
    $address = htmlspecialchars(trim($_POST['address']));
    $employee_id = htmlspecialchars(trim($_POST['employee_id']));
    $department = htmlspecialchars(trim($_POST['department']));
    $position = htmlspecialchars(trim($_POST['position']));
    $joining_date = htmlspecialchars(trim($_POST['joining_date']));
    $salary = htmlspecialchars(trim($_POST['salary']));
    $emergency_contact_name = htmlspecialchars(trim($_POST['emergency_contact_name']));
    $emergency_contact_relationship = htmlspecialchars(trim($_POST['emergency_contact_relationship']));
    $emergency_contact_phone = htmlspecialchars(trim($_POST['emergency_contact_phone']));

   
    $errors = []; 

  
   if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Name must contain only letters and spaces.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    } elseif (!preg_match("/[\W]/", $password)) {
        $errors[] = "Password must contain at least one special character.";
    }
    if (!preg_match("/^\d{11}$/", $phone)) {
       $errors[] = "Phone number must be 11 digits.";
    }
    if (!is_numeric($salary) || $salary <= 0) {
        $errors[] = "Salary must be a positive number.";
    }
    if (!preg_match("/^\d{11}$/", $emergency_contact_phone)) {
        $errors[] = "Emergency Contact Phone must be 11 digits.";
    }

    
    if (!empty($errors)) {
     
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        
        $mydb = new myDB();
        $conobj = $mydb->openCon(); 
        $result = $mydb->insertData($name, (int)$employee_id, $dob, $phone, $email, $password, $conobj);

        if ($result == 1) {
            // Store user details in the session
            $_SESSION["email"] = $email;
            $_SESSION["phone"] = $phone;
            $_SESSION["employee_id"] = $employee_id;
            $_SESSION["department"] = $department;

            // Write data to the text file
            $data_string = 
                "Email: $email\n
                 Password: $password\n
                 Phone: $phone\n
                 Date of Birth: $dob\n
                 Address: $address\n
                 Employee ID: $employee_id\n
                 Department: $department\n
                 Position: $position\n
                 Joining Date: $joining_date\n
                 Salary: $salary\n
                 Emergency Contact Name: $emergency_contact_name\n
                 Emergency Contact Relationship: $emergency_contact_relationship\n
                 Emergency Contact Phone: $emergency_contact_phone\n";

            $myfile = fopen("data.txt", "w");
            fwrite($myfile, $data_string);

            // Write data to the XML file
            $xml_data = new SimpleXMLElement('<EmployeeDetails/>');
            $xml_data->addChild('Email', $email);
            $xml_data->addChild('Password', $password); 
            $xml_data->addChild('Phone', $phone);
            $xml_data->addChild('DateOfBirth', $dob);
            $xml_data->addChild('Address', $address);
            $xml_data->addChild('EmployeeID', $employee_id);
            $xml_data->addChild('Department', $department);
            $xml_data->addChild('Position', $position);
            $xml_data->addChild('JoiningDate', $joining_date);
            $xml_data->addChild('Salary', $salary);
            $xml_data->addChild('EmergencyContactName', $emergency_contact_name);
            $xml_data->addChild('EmergencyContactRelationship', $emergency_contact_relationship);
            $xml_data->addChild('EmergencyContactPhone', $emergency_contact_phone);

            $xml_string = $xml_data->asXML();
            $file_path = '../Data/filexml.xml';
            file_put_contents($file_path, $xml_string);

            // Write data to the JSON file
            $data = [
                "email" => $_POST["email"],
                "password" => $_POST["password"],
                "phone" => $_POST["phone"],
                "dob" => $_POST["dob"],
                "address" => $_POST["address"],  
                "employee_id" => $_POST["employee_id"],
                "department" => $_POST["department"],
                "position" => $_POST["position"],
                "joining_date" => $_POST["joining_date"],
                "salary" => $_POST["salary"],
                "emergency_contact_name" => $_POST["emergency_contact_name"],
                "emergency_contact_relationship" => $_POST["emergency_contact_relationship"],
                "emergency_contact_phone" => $_POST["emergency_contact_phone"]
            ];
            $file_path = "../Data/UserData.json";
            if (file_exists($file_path)) {
                $json_data = file_get_contents($file_path);
                $existing_data = json_decode($json_data, true);
                if (!is_array($existing_data)) {
                    $existing_data = [];
                }
            } else {
                $existing_data = [];
            }
            $existing_data[] = $data;
            $json = json_encode($existing_data, JSON_PRETTY_PRINT);
            file_put_contents($file_path, $json);

            
            header("Location: ../views/login.php");
            exit();
        } else {
            echo "Failed to register. Please try again.";
        }
    }
}
?>
