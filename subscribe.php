<?php

  $email = $_POST['email'];
  $deciveType = $_COOKIE["device"];

  //database connection

  $host = "uc13jynhmkss3nve.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $username = "di4cjt3koqw6qt8u";
  $password = "b1r2w0qjf3ohrgcy";
  $dbName = "uex4eexutw4f8l36";

  $mysqli = new mysqli($host, $username, $password, $dbName);

  if($mysqli === false){
    die("ERROR: Could not connect to db. " . $mysqli->connect_error);
  } else {

    $sql = "INSERT INTO subscribers (email, deviceType) VALUES ('$email', '$deciveType')";
  
    if($mysqli->query($sql) === true){
      echo "Records inserted successfully.";
    } else{
      echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
 
    // Close connection
    $mysqli->close(); 
  }
?>
