<?php
session_start();
require('../../Models/logout.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-mypage</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../public/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/slick-add.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/star-rating.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/textarea-note.css">
  <style type="text/css">
  span.b {
    font-size: larger;
  }
  </style>
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
    <main>
      <article>
        <section>
          <div class="container">
            <div class="row my-5 d-flex align-items-center">
              <div class="col-3 fs-1 text-end align-self-end">
                <?= $_SESSION['User']['name']?>
              </div>
              <div class=" col-1 text-start">
                <a href="/php_base/07_SelfMade/Views/mypage/account/account_edit.php"><button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#blog_Edit"><i class="fas fa-cog"></i>
                    Edit
                  </button></a>
              </div>
              <div class="col-2 fs-3 text-end">
                総所持数○個
              </div>
              <div class="col-1 text-start">
                <!-- <button type=" button" class="btn btn-link align-bottom" data-bs-toggle="modal" data-bs-target="#blog_add">
                  +
                </button> -->
                <?php include(__DIR__ . '/details_popup/details_popup_add.php');?>
              </div>
              <div class="col-2 offset-3 text-end">
                <?php require('./genre_popup/genre_management_popup.php'); ?>
              </div>
            </div>
          </div>
          <div class="container-fluid bg-light" style="height:65vh;">
            <div class="row" style="height: 65vh;">
              <div class="col slider bg-dark" style="height: 65vh;">

                <?php for ($count = 1; $count < 20; $count++) :?>
                <div class="slider_item bg-dark border">
                  <div class="text-left text-light p-3" style="height: 65vh;">
                    <u>
                      <strong>
                        ジャンル名<?=$count?>
                      </strong>
                    </u>

                    <div class="p-3">
                      <tr>
                        <th scope="row">
                          <?=$count?>
                        </th>
                        <td>持ち物名</td>
                        <td><button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#details">
                            詳細
                          </button></td>
                      </tr>
                    </div>
                  </div>
                </div>
                <?php endfor; ?>

              </div>
            </div>
          </div>
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
  <script src="../../public/js/popper.min.js"></script>
  <script src="../../public/js/bootstrap.min.js"></script>
  <script src="../../public/js/dropdown-rename.js"></script>
  <script src="../../public/js/xxx.js"></script>
  <script src="../../public/js/slick.min.js"></script>
  <script>
  $(function() {
    $('.slider').slick({
      arrows: true,
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1
    });
  });
  </script>
  <script>

  </script>
  <!-- js -->
</body>
</html>