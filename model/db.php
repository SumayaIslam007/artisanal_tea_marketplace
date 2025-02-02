<?php
class myDB
{

  function openCon(){
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "webtechdb";
    
    $connectionObject = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    return $connectionObject;
  }

  function insertData($name, $employee_id, $dob, $phone, $email, $password, $connectionObject){
    $stmt = $connectionObject->prepare("INSERT INTO Employee(Name, ID, DOB, Phone, Email, Password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $employee_id, $dob, $phone, $email, $password);
    $stmt->execute();
    
    if ($stmt->execute()) {
      $stmt->close();
      return 1; 
    } else {
      $stmt->close();
      return 0; 
    }
  }

  function showEmployee($table, $conn){
    $sql = "SELECT * FROM `$table`"; 
    $result = $conn->query($sql);
    return $result;
  }

  function showProduct($table, $conn){
    $table = $conn->real_escape_string($table);
     $sql = "SELECT * FROM `$table`";  
     $result = $conn->query($sql);
     
     if (!$result) {
         die('Error executing query: ' . $conn->error);  
     }
 
     return $result;
   }

  function showOrder($table, $conn){
   $table = $conn->real_escape_string($table);
    $sql = "SELECT * FROM `$table`";  
    $result = $conn->query($sql);
    
    if (!$result) {
        die('Error executing query: ' . $conn->error);  
    }

    return $result;
  }

  

  function getOrderByID($OrderId, $connectionObject){
    $sql = "SELECT * FROM `order` WHERE OrderID = ?";
    $stmt = $connectionObject->prepare($sql);
    $stmt->bind_param("i", $OrderId);  
    $stmt->execute();
    return $stmt->get_result();
  }

  function deleteOrderByID($OrderId, $connectionObject) {
    $sql = "DELETE FROM `order` WHERE OrderID = ?";
    $stmt = $connectionObject->prepare($sql);
    $stmt->bind_param("i", $OrderId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function get_product_by_id($table, $conn, $id){
  $sql = "SELECT * FROM $table WHERE ProductID = '$id'";
  $result = $conn->query($sql);
  return $result;
}


function updateOrderStatus($OrderId, $OrderStatus, $PaymentStatus, $connectionObject) {
  $sql = "UPDATE `order` SET OrderStatus = ? WHERE OrderID = ?";
  $stmt = $connectionObject->prepare($sql);

  if ($stmt) {
      $stmt->bind_param("si", $OrderStatus, $OrderId);
      $stmt->execute();

      if ($stmt->affected_rows > 0) {
          return true;
      }
  }

  return false;
}

  function closeCon($connectionObject){
    $connectionObject->close();
  }

}



?>
