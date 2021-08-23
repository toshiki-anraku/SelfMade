<?php
session_start();
require_once('/Applications/MAMP/htdocs/php_base/07_SelfMade/Models/Signup.php');

class SignupController{
  private $Signup; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->Signup = new Signup();
  }

  //登録 insert
  public function add(){
    $this->Signup->add();
  }

}