
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
      <h1>Login Form</h1>
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
      </form>
  </body>
</html>