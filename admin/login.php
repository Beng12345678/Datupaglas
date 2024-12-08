<?php 
  require ('../config.php');
  // Check if form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($username) || empty($password)) {
      echo 'Please fill in all fields';
    } else {
      // Authenticate user
      $db = new DBConnection;
      $conn = $db->getConnection();
      $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        // User is authenticated, redirect to index.php
        $_SESSION['userdata'] = mysqli_fetch_assoc($result);
        redirect('admin/index.php');
      } else {
        echo 'Invalid username or password';
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" style="height: auto;">
  <?php require '../inc/header.php'; ?>
  <body class="hold-transition">
  <script>start_loader()</script>
  <style>
    html, body {
      height: calc(100%) !important;
      width: calc(100%) !important;
    }
    body {
      background-image: url("<?php echo base_url ?>uploads/Flag_of_Datu_Paglas,_Maguindanao.png");
      background-size: cover;
      background-repeat: no-repeat;
    }
    .brand-logo {
      height: 150px;
      width: 150px;
      object-fit: scale-down;
      object-position: center;
      border-radius: 100%;
    }
  </style>
  <body class="hold-transition ">
  <script>
    start_loader()
  </script>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url ?>uploads/Seal_of_Datu_Paglas.png" alt="logo">
              </div>
              <h4>Login</h4>
              <form id="login-frm" action="" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="<?php echo base_url ?>template/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url ?>template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url ?>template/js/off-canvas.js"></script>
  <script src="<?php echo base_url ?>template/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url ?>template/js/template.js"></script>
  <script src="<?php echo base_url ?>template/js/settings.js"></script>
  <script src="<?php echo base_url ?>template/js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>
