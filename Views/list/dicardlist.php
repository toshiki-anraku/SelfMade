<?php
session_start();
require('../../Models/logout.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-dicardlist</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/xx.css">
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
    <main class="container-fluid">
      <article>
        <section>
          <div class="row">

            <div class="col-2 align-self-end" style="margin-top: 7vh;margin-bottom: -10vh;margin-left: 10vh;">
              <a href="/php_base/07_SelfMade/Views/list/wishlist.php">
                <button type="button" class="btn btn-link">
                  <h3>欲しい物</h3>
                </button>
              </a>
            </div>

            <div class="col-5" style="margin-left: -10vh;">
              <h1>捨てた物</h1>
              </button>
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
                      <td width="80%" style="font-size:45px;"><a href="#"><strong><h2>持ち物名称</h2></strong></a></td>
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