<?php
  require_once('../Controllers/IndexController.php');
  //オブジェクト生成
  $index = new IndexController();
  //参照 select
  $params = $index->findAll();

  //ログアウト処理
  if(isset($_GET['logout'])){
    //セッション情報を破棄する
    $_SESSION = array();
    session_destroy();
  }
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-Ranking</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/xx.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php
      if(isset($_SESSION['User'])){
        require('header_member.php');
      }else {
        require('header_nonmember.php');
      }
       ?>
    </header>
    <!-- header -->
    <main class="container-fluid">
      <article>
        <section>
          <div class="row">
            <div class="col-12">
              <h1>Ranking</h1>
            </div>
            <!-- col -->
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-10 bg-light text-dark box">
              <ul class="large">
                <?php foreach($params['users'] as $column): ?>
                <li><a href='/'>
                    <p class="h1"><?php echo $column["name"] ?></p>
                  </a></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <!-- col -->
          </div>
          <!-- row -->
        </section>
        <!-- section -->
      </article>
      <!-- article -->
    </main>
    <!-- main -->
    <footer>
      <?php require('footer.php');?>
    </footer>
    <!-- footer -->
  </div>
  <!-- wrapper -->
  <script src="../public/js/jquery-3.5.1.js" type="text/javascript"></script>
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/xxx.js"></script>
  <!-- js -->
</body>
</html>