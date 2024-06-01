<?php 
 require_once ('user.php');
  session_start();

  if($_SESSION['authenticated'] !== true) {
    header('Location: /login.php');
  }

	// This is giving an error because if this session variable isn't set, then it can't be assigned.
  $name = $_SESSION["userLoggedIn"];
  $date = date("Y-m-d");
  $user = new User();
  $user_list = $user->get_all_users();
  print_r ($user_list);
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