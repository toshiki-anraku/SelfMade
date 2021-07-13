<?php

class Validation{
  //確認 validation
    public function check(){
        $errmessage = array();
        if (!$_POST["name"]) {
            $errmessage[] = "必須項目を入力してください";
        } elseif (mb_strlen($_POST["name"]) > 10) {
            $errmessage[] = "10文字以内で入力してください";
        }
            $_SESSION["name"] = htmlspecialchars($_POST["name"], ENT_QUOTES);
        if (!$_POST["kana"]) {
            $errmessage[] = "必須項目を入力してください";
        } elseif (mb_strlen($_POST["kana"]) > 10) {
            $errmessage[] = "10文字以内で入力してください";
        }
            $_SESSION["kana"] = htmlspecialchars($_POST["kana"], ENT_QUOTES);
        if (!$_POST["tel"]) {
            $errmessage[] = "必須項目を入力してください";
        } elseif (filter_var($_POST["tel"], FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_OCTAL)) {
            $errmessage[] = "数字を入力してください";
        }
            $_SESSION["tel"] = htmlspecialchars($_POST["tel"], ENT_QUOTES);
        if (!$_POST["email"]) {
            $errmessage[] = "必須項目を入力してください";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errmessage[] = "メールアドレスを入力してください";
        }
            $_SESSION["email"] = htmlspecialchars($_POST["email"], ENT_QUOTES);
        if (!$_POST["body"]) {
            $errmessage[] = "必須項目を入力してください";
        } elseif (mb_strlen($_POST["body"]) > 500) {
            $errmessage[] = "500文字以内で入力してください";
        }
            $_SESSION["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES);
        return $errmessage;
    }
}
