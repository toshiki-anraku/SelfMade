<?php
require_once(__DIR__ . '/Db.php');

class Mypage extends Db{
  private $table_items = 'items';
  private $table_genres = 'genres';

  //DB接続
  public function __construct($dbh = null){
      parent::__construct($dbh);
  }

  //参照 select (table_items)
  public function findAll_items():Array {
      $sql = 'SELECT * FROM '.$this->table_items." WHERE `user_id` = :user_id";
      $sth = $this->dbh->prepare($sql);
      $params = array(
          ':user_id' => $_SESSION['User']['id'],
        );
      $sth->execute($params);
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
  }

  //ジャンルに合わせて持ち物を参照
  public function findAll_myitems($now_genre_name):Array {
      $sql="SELECT id FROM ".$this->table_genres." WHERE `genre_name` = :genre_name";
      $sth = $this->dbh->prepare($sql);
      $params = array(
        ":genre_name" => $now_genre_name,
      );
      $sth->execute($params);
      $genre_id = $sth->fetchColumn();

      $sql = 'SELECT * FROM '.$this->table_items." WHERE `user_id` = :user_id && `genre_id` = :genre_id";
      $sth = $this->dbh->prepare($sql);
      $params = array(
          ':user_id' => $_SESSION['User']['id'],
          ":genre_id" => $genre_id,
        );
      $sth->execute($params);
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
  }

  //参照 select (table_genres)
  public function findAll_genres():Array {
      $sql = 'SELECT * FROM '.$this->table_genres;
      $sth = $this->dbh->prepare($sql);
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
  }

  //参照 select (table_mygenres)
  public function findAll_mygenres():Array {
      $sql = 'SELECT DISTINCT `genre_name` FROM '.$this->table_items.' RIGHT OUTER JOIN '.$this->table_genres.' ON '.$this->table_items.'.`genre_id` = '.$this->table_genres.'.`id` WHERE `user_id` = :user_id';
      $sth = $this->dbh->prepare($sql);
      $params = array(
          ':user_id' => $_SESSION['User']['id'],
        );
      $sth->execute($params);
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
      error_log(print_r($result,true));
  }

  //持ち物数カウント
  public function countAll() {
        $sql = "SELECT count(*) FROM ".$this->table_items." WHERE `user_id` = :user_id";
        $sth = $this->dbh->prepare($sql);
        $params = array(
          ':user_id' => $_SESSION['User']['id'],
        );
        $sth->execute($params);
        $count = $sth->fetchColumn();
        return $count;
    }

  //登録 insert
  public function add(){
    $sql="SELECT id FROM ".$this->table_genres." WHERE `genre_name` = :genre";
    $sth = $this->dbh->prepare($sql);
    $params = array(
      ":genre" => $_POST["genre"],
    );
    $sth->execute($params);
    $genre_id = $sth->fetchColumn();

    $sql = "INSERT INTO ".$this->table_items."(id,user_id,genre_id,item_name,status,rating,memo,created_at) VALUES (:id,:user_id,:genre_id,:item_name,:status,:rating,:memo,:created_at)";
    $sth = $this->dbh->prepare($sql);
    $params = array(
      ":id" => null,
      ":user_id" => $_POST["user_id"],
      ":genre_id" => $genre_id,
      ":item_name" => $_POST["item_name"],
      ":status" => $_POST["status"],
      ":rating" => $_POST["rating"],
      ":memo" => $_POST["memo"],
      ":created_at" => date('Y-m-d H:i:s')
    );
    $sth->execute($params);
  }
}