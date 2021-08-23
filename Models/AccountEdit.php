<?php
require_once(__DIR__ . '/Db.php');

class AccountEdit extends Db{
  private $table = 'users';

  //DB接続
  public function __construct($dbh = null){
      parent::__construct($dbh);
  }

  //編集 update
      public function edit() {
      $sql = "UPDATE ".$this->table." SET name = :name, password = :password, mail = :mail,updated_at = :updated_at WHERE id = :id";
      $stmt = $this->dbh->prepare($sql);
      $params = array(
        ':id'=>$_POST['id'],
        ':name'=>$_POST['name'],
        ':mail'=>$_POST['mail'],
        ':password'=>$_POST['password'],
        ':updated_at'=>date('Y-m-d H:i:s')
      );
      //クエリの設定
      // $stmt -> bindValue(':id' , $_POST['id'], PDO::PARAM_INT);
      // $stmt -> bindValue(':name' , $_POST['name']);
      // $stmt -> bindValue(':mail' , $_POST['mail']);
      // $stmt -> bindValue(':password' , $_POST['password']);
      // $stmt -> bindValue(':updated_at' , date('Y-m-d H:i:s'));

      $stmt->execute($params);
      // $count = $stmt -> rowCount();
      // print_r($this->dbh->errorInfo());
      // error_log(print_r($count, true));
    }
  }