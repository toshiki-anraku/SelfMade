<?php
require_once(__DIR__ . '/Db.php');

class AccountDelete extends Db{
  private $table = 'users';

  //DB接続
  public function __construct($dbh = null){
      parent::__construct($dbh);
  }

  //削除 delete
      public function delete() {
      $sql = "DELETE FROM ".$this->table." WHERE id = :id";
      $stmt = $this->dbh->prepare($sql);
      $params = array(
        ':id'=>$_POST['id']
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