<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-6">
          <div class="row g-0 justify-content-center">
            <div class="col-md-6">
              <img src="../../assets/images/loginbg.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6 crd-1">
              <div class="card-body">
                <h5 class="card-title text-center ih5 ">WELCOME </h5>
                <div class="card-text">
                  <form class="row g-3">
                    <div class="col-md-12">
                      <label for="inputUserName" class="form-label crd-1">User Name</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-12">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                  </div>
                    <br>
                  <div class="col-12 btn1">
                      <button type="submit" class="btn  btn-lg btn-primary">Sign in</button>
                    </div>
                  </form>
                  <br>
                  <p class="text-center">Don't have acoout?<a href="register.html"> Register</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>
</html>