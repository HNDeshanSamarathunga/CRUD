<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANNEL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 offset-2">
                <h1 class="text-center m-5 p-3">ADMIN PANEL</h1>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Add Student</button>
              
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Register Number</th>
                              <th scope="col">Full Name</th>
                              <th scope="col">Update</th>
                              <th scope="col">Delete</th>
                            </tr>
                          </thead>
                          <tbody class="table-group-divider">
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark Otto mdo mdo mdo mdo mdo mdo mdo mdo </td>
                              <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">UPDATE</button></td>
                              <td><button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal1">DELETE</button></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">UPDATE</button></td>
                              <td><button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleModal1" >DELETE</button></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Jacob</td>
                              <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">UPDATE</button></td>
                              <td><button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal1">DELETE</button></td>
                            </tr>
                          </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

<!--Update Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fulid p-5">
          <div class="row">
              <!-- <div class="col-12 col-md-8 col-sm-8 offset-2"> -->
                  <h2 class="text-center mb-5">UPDATE DETAILS</h2>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--Update Modal End -->

<!-- Delete Model -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are Your Sure
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delet Details</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Model END -->


<!-- rejister model -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fulid p-5">
          <div class="row">
              <!-- <div class="col-12 col-md-8 col-sm-8 offset-2"> -->
                  <h2 class="text-center mb-5">REGISTER STUDENT</h2>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Student</button>
      </div>
    </div>
  </div>
</div>
<!-- register model end -->

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>