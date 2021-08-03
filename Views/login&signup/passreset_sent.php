<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa PHPSelfMade PasswordReset_sent</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php require('../header_nonmember.php'); ?>
      <!-- <?php require('../header_member.php'); ?> -->
    </header>
    <!-- header -->
    <main class="container">
      <article>
        <section>
          <!-- <div class="row "> -->
          <p class="mt-5 pt-5 fs-4 text-center align-middle">
                パスワードリセット用URLをメールで送信致しました。</br>
                ご確認の程、お願い致します。
              </p>
          <!-- </div> -->
        </section>
        <!-- section -->
      </article>
      <!-- article -->
    </main>
    <!-- main container-fluid -->
    <footer>
      <?php require('../footer.php');?>
    </footer>
    <!-- footer -->
  </div>
  <!-- wrapper -->
  <script src=" ../../public/js/jquery-3.5.1.js" type="text/javascript">
  </script>
  <script src="../../public/js/bootstrap.min.js"></script>
  <script src="../../public/js/xxx.js"></script>
  <!-- js -->
</body>
</html>