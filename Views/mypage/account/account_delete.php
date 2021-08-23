<?php
require_once('../../../Controllers/AccountDeleteController.php');
  //オブジェクト生成
  $accountDelete = new AccountDeleteController();

if($_POST){
  $accountDelete->delete();
  //セッション情報を破棄する
  $_SESSION = array();
  session_destroy();
}
//ログアウト処理
  require('../../../Models/logout.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-AccountDelete</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../../public/css//bootstrap.min.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php
      if(isset($_SESSION['User'])){
        require('../../header_member.php');
      }else {
        require('../../header_nonmember.php');
      }
       ?>
      <main class="container">
        <article>
          <section>
            <div class="row pt-5">
              <div class="col-3 pt-5 mt-5 mx-5">
                <h1>AccountDelete</h1>
              </div>
              <!-- col-1 -->
            </div>
            <!-- row -->
            <form action="" method="post" class="m-5 p-5" onsubmit="return accountDelete()">
              <div class="row mb-4">
                <p class="fw-bold">
                アカウントを削除します。一度削除すると復元する事は出来ません。<br>
                本当に削除してしまって大丈夫ですか。
              </p>
              </div>
              <div class="row">
                <div class="col">
                  <input type="hidden" name="id" value="<?= $_SESSION['User']['id'] ?>">
                  <a class="btn btn-secondary" href="/php_base/07_SelfMade/Views/mypage/account/account_edit.php" role="button">Cancel</a>
                  <!-- <a type="submit" class="btn btn-primary" href="/php_base/07_SelfMade/Views/index.php" role="button">OK</a> -->
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button> -->
                  <button type="submit" class="btn btn-primary">OK</button>
                </div>
              </div>
            </form>
          </section>
          <!-- section -->
        </article>
        <!-- article -->
      </main>
      <!-- main container-fluid -->
      <footer>
        <?php require('../../footer.php');?>
      </footer>
      <!-- footer -->
  </div>
  <!-- wrapper -->
  <script src=" ../../../public/js/jquery-3.5.1.js" type="text/javascript">
  </script>
  <script src="../../../public/js/bootstrap.min.js"></script>
  <!-- <script src="../../../public/js/xxx.js"></script> -->
  <script>
  function accountDelete() {
    if (window.confirm('本当にアカウントを削除しますか')) {
      return true;
    } else {
      return false;
    }
  }
  </script>
  <!-- js -->
</body>
</html>
</html>