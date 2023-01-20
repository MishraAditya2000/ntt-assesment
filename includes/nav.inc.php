<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">NTT-Laundry Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./laundry-request.php">Laundry Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php#pricing">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">My Profile</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="./view-profile.php">View Profile</a>
            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileEditModal">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Log Out</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="profileEditModal" tabindex="-1" aria-labelledby="profileEditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="profileEditModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <fieldset>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                    placeholder="Enter Name">

                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label mt-4">Mobile No:</label>
              <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="955600047">

            </div>


          </fieldset>


      </div>
    </div>



    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </form>
  </div>
</div>
</div>