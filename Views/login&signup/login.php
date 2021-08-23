<?php
  require_once('../../Controllers/LoginController.php');
  //オブジェクト生成
  $login = new LoginController();

  if($_POST){
    $result = $login->login();
    if(!empty($result)){
      $_SESSION['User'] = $result;
      error_log(print_r($_SESSION['User'], true));
      header('Location: /php_base/07_SelfMade/Views/mypage/mypage.php');
      exit;
    }else{
      $massage = "ログインできませんでした";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-Login</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php
      if(isset($_SESSION['User'])){
        require('../header_member.php');
      }else {
        require('../header_nonmember.php');
      }
       ?>
    </header>
    <!-- header -->
    <main class="container">
      <article>
        <section>
          <div class="row">
            <div class="col-1 mt-5 mx-5">
              <h1>Login</h1>
            </div>
            <!-- col-1 -->
          </div>
          <!-- row -->
          <form class="m-5 p-5" name="form" action="" method="POST">
            <?php if (isset($massage)) {
            echo "<p class = 'error'>".$massage."</p>";
            }?>
            <div class="row mb-4">
              <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="mail">
              </div>
            </div>
            <div class="row mb-4">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password">
              </div>
            </div>

            <div class="mt-5 pt-5 d-grid mx-auto col-2">
              <a href="/php_base/07_SelfMade/Views/login&signup/passreset_request.php" class="link-primary">パスワードを忘れた方</a>
            </div>
            <div class="mt-4 d-grid mx-auto col-1">
              <button type="submit" class="btn btn-primary"> Login</button>
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