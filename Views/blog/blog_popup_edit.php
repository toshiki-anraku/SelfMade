<!-- Button trigger modal -->

<a href="#"><button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#blog_Edit">
    Edit
  </button></a>

<!-- Modal -->
<div class="modal fade" id="blog_Edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ブログ編集</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3 text-start">
            <label for="exampleInputURL" class="form-label">URL</label>
            <input type="url" class="form-control" id="exampleInputURL">
          </div>
          <div class="mb-3 text-start">
            <label for="exampleInputTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputTitle">
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