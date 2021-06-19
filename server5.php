<?php

$username = $_POST['username'];


if (!empty($username)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "csad";
    
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT username From cookie Where username = ? Limit 1";
     $INSERT = "INSERT Into cookie (username) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s",$username);
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