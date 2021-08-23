<?php
require_once(__DIR__ . '/Db.php');

class Login extends Db{
  private $table = 'users';

  //DB接続
  public function __construct($dbh = null){
      parent::__construct($dbh);
  }

  //ログイン
  public function login(){
    $sql = 'SELECT * FROM '.$this->table.' WHERE mail = :mail AND password = :password';
    $stmt = $this->dbh->prepare($sql);
    $params = array(':mail'=>$_POST['mail'],':password'=>$_POST['password']);
    $stmt->execute($params);
    $result = $stmt->fetch();
    return $result;
  }
}