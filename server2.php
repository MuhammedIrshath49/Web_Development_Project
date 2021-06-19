<?php

$consumer_type = $_POST['consumer_type'];
$nature = $_POST['nature'];
$email = $_POST['work_email'];
$feedback = $_POST['fcomments'];

 


if (!empty($consumer_type) || !empty($nature) || !empty($email) || !empty($feedback)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "csad";
    
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT work_email From contact_us Where work_email = ? Limit 1";
     $INSERT = "INSERT Into contact_us (consumer_type,nature,work_email,comments) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss",$consumer_type,$nature,$email,$feedback);
      $stmt->execute();
      header("Location: generic.php");
      //echo 'Click the following to go back to the website >>> <a href="generic.php">Contact Us</a>';
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