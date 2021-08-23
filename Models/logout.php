<?php
//ログアウト処理
if(isset($_GET['logout'])){
//セッション情報を破棄する
$_SESSION = array();
session_destroy();
}

//ログイン画面を経由しているか確認する
if(!isset($_SESSION['User'])){
header('Location: /php_base/07_SelfMade/Views/index.php');
exit;
}