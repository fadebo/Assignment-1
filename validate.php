<?php

  session_start();

  $valid_username = "farrell";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];  
  
  //echo "Username: " . $username . "<br>";
  //echo "Password: " . $password . "<br>";
  if ($valid_username == $username && $valid_password == $password){
    $_SESSION["userLoggedIn"] = $valid_username;
    $_SESSION["authenticated"] = true;
    if(isset($_SESSION["userLoggedIn"])) {
        header("Location: /");
    }
    //header("Location: /");
    //echo "Success";
  }else{
    //header("Location: /login.php");
    //echo "Failure";
    $_SESSION["authenticated"] = false;
    if (!isset( $_SESSION['login_attempts'] )){
      $_SESSION['login_attempts'] = 1;
    }else{
      $_SESSION['login_attempts'] = $_SESSION['login_attempts'] + 1;
    }
    header("Location: /login.php");
    //echo "Unsuccessful login, Login Attempts: " . $_SESSION['login_attempts'] . "<br>";
    
  }
?>