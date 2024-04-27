<div class="container-fluid px-4">
  <h1 class="mt-4">Roles</h1>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">
    <i class="fa-solid fa-plus"></i>
    Add Users
  </button>

  <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="actions.php?add=user" method="post" enctype="multipart/form-data">
          <div class="modal-body">
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
              <select class="form-select" aria-label="Default select example" required>
                <option selected>-- Select Role --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="subtitle" class="form-label">Password</label>
              <input type="text" class="form-control" name="sub" id="subtitle" placeholder='Password'>
            </div>
            <div class="mb-3">
              <label for="subtitle" class="form-label">Confirm Password</label>
              <input type="text" class="form-control" name="sub" id="subtitle" placeholder='Confirm Password'>
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