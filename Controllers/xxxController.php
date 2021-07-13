<?php
session_start();
require_once(ROOT_PATH .'/Models/ContactEdit.php');

class ContactEditController extends Validation{
  private $ContactEdit; //Contactモデル

  //DB接続
  public function __construct(){
    //モデルオブジェクトの生成
    $this->ContactEdit = new ContactEdit();
  }

  //編集 update
  public function edit($arr){
    $this->ContactEdit->edit($arr);
  }
}
