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
      <!-- <?php require('../../header_nonmember.php'); ?> -->
      <?php require('../../header_member.php'); ?>
    </header>
    <!-- header -->
    <main class="container">
      <article>
        <section>
          <div class="row">
            <div class="col-3 mt-5 mx-5">
              <h1>AccountDelete</h1>
            </div>
            <!-- col-1 -->
          </div>
          <!-- row -->
          <form class="m-5 p-5">
            <div class="row mb-4">
              <p class="fw-bold">
                アカウントを削除します。一度削除すると復元する事は出来ません。<br>
                本当に削除してしまって大丈夫ですか。
              </p>
            </div>
            <div class="row">
              <div class="col">
                <a type="submit" class="btn btn-secondary" href="/php_base/07_SelfMade/Views/mypage/account/account_edit.php" role="button">Cancel</a>
                <a type="submit" class="btn btn-primary" href="/php_base/07_SelfMade/Views/index.php" role="button">OK</a>
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">OK</button> -->
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
  <script src="../../../public/js/xxx.js"></script>
  <!-- js -->
</body>
</html>