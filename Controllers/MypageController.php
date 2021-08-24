<?php
session_start();
require_once('/Applications/MAMP/htdocs/php_base/07_SelfMade/Models/Mypage.php');

class MypageController{
  private $Mypage; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->Mypage = new Mypage();
  }

  //参照 select (table_items)
  public function findAll_items(){
    $item = $this->Mypage->findAll_items();
    $params = [
      'item' => $item
    ];
    return $params;
  }

  //ジャンルに合わせて持ち物を参照
  public function findAll_myitems($now_genre_name){
    $myitem = $this->Mypage->findAll_myitems($now_genre_name);
    $params = [
      'myitem' => $myitem
    ];
    return $params;
  }

  //参照 select (table_genres)
  public function findAll_genres(){
    $genre = $this->Mypage->findAll_genres();
    $params = [
      'genre' => $genre
    ];
    return $params;
  }

  //参照 select (table_mygenres)
  public function findAll_mygenres(){
    $mygenre = $this->Mypage->findAll_mygenres();
    $params = [
      'mygenre' => $mygenre
    ];
    return $params;
  }

  //持ち物数カウント
  public function countAll(){
    $count = $this->Mypage->countAll();
    return $count;
  }

  //持ち物追加 add
  public function add(){
    $this->Mypage->add();
  }
}