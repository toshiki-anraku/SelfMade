<?php
require_once(__DIR__ . '/Db.php');

class Signup extends Db {
  private $table = 'users';

  //DB接続
  public function __construct($dbh = null){
      parent::__construct($dbh);
  }

  //登録 insert
  public function add() {
    $sql = "INSERT INTO ".$this->table."(id,name,password,mail,created_at) VALUES (:id,:name,:password,:mail,:created_at)";
    $sth = $this->dbh->prepare($sql);
    $params = array(
      ":id" => null,
      ":name" => $_POST["name"],
      ":password" => $_POST["password"],
      ":mail" => $_POST["mail"],
      ":created_at" => date('Y-m-d H:i:s')
    );
    $sth->execute($params);
  }
}