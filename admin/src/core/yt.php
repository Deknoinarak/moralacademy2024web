<div class="container-fluid px-4">
  <h1 class="mt-4">YouTube Videos</h1>
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addVideo">
    <i class="fa-solid fa-plus"></i>
    Add Video
  </button>

  <div class="my-3">
    <div class="gallery">
      <ul class="reorder-gallery m-0 p-0 d-grid gap-3" style="overflow-x: hidden;">
        <?php

        $query = "SELECT id, video_id FROM videos ORDER BY level";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row["video_id"] !== '') {
              $title = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=snippet&contentDetails=statistics&id=' . $row['video_id'] . '&key=AIzaSyBFZ1Gx74bICKmvs8_JPug3veXgDJQYS0g'), true)['items'][0]['snippet']['title'];
              $channel = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=snippet&contentDetails=statistics&id=' . $row['video_id'] . '&key=AIzaSyBFZ1Gx74bICKmvs8_JPug3veXgDJQYS0g'), true)['items'][0]['snippet']['channelTitle'];
            }
        ?>
            <li id="<?php echo $row['id']; ?>" class="ui-sortable-handle card" style="cursor: grab;">
              <a href="javascript:void(0);"></a>
              <div>
                <div class="row align-items-center justify-content-between w-100">
                  <div class="d-flex flex-column flex-md-row align-items-center gap-4 col-10">
                    <img src="https://img.youtube.com/vi/<?= $row['video_id'] ?>/mqdefault.jpg" alt="" class="d-block d-md-none w-100 col-3 rounded">
                    <img src="https://img.youtube.com/vi/<?= $row['video_id'] ?>/mqdefault.jpg" alt="" class="d-none d-md-block col-3 rounded-start">
                    <div class="px-2 pb-2 p-md-0">
                      <h5 class="fs-6 fw-bold">
                        <?= $title; ?>
                      </h5>
                      <h6 class="fs-6">
                        <?= $channel; ?>
                      </h6>
                    </div>
                  </div>

                  <div class="col-2 d-flex flex-column flex-md-row justify-content-end gap-3">
                    <button type="button" class="btn btn-transparent" onclick="editYT(<?= $row['id'] ?>)">
                      <i class="fa-solid fa-pencil text-secondary fs-3"></i>
                    </button>
                    <button type="button" class="btn btn-transparent" onclick="confirmDelete(<?= $row['id'] ?>)">
                      <i class="fa-solid fa-trash-can text-danger fs-3"></i>
                    </button>
                    <button type="button" class="d-md-none btn btn-transparent moveup">
                      <i class="fa-solid fa-chevron-up text-dark fs-3"></i>
                    </button>
                    <button type="button" class="d-md-none btn btn-transparent movedown">
                      <i class="fa-solid fa-chevron-down text-dark fs-3"></i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
          <?php
          }
        } else {
          ?>
          Not Found
        <?php
        }
        ?>
      </ul>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="addVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add YouTube Video</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="actions.php?add=ytvid" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">YouTube Video Link/Id</label>
              <input name="ytid" type="text" class="form-control" id="ytvideolink" aria-describedby="ytvideolink" placeholder="https://youtu.be/123456abcDE" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<script>
  $(document).ready(function() {
    $("ul.reorder-gallery").sortable({
      axis: 'y',
      scroll: true,
      containment: "document",
      update: function(event, ui) {
        updateOrder();
      }
    });
  });

  window.onload = updateOrder()

  function updateOrder() {
    var item_order = new Array();
    $('ul.reorder-gallery li').each(function() {
      item_order.push($(this).attr("id"));
    });
    var order_string = 'order=' + item_order;
    $.ajax({
      type: "GET",
      url: "actions.php?reorder=ytvid",
      data: order_string,
      cache: false,
      success: function(data) {}
    });
  }

  function confirmDelete(id) {
    if (confirm('Are you sure you want to delete item?')) {
      //Make ajax call
      $.ajax({
        url: "actions.php?delete=ytvid",
        type: "GET",
        data: {
          id: id
        },
        dataType: "html",
        success: function() {
          alert("It was succesfully deleted!");
          window.location.reload();
        }
      });

    }
  }

  function editYT(id) {
    let newId = prompt("YouTube Link (www.youtube.com/watch?v=)");

    if (newId) {
      $.ajax({
        url: "actions.php?edit=ytvid",
        type: "GET",
        data: {
          id: id,
          newId: newId
        },
        dataType: "html",
        success: function() {
          alert("It was succesfully edited!");
          window.location.reload();
        }
      })
    }
  }

  $(".moveup").on("click", function() {
    var elem = $(this).closest("li");
    elem.prev().before(elem);
    updateOrder()
  });

  $(".movedown").on("click", function() {
    var elem = $(this).closest("li");
    elem.next().after(elem);
    updateOrder()
  });
</script>