<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa PHPSelfMade mypage</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../public/css//bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../public/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/slick-add.css">
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
      <?php require('../header_nonmember.php'); ?>
      <!-- <?php require('../header_member.php'); ?> -->
    </header>
    <!-- header -->
    <main>
      <article>
        <section>
          <div class="container">
            <div class="row my-5 d-flex align-items-center">
              <div class="col-3 fs-1 text-end align-self-end">
                ユーザネーム
              </div>
              <div class=" col-1 text-start">
                <a href="#"><button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#blog_Edit"><i class="fas fa-cog"></i>
                    Edit
                  </button></a>
              </div>
              <div class="col-2 fs-3 text-end">
                総所持数○個
              </div>
              <div class="col-1 text-start">
                <button type=" button" class="btn btn-link align-bottom" data-bs-toggle="modal" data-bs-target="#blog_add">
                  +
                </button>
              </div>
              <div class="col-2 offset-3 text-end">
                <a href="#"><button type="button" class="btn btn-outline-secondary btn-sm " data-bs-toggle="modal" data-bs-target="#blog_Edit">
                    ジャンル管理
                  </button></a>
              </div>
            </div>
          </div>
          <div class="container-fluid bg-light" style="height:65vh;">
            <div class="row" style="height: 65vh;">
              <div class="col slider bg-dark" style="height: 65vh;">
                <?php
                  for ($count = 1; $count < 20; $count++) {
                    echo '
                    <div class="slider_item bg-dark border">
                      <div class="text-left text-light p-3" style="height: 65vh;">'.$count.'</div>
                    </div>';
                  }
                  ?>
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
  <script src="../../public/js/bootstrap.min.js"></script>
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
  <!-- js -->
</body>
</html>