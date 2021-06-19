<?php

$star = $_POST['star'];
/*if ($star="5"){
$starint = 5;}
else if($star="4"){
$starint = 4;}
else if($star="3"){
$starint = 3;}
else if($star="2"){
$starint = 2;}
else if($star="1"){
$starint = 1;} */


if (!empty($star)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "csad";
    
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT star From ratings Where star = ? Limit 1";
     $INSERT = "INSERT Into ratings (star) values(?)";
     
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $star);
     $stmt->execute();
     $stmt->bind_result($star);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("i",$star);
      $stmt->execute();
     echo'sent to dB';
      } /*else {
      echo "Someone already registered using this email";
     } */
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>

