<?php
session_start();
require_once('/Applications/MAMP/htdocs/php_base/07_SelfMade/Models/AccountDelete.php');

class AccountDeleteController{
  private $AccountDelete; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->AccountDelete = new AccountDelete();
  }

  //登録 insert
  public function delete(){
    $this->AccountDelete->delete();
  }

}