<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa PHPSelfMade Signup</title>
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
          <div class="row">
            <div class="col-3 mt-5 mx-5">
              <h1>Password Reset</h1>
            </div>
            <!-- col-1 -->
          </div>
          <!-- row -->
          <form class="m-5 p-5">
            <div class="row mb-4">
              <p class="fw-bold">登録中のメールアドレスを入力してください。</p>
            </div>
            <div class="row mb-4">
              <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
              </div>
            </div>

            <div class="mt-5 pt-5 d-grid mx-auto col-2">
              <button type="submit" class="btn btn-primary">Send mail</button>
            </div>
          </form>
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