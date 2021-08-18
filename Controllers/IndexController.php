<?php
session_start();
require_once('../Models/Index.php');

class IndexController{
  private $Index; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->Index = new Index();
  }

  //参照 select
  public function findAll(){
    $users = $this->Index->findAll();
    $params = [
      'users' => $users
    ];
    return $params;
  }

}