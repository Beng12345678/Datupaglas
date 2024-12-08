<?php require_once('../../config.php'); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_user'])) {
    $user_lastname = $_POST['user_lastname'];
    $user_firstname = $_POST['user_firstname'];
    $user_middlename = $_POST['user_middlename'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    // Connect to the database
    $db = new DBConnection;
    $conn = $db->getConnection();
  
    // Insert data into the database
    $query = "INSERT INTO user_details (user_lastname, user_firstname, user_middlename, username, password, user_type) VALUES ('$user_lastname', '$user_firstname', '$user_middlename', '$username', '$password', '$user_type')";
    $result = mysqli_query($conn, $query);
  
    if ($result) {
      echo 'User registered successfully!';
    } else {
      echo 'Error registering User: ' . mysqli_error($conn);
    }
  }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../../template/vendors/jquery/css/dataTables.min.css">
  <style>
    .navbar {
  margin-bottom: 0;
}

.container-fluid {
  margin-top: 70;
  padding-top: 5;
}
.hidden {
  display: none;
}
  </style>
  <?php require_once('../../inc/header.php'); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../uploads/Seal_of_Datu_Paglas.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../uploads/Seal_of_Datu_Paglas.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hi, <span class="text-black fw-bold"><?php echo $user['name']; ?></span></h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          
      
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../admin/index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../admin/user/taxpayer_list.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">User Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../admin/user/user_list.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">User Lists</span>
            </a>
          </li><li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Setting</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List of Taxpayer</h4>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaxpayerModal">
                    Add New User
                  </button>
                  <div class="table-responsive">
                    <table id="user_list" class="display nowrap" style="width:100%">
                      <colgroup>
                        <col width="5%">
                        <col width="30%">
                        <col width="30%">
                        <col width="20%">
                        <col width="20%">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Fullname</th>
                          <th>Type of User</th>
                          <th>Username</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $i = 1; // Row counter
                          $qry = $conn->query("SELECT id, CONCAT(user_lastname, ', ', user_firstname, ' ', user_middlename) AS fullname, user_type, username FROM `user_details`");

                          if ($qry === false) {
                            echo "Error: " . $conn->error;
                          } else {
                            while ($row = $qry->fetch_assoc()):
                        ?>
                        <tr>
                          <td><?php echo htmlspecialchars($row['id']) ?></td>
                          <td><?php echo ucwords(htmlspecialchars($row['fullname'])) ?></td>
                          <td><?php echo ucwords(htmlspecialchars($row['user_type'])) ?></td>
                          <td><?php echo ucwords(htmlspecialchars($row['username'])) ?></td>
                          <td align="center">
                        <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          Action
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <!-- View Records -->
                          <a class="dropdown-item" href="../user/view_taxpayer.php?id=<?= htmlspecialchars($row['id']) ?>">
                            <span class="fa fa-eye text-dark"></span> View Records
                          </a>
                          <div class="dropdown-divider"></div>
                            <!-- Edit Record -->
                            <a class="dropdown-item edit_data" href="javascript:void(0)" data-id="<?= htmlspecialchars($row['id']) ?>">
                              <span class="fa fa-edit text-dark"></span> Edit
                            </a>
                            <div class="dropdown-divider"></div>
                              <!-- Delete Record -->
                              <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?= htmlspecialchars($row['id']) ?>" onclick="confirmDelete(<?= htmlspecialchars($row['id']) ?>)">
                                <span class="fa fa-trash text-danger"></span> Delete
                              </a>
                            </div>
                        </td>
                      </tr>
                      <?php
                        endwhile;
                        $qry->close();
                        }
                      ?>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- main-panel ends -->
  </div>
  <div class="modal fade" id="addTaxpayerModal" tabindex="-1" aria-labelledby="addTaxpayerModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addTaxpayerModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="add_user.php" method="post">
                  <div class="form-group row">
                    <label class="col-md-4" for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="user_lastname" name="user_lastname" placeholder="">
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4" for="firstName">First Name</label>
                    <input type="text" class="form-control" id="user_firstname" name="user_firstname" placeholder="">
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4" for="middleName">Middle Name</label>
                    <input type="text" class="form-control" id="user_middlename" name="user_middlename" placeholder="">
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4" for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4" for="usertype">User Type:</label>
                    <select id="user_type" class="form-select" name="user_type" required>
                      <option value="assessor">Assessor</option>
                      <option value="treasurer">Treasurer</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>

  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
 <script src="../../template/vendors/jquery/js/dataTables.min.js"></script>
<script src="../../template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../template/vendors/chart.js/Chart.min.js"></script>
  <script src="../../template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../../template/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../template/js/off-canvas.js"></script>
  <script src="../../template/js/hoverable-collapse.js"></script>
  <script src="../../template/js/template.js"></script>
  <script src="../../template/js/settings.js"></script>
  <script src="../../template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../template/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../template/js/dashboard.js"></script>
  <script src="../../template/js/Chart.roundedBarCharts.js"></script>
  <script src="../../template/js/category.js"></script>
  <script>
  $(document).ready(function () {
    // Initialize DataTable on #user_list
    try {
      $('#user_list').DataTable({
        responsive: true,
        rowReorder: {
          selector: 'td:nth-child(2)', // Optional, remove if not needed
        },
      });
      console.log('DataTable initialized successfully.');
    } catch (error) {
      console.error('Error initializing DataTable:', error);
    }
  });
</script>
</body>

</html>
