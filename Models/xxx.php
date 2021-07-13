<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Contact extends Db{
  private $table = 'contact';

  //DB接続
  public function __construct($dbh = null){
      parent::__construct($dbh);
  }

  //参照 select
  public function findAll():Array {
      $sql = 'SELECT * FROM '.$this->table;
      $sth = $this->dbh->prepare($sql);
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
  }

  //登録 insert
  public function add($arr){
    $sql = "INSERT INTO ".$this->table."(id,name,kana,tel,email,body,created_at) VALUES (:id,:name,:kana,:tel,:email,:body,:created_at)";
    $sth = $this->dbh->prepare($sql);
    $params = array(
      ":id" => null,
      ":name" => $arr["name"],
      ":kana" => $arr["kana"],
      ":tel" => $arr["tel"],
      ":email" => $arr["email"],
      ":body" => $arr["body"],
      ":created_at" => date('Y-m-d H:i:s')
    );
    $sth->execute($params);
  }
}
