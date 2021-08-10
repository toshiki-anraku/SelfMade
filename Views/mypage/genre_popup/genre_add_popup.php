<!-- Button trigger modal -->

<a href="#">
  <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#genre_add">
    +
  </button>
</a>

<!-- Modal -->
<div class="modal fade" id="genre_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">新しいジャンルを追加します</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3 text-start">
            <label for="exampleInputURL" class="form-label">ジャンル名</label>
            <input type="text" class="form-control" id="exampleInputURL">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </form>

      <div class="modal-content">
        <!--Your modal content goes here-->
      </div>
    </div>
  </div>