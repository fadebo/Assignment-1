<?php
  session_start();
//print_r($_SESSION); // tried to print all session variables
if(isset($_SESSION["authenticated"]) == false){
  if(isset($_SESSION["login_attempts"])){
    $msg = "Unsuccessful login, Login Attempts: " . $_SESSION['login_attempts'] . "<br>";
  }else{
    $msg = " "; // prints a default message, placed for debugging purposes
  }
}else{
  header("Location: /"); // go back to home if loggedIn
}
  if($_SESSION['msg'] !=""){
    $msg2 = $_SESSION['msg'];
  }
  else{
    $msg2 = "";
  }
?>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
      <h1>Login Form</h1>
      <p><?php echo $msg?></p>
      <p><?php echo $msg2?></p>
      <form action="/validate.php" method="post"> 
           <div class= "form-group">
              <label for="username">Username</label>
              <br>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
              <br>
              <label for="password">Password</label>
              <br>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              <br>
              <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </div> 
      </form>
        <p><a href="/register.php">Click here to register</a>
  </body>
</html>