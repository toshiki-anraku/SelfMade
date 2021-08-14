<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/star-rating.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/textarea-note.css">
</head>
<body>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#details_edit">
    Edit
  </button>

  <!-- Modal -->
  <div class="modal fade" id="details_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title container" id="exampleModalLabel">
            <div class="row">
              <div class="col-4">
                <input type="text" value="持ち物名称" name="name" size="10" maxlength="20">
              </div>

              <div class="dropdown col-4">
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  (ジャンル)
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><button class="dropdown-item" value="項目1">項目1</button></li>
                <li><button class="dropdown-item" value="項目2">項目2</button></li>
                <li><button class="dropdown-item" value="項目3">項目3</button></li>
                </ul>
              </div>

              <div class="col">
                <a href="#"><button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#blog_Edit"><i class="fas fa-cog"></i>
                    OK
                  </button></a>
              </div>
            </div>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container">

          <div class="col">
            <p>重要度</p>
          </div>
          <div class="rating col">
            <input class="rating__input hidden--visually" type="radio" id="5-star" name="rating" value="5" required />
            <label class="rating__label" for="5-star" title="星5つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星5つ</span></label>
            <input class="rating__input hidden--visually" type="radio" id="4-star" name="rating" value="4" />
            <label class="rating__label" for="4-star" title="星4つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星4つ</span></label>
            <input class="rating__input hidden--visually" type="radio" id="3-star" name="rating" value="3" />
            <label class="rating__label" for="3-star" title="星3つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星3つ/span></label>
            <input class="rating__input hidden--visually" type="radio" id="2-star" name="rating" value="2" />
            <label class="rating__label" for="2-star" title="星2つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星2つ</span></label>
            <input class="rating__input hidden--visually" type="radio" id="1-star" name="rating" value="1" />
            <label class="rating__label" for="1-star" title="星1つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星1つ</span></label>
          </div>

          <div class="col">
            <p>Memo</p>
          </div>
          <div class="col">
            <textarea class="note" name="" id="" cols="50" rows="10"></textarea>
          </div>

        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>
  <script src="../../../public/js/jquery-3.5.1.js" type="text/javascript"></script>
  <script src="../../../public/js/popper.min.js"></script>
  <script src="../../../public/js/bootstrap.min.js"></script>
  <script src="../../../public/js/dropdown-rename.js"></script>
</body>
</html>