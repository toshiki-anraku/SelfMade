<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#genre_management">
  ジャンル管理
</button>

<!-- Modal -->
<div class="modal fade" id="genre_management" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title container" id="exampleModalLabel">
            <div class="row d-flex align-items-center">
              <div class="col-5 ">
                ジャンル管理
              </div>
              <div class="col-1">
                <?php include(__DIR__ . '/genre_add_popup.php');?>
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
                <td>ジャンル</td>
                <td>○個</td>
                <td>
                  ',include(__DIR__ . '/genre_edit_popup.php'),'
                </td>
                <td>
                  ',include(__DIR__ . '/genre_delete_popup.php'),'
                </td>
            </tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>

</script>