<div class="container-fluid px-4">
  <h1 class="mt-4">Speakers</h1>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSpeaker">
    <i class="fa-solid fa-plus"></i>
    Add Speakers
  </button>

  <div class="my-3">
    <div class="gallery">
      <ul class="reorder-gallery m-0 p-0 d-grid gap-3" style="overflow-x: hidden;">
        <?php

        $query = "SELECT * FROM lecturers";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <li id="<?php echo $row['id']; ?>" class="ui-sortable-handle card p-3" style="cursor: grab;">
              <div>
                <div class="row align-items-center justify-content-between w-100">
                  <div class="row align-items-center">
                    <img style="max-height: 8rem; width: auto;" src="<?= $row["img"] ?>" alt="" class="col-3">
                    <div class="col">
                      <h2 class="fs-4"><?= $row["name"] ?></h2>
                      <h3 class="fs-6 fw-bold"><?= $row["role"] ?></h3>
                      <span class="fs-6 d-block">Subtitle:
                        <?php

                        if ($row["subtitle"] != "")
                          echo $row["subtitle"];
                        else echo "-";

                        ?>
                      </span>
                      <span class="fs-6 d-block">History:
                        <?php

                        if ($row["history"] != "")
                          echo "<a target='_blank' href=" .  $row["history"] . ">See Content</a>";
                        else echo "-";

                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

            </li>
          <?php
          }
        } else {
          ?>
          <span>Not Found</span>
        <?php } ?>
      </ul>
    </div>
  </div>

  <div class="modal fade" id="addSpeaker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Speakers</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="actions.php?add=speaker" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder='John Doe' required>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <input type="text" class="form-control" name="role" id="role" placeholder='Employee' required>
            </div>
            <div class="mb-3">
              <label for="subtitle" class="form-label">Subtitle</label>
              <input type="text" class="form-control" name="sub" id="subtitle" placeholder='Subtitle'>
            </div>
            <div class="mb-3">
              <label for="imgFile" class="form-label">Image</label>
              <input class="form-control" type="file" name="img" id="imgFile" required>
            </div>
            <div class="mb-3">
              <label for="history" class="form-label">History</label>
              <input class="form-control" type="file" name="history" id="history">
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
    // $.ajax({
    //   type: "GET",
    //   url: "actions.php?reorder=ytvid",
    //   data: order_string,
    //   cache: false,
    //   success: function(data) {}
    // });
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