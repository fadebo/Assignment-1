<?php

require_once ('database.php');

Class User {

  public function get_all_users() {
    $dbh = db_connect();
    $statement = $dbh->prepare("SELECT * FROM users");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function create_user($username, $password) {
    $dbh = db_connect();
  
    $statement = $dbh->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
  }

  public function validateUsername($un) {
      $dbh = db_connect();
      $statement = $dbh->prepare("SELECT * FROM users WHERE username = :username");
      $statement->bindValue(":username", $un);
      $statement->execute();

      if($statement->rowCount() != 0) {
        return "Username already exists";
      }
  }

  public function validatePasswords($pw) {
      if(strlen($pw) < 5 || strlen($pw) > 25) {
          return "Password Length must be between 5 and 25 characters";
      }
      else{
        return "valid";
      }
      // if(!preg_match("/[a-z]/", $pw)){
      //   return "Password must contain at least one lowercase letter";
      // }
      // if(!preg_match("/[A-Z]/", $pw)){
      //   return "Password must contain at least one uppercase letter";
      // }
      // if(!preg_match("/[0-9]/", $pw)){
      //   return "Password must contain at least one number";
      // }
      // if(!preg_match("/[^a-zA-Z0-9]/", $pw)){
      //   return "Password must contain at least one special character";
      // }
  }
  
}
  
?>