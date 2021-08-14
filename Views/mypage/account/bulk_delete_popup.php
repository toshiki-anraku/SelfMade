<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#bulk_delete">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="bulk_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="">
        <div class="modal-header">
          <h5 class="modal-title container" id="exampleModalLabel">
            <div class="row d-flex align-items-center">
              <div class="col-9">
                選択した持ち物を削除します
              </div>
            </div>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container">
          <table class="table">
            <tbody>
              <?php
                  for ($count = 1; $count < 20; $count++) {
                    echo '<tr>
                <th scope="row">'.$count.'</th>
                <td>持ち物名称</td>
            </tr>';
            }
            ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </form>
    </div>
  </div>
</div>