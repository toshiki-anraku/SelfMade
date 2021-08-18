<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#bulk_delete">
  Edit
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
                選択した持ち物の情報を更新します
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </form>
    </div>
  </div>
</div>