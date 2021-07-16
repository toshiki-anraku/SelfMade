<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa PHPSelfMade Ranking</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/xx.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php require('header_nonmember.php'); ?>
      <!-- <?php require('header_member.php'); ?> -->
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
                    <?php
                      for ($count = 0; $count < 20; $count++) {
                        echo "<li><a href= '/' >ユーザーネーム</a></li>";
                        }
                    ?>
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
