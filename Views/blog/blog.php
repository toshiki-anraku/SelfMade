<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-Blog</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/xx.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <!-- <?php require('../header_nonmember.php'); ?> -->
      <?php require('../header_member.php'); ?>
    </header>
    <!-- header -->
    <main class="container-fluid">
      <article>
        <section>
          <div class="row">
            <div class="col-3">
              <div class="row">
                <div class="col-1">
                  <h1>Blog</h1>
                </div>
                <div class="col-1 align-self-end plus">
                  <?php require('./blog_popup_add.php'); ?>
                </div>
                <!-- col-1 -->
              </div>
              <!-- row -->
            </div>
            <!-- col-3 -->
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-10 bg-light text-dark box">
              <table width="100%" style="margin-left:3em;">
                <tbody>
                  <?php
                  for ($count = 0; $count < 20; $count++) {
                    echo '<tr>
                      <td width="80%" style="font-size:45px;"><a href="#"><strong><h2>ブログタイトル○○の持ち物ランキング100選</h2></strong></a></td>
                      <td width="10%" align="right">',require('./blog_popup_edit.php'),'</td>
                      <td width="10%">',require('./blog_popup_delete.php'),'</td>
                      </tr>';
                  }
                  ?>
                </tbody>
                <!-- tbody -->
              </table>
              <!-- table -->
            </div>
            <!-- box -->
          </div>
          <!-- row -->
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
  <script src="../../public/js/jquery-3.5.1.js" type="text/javascript"></script>
  <script src="../../public/js/bootstrap.min.js"></script>
  <script src="../../public/js/xxx.js"></script>
  <!-- js -->
</body>
</html>