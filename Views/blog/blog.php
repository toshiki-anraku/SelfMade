<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa PHPSelfMade Blog</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/xx.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <?php require('../header_nonmember.php'); ?>
      <!-- <?php require('../header_member.php'); ?> -->
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
                <div class="col-1 align-self-end plus"><a href="" class="lead">＋</a></div>
              </div>
            </div>

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
                      <td width="10%" align="right"><a class="btn btn-outline-secondary btn-sm" href="#" role="button">Edit</a></td>
                      <td width="10%"><a  class="btn btn-outline-secondary btn-sm" href="#" role="button">Delete</a></td>
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