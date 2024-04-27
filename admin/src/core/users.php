<div class="container-fluid px-4">
  <h1 class="mt-4 fs-1">Users</h1>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">
    <i class="fa-solid fa-plus"></i>
    Add Users
  </button>

  <div class="my-3">
    <div class="card mb-4">
      <div class="card-body">
        <table id="users">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

                switch ($row["role"]) {
                  case '0':
                    $role = "Viewer";
                    break;
                  case '9':
                    $role = "Editor";
                    break;
                  case '10':
                    $role = "Administrator";
                    break;
                }
            ?>
                <tr>
                  <td><?= $row["firstname"] . " " . $row["lastname"] ?></td>
                  <td><?= $row["email"] ?></td>
                  <td><?= $role ?></td>
                  <td>
                    <div class="tw-flex tw-justify-center">
                      <button type="button" class="btn btn-transparent">
                        <i class="fa-solid fa-pencil text-secondary text-sm"></i>
                      </button>
                      <button type="button" class="btn btn-transparent" onclick="confirmDelete(<?= $row['id'] ?>)">
                        <i class="fa-solid fa-trash-can text-danger text-sm"></i>
                      </button>
                    </div>
                  </td>
                </tr>
            <?php }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="form">
          <div class="modal-body">
            <div class="alert alert-danger d-none" id="error_msg" role="alert">
              A simple danger alert—check it out!
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <div class="row">
                <div class="col">
                  <input type="text" name="firstname" class="form-control" placeholder="First name" aria-label="First name" required>
                </div>
                <div class="col">
                  <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name" required>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="email" aria-label="email" placeholder='example@moralcenter.or.th' required>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select class="form-select" id="role" name="role" aria-label="Default select example" required>
                <option value="0">Viewer</option>
                <option value="9">Editor</option>
                <option value="10">Administrator</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder='Password' required>
            </div>
            <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder='Confirm Password' required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script>
  let request;

  $("#form").submit(function(e) {
    // Prevent default posting of form - put here to work in case of errors
    e.preventDefault();

    if (request) {
      request.abort();
    }

    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);
    $('#submit').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span>')

    $.ajax({
      url: "actions.php?add=user",
      type: "post",
      data: serializedData
    }).fail((jqXHR, status, res) => {
      errorDisplay(jqXHR.responseJSON.msg, true);
    }).done((res, status, jqXHR) => {
      window.location.reload();
    }).always(() => {
      $('#submit').html('Add')
      $inputs.prop("disabled", false);
    });
  });

  function errorDisplay(msg, show) {
    error_msg.innerHTML = msg

    if (show) {
      error_msg.classList.remove("d-none");
      error_msg.classList.add("d-block");
    } else {
      error_msg.classList.remove("d-block");
      error_msg.classList.add("d-none");
    }
  }

  function confirmDelete(id) {
    if (confirm('Are you sure you want to delete item?')) {
      //Make ajax call
      $.ajax({
        url: "actions.php?delete=user",
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

  window.addEventListener('DOMContentLoaded', event => {
    const usersTable = document.getElementById('users');
    if (usersTable) {
      new simpleDatatables.DataTable(usersTable);
    }
  });
</script>