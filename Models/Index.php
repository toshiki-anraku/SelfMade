<?php
require_once(__DIR__ . '/Db.php');

class Index extends Db{
  private $table = 'users';

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
}