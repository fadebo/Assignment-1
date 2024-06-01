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
    $statement->execute();
  }
}