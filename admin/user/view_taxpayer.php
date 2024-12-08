<?php
  require_once('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    require_once('../../inc/header.php'); ?>
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
  <script src="../../template/vendors/jquery/js/dataTables.min.js"></script>
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
                  <div class="card-header rounded-0">
                    <h3 class="card-title"><b><span class="text-muted">Property ID:</span> <span><?= isset($code) ? $code : "N/A" ?></span></b></h3>
                    </div>
                  <div class="card-body rounded-0">
                      <div class="container-fluid">
                        <fieldset>
                          <div class="row">
                            
                            <div class="col-8 border"><?= isset($code) ? $code : '' ?></div>
                            <div class="col-4 border bg-gradient-primary text-white">Fullname</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Birthdate</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Place of Birth</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Email</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Contact Number</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Status</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Gender</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Complete Address</div>
                            <div class="col-8 border"></div>
                          </div>
                          <h3 class="card-title">Additional Person:</h3>
                          <div class="row">
                            <div class="col-4 border bg-gradient-primary text-white">Fullname</div>
                            <div class="col-8 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Complete Address</div>
                            <div class="col-8 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Email</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Contact Number</div>
                            <div class="col-3 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Relationship</div>
                            <div class="col-8 border"></div>
                          </div>
                        </fieldset>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <fieldset>
                              <legend class="text-primary border-bottom">Property Information</legend>
                              <div class="col-12 text-right">
                                <button class="btn btn-primary btn-sm btn-flat" type="button" id="add_history"><i class="fa fa-plus"></i> Edit</button>
                              </div>
                            <div class="row">
                            <div class="col-3 border bg-gradient-primary text-white">Taxpayer ID:</div>
                            <div class="col-3 border"><?= isset($taxpayer_id) ? $taxpayer_id : '' ?></div>
                            <div class="col-3 border bg-gradient-primary text-white">Issue Date</div>
                            <div class="col-3 border"></div>
                            <div class="col-4 border bg-gradient-primary text-white">Complete Address</div>
                            <div class="col-8 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Type of Property</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Assessed Rate</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Area Size(sqm)</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Tax Rate</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Ownership Type</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Property Title No.</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Classification</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Occupancy Status</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Property Use</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Permit No.</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Last Assessment Date</div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border bg-gradient-primary text-white">Next Assessment Date</div>
                            <div class="col-3 border"></div>
                          </div>
                            </div>
                          </fieldset>
                          <div class="row">
                            <fieldset>
                              <legend class="text-primary border-bottom">Document Upload</legend>
                              <div class="col-12 text-right">
                                <button class="btn btn-primary btn-sm btn-flat" type="button" id="add_history"><i class="fa fa-plus"></i> Upload</button>
                              </div>
                          </div>
                          </div>
                        </div>
                      </div>
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
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
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
    new DataTable('#example', {
    responsive: true,
    rowReorder: {
        selector: 'td:nth-child(2)'
    }
});
  </script>
</body>

</html>
