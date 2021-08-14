<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TeBuRa-AccountEdit</title>
  <!-- title -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/xxx.css">
  <!-- css -->
</head>
<body>
  <div id="wrapper">
    <header>
      <!-- <?php require('../../header_nonmember.php'); ?> -->
      <?php require('../../header_member.php'); ?>
    </header>
    <!-- header -->
    <main class="container">
      <article>
        <section>
          <div class="row">
            <div class="col-1 mt-1 mx-5">
              <h1>AccountEdit</h1>
            </div>
            <!-- col-1 -->
            <div class="col-1 offset-8 align-self-center">
              <a href="/php_base/07_SelfMade/Views/mypage/account/account_delete.php">
                <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#blog_Edit">
                  AccountDelete
                </button>
              </a>
            </div>
          </div>
          <!-- row -->
          <form class="mx-5 px-5">
            <div class=" row my-3">
              <label for="inputNickname3" class="col-sm-2 col-form-label">Nickname</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNickname3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
              </div>
            </div>
            <div class="mt-1 d-grid mx-auto col-1">
              <button type="submit" class="btn btn-primary">OK</button>
            </div>
          </form>
        </section>
        <!-- section -->
      </article>
      <!-- article -->
      <article class="mx-5 px-5">
        <div class="row py-2 mt-4">
          <div class="col-6 offset-1">
            <div class="row">
              <div class="col-2">ItemList</div>
              <div class="dropdown col-2">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  (status)
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><button class="dropdown-item" value="項目1">項目1</button></li>
                  <li><button class="dropdown-item" value="項目2">項目2</button></li>
                  <li><button class="dropdown-item" value="項目3">項目3</button></li>
                </ul>
              </div>
              <div class="dropdown col-2">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  (genre)
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><button class="dropdown-item" value="項目1">項目1</button></li>
                  <li><button class="dropdown-item" value="項目2">項目2</button></li>
                  <li><button class="dropdown-item" value="項目3">項目3</button></li>
                </ul>
              </div>
              <div class="col-1 offset-1">
                <button type="button" class="btn btn-outline-secondary btn-sm">
                  Edit
                </button>
              </div>
              <div class="col-1">

                <?php include(__DIR__ . '/bulk_delete_popup.php');?>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  Delete
                </button> -->
              </div>
            </div>
          </div>

        </div>
        <div class="row mt-2">
          <div class="box col-9 bg-light text-dark">
            <?php
                  for ($count = 0; $count < 20; $count++) {
                    echo '<div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                持ち物名称
              </label>
            </div>';
                  }
                  ?>
          </div>
        </div>
      </article>
    </main>
    <!-- main container-fluid -->
    <footer>
      <?php require('../../footer.php');?>
    </footer>
    <!-- footer -->
  </div>
  <!-- wrapper -->
  <script src="../../../public/js/jquery-3.5.1.js" type="text/javascript">
  </script>
  <script src="../../../public/js/popper.min.js"></script>
  <script src="../../../public/js/bootstrap.min.js"></script>
  <script src="../../../public/js/xxx.js"></script>
  <script src="../../../public/js/dropdown-rename.js"></script>
  <!-- js -->
</body>
</html>