<?php

$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];

if (!empty($name) || !empty($height) || !empty($weight)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "csad";
    
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT name From bmi Where name = ? Limit 1";
     $INSERT = "INSERT Into bmi (name,height,weight) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $name);
     $stmt->execute();
     $stmt->bind_result($name);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sii",$name,$height,$weight);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already registered using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>

