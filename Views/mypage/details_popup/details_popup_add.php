<!-- Button trigger modal -->
<button type="button" class="btn btn-link btn-sm" data-bs-toggle="modal" data-bs-target="#details">
  ＋
</button>

<!-- Modal -->
<form action="" method="post">
  <div class="modal fade" id="details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title container" id="exampleModalLabel">
            <div class="row">
              <div class="col-5">
                <input type="hidden" name="user_id" value="<?= $_SESSION['User']['id'] ?>">
                <input type="hidden" name="status" value="2">
                <input type="text" value="持ち物名称" name="item_name" size="15" maxlength="20">
              </div>
              <div class="dropdown col-4">
                <select name="genre" class="form-select" aria-label="Default select example">
                  <option selected>ジャンル</option>
                  <?php foreach($params_genres['genre'] as $column): ?>
                    <option value="<?php echo $column["genre_name"] ?>"><?php echo $column["genre_name"] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-secondary btn-sm" >
                    OK
                </button>
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
            <textarea class="note" name="memo" id="" cols="50" rows="10"></textarea>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>