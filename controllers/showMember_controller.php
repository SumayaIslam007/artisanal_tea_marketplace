<?php
include '../model/db.php';

$mydb = new myDB();
$conObj = $mydb->openCon();
$result = $mydb->showEmployee("employee", $conObj);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
      echo "<tr>
      <td>".$row["Name"]."</td>
      <td>".$row["ID"]."</td>
      <td>".$row["DOB"]."</td>
      <td>".$row["Email"]."</td>
      <td>".$row["Phone"]."</td>
      <td>".$row["Password"]."</td>
     
      </tr>";
      
        #<td><a href='../view/edit_user.php?id=" . $data["ID"] . "' class='edit-btn'>Edit</a></td>";
    }
} else {
    echo "<tr><td colspan='10' class='no-data'>No data found.</td></tr>";
}
?>
