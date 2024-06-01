<?php
  session_start();
if($_SESSION['msg'] !=""){
  $msg = $_SESSION['msg'];
}
else{
  $msg = "";
}
?>
<html>
  <head>
    <title>Register</title>
  </head>
  <body>
      <h1>Register Form</h1>
      <p><?php echo $msg?></p>
      <form action="/action.php" method="post"> 
           <div class= "form-group">
              <label for="username">Username</label>
              <br>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
              <br>
              <label for="password">Password</label>
              <br>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              <br>
             <label for="password2">Confirm Password</label>
             <br>
             <input type="password" class="form-control" id="password2" placeholder="Confirm password" name="password2">
             <br>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div> 
      </form>
    <p><a href="/login.php">Already have an account? Login</a>
  </body>
</html>