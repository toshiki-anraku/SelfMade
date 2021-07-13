    function validation() {
      if (document.form.name.value == "") {
        alert("氏名を入力してください");
        return false; // 送信を中止
      }
      if(document.form.name.value.length > 10){
        alert("氏名は10文字以内で入力してください");
        return false; // 送信を中止
      }
      if (document.form.kana.value == "") {
        alert("フリガナを入力してください");
        return false; // 送信を中止
      }
      if (document.form.kana.value.length > 10) {
        alert("フリガナは10文字以内で入力してください");
        return false; // 送信を中止
      }
      if (!document.form.tel.value.match(/^[0-9]+$/)){
        alert("電話番号を入力してください");
        return false; // 送信を中止
      }
      if (document.form.email.value == "") {
        alert("メールアドレスを入力してください");
        return false; // 送信を中止
      }
      if (!document.form.email.value.match(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/)){
        alert("メールアドレスを入力してください");
        return false; // 送信を中止
      }
      if (document.form.body.value == "") {
        alert("お問い合わせ内容を入力してください");
        return false; // 送信を中止
      }
      // if (window.confirm('送信してよろしいですか？')) { // 確認ダイアログを表示
      //   return true; // 「OK」時は送信を実行
      // } else { // 「キャンセル」時の処理
      //   return false; // 送信を中止
      // }
    }
