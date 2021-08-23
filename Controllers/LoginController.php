<?php
session_start();
require_once('/Applications/MAMP/htdocs/php_base/07_SelfMade/Models/Login.php');

class LoginController{
  private $Login; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->Login = new Login();
  }

  //ログイン login
  public function login(){
    $result = $this->Login->login();
    return $result;
  }

}