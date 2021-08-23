<?php
session_start();
require_once('/Applications/MAMP/htdocs/php_base/07_SelfMade/Models/AccountEdit.php');

class AccountEditController{
  private $AccountEdit; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->AccountEdit = new AccountEdit();
  }

  //登録 insert
  public function edit(){
    $this->AccountEdit->edit();
  }

}