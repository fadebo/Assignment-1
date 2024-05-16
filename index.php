<?php 

session_start();
    if(isset($_SESSION["authenticated"]) == true){
        header("Location: login.php");
    }
    $name = $_SESSION["userLoggedIn"];
    $date = date("Y-m-d");
?>
<html>
  <head>
    <title>Farrell</title>
  </head>
  <body>
    <h1> Assignment 1</h1>
    <p>Welcome <?php echo $name?>, You successfully logged in at <?php echo $date?> </p>
    <p><a href="/logout.php">Click here to logout</a></p>
  </body>
</html>