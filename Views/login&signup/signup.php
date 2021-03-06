<?php
  require_once('../../Controllers/SignupController.php');
  //オブジェクト生成
  $signup = new SignupController();

  if($_POST){
    $signup->add();
    $_SESSION['User'] = $_POST;
    header('Location: /php_base/07_SelfMade/Views/mypage/mypage.php');
    exit;
    }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-Signup</title>
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
              <h1>Signup</h1>
            </div>
            <!-- col-1 -->
          </div>
          <!-- row -->
          <form class="m-5 p-5" name="form" action="" method="POST">
            <div class=" row mb-4">
              <label for="inputNickname3" class="col-sm-2 col-form-label">Nickname</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNickname3" name="name" value="">
              </div>
            </div>
            <div class="row mb-4">
              <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="mail" value="">
              </div>
            </div>
            <div class="row mb-4">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password" value="">
              </div>
            </div>
            <div class="mt-5 d-grid mx-auto col-1">
              <button type="submit" class="btn btn-primary">
                Sign in
              </button>
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