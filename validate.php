<?php 
  
  $valid_name = "Farrell";
  $valid_pass = "password";

  $name = $_REQUEST["username"];
  $pass = $_REQUEST["password"];
  if ($name == $valid_name && $pass == $valid_pass){
    //header("Location: /index.php");
    echo "You are logged in";
  }else{
    //header("Location: /login.php");
    echo "Failure";
  }
?>