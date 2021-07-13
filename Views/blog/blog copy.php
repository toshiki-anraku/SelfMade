<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa PHPSelfMade Blog</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/xxx.css">
  <!-- css -->
</head>
<body>
  <div id="container">
    <header>
      <?php require('../header_nonmember.php'); ?>
      <!-- <?php require('../header_member.php'); ?> -->
    </header>
    <!-- header -->
      <main>
        <article>
          <section>
            <h1>Blog</h1>
            <a href=""><h5>＋</h5></a>

            <div class="box">
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
              </table>
            </div>
            <!-- box -->
          </section>
          <!-- section -->
        </article>
        <!-- article -->
      </main>
      <!-- main -->
    <footer>
      <?php require('../footer.php');?>
    </footer>
    <!-- footer -->
  </div>
  <!-- container -->
  <script src="../../public/js/jquery-3.5.1.js" type="text/javascript"></script>
  <script src="../../public/js/bootstrap.js/bootstrap.min.js"></script>
  <script src="../../public/js/xxx.js"></script>
  <!-- js -->
</body>
</html>
