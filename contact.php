<?php
//Database Connection
$server ="localhost";
$user = "u342822078_shivam";
$password = "Fc70!49a";
$database = "u342822078_db";


$conn = new mysqli($server, $user, $password, $database);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}

// Retrieve form data

$name = $_POST['name'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$subject = $_POST['sub'];
$comm = $_POST['commit'];
$date = date("Y-m-d H:i:s");

//Insert data into database
$sql ="INSERT INTO `profile_contact`(`id`, `FullName`, `Mobile`, `Email`, `Subject`, `Commit`, `Date`)
 VALUES ('','$name','$mob','$email','$subject','$comm','$date')";

 if($conn->query($sql)=== TRUE){
      // Redirect back to the form with a success message
      header('Location: index.php?success=1');
      exit;
    
 }else{
    // Redirect back to the form with a failure message
    header('Location: index.php?fail=1');
    exit;
 }
 ?>