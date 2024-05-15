
<?php
  $name = "Farrell";
  $pass = "password";
?>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
      <form action="/validate.php" method="post"> 
          <div class= "form-group">
              <label for="username">Username</label>
              <br>
              <input type="text" class="form-control" id="username" placeholder="Enter username">
              <br>
              <label for="password">Password</label>
              <br>
              <input type="password" class="form-control" id="password" placeholder="Enter password">
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
  </body>
</html>