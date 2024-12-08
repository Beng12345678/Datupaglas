<?php
  require_once('../../config.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
          <a class="navbar-brand brand-logo" href="../../admin/index.php">
            <img src="../../uploads/Seal_of_Datu_Paglas.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../admin/index.php">
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
          <li class="nav-item dropdown"> 
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user['name']; ?></p>
                <p class="fw-light text-muted mb-0"><?php echo $user['email']; ?></p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item" href="../../login.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
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
              <div class="card-body d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">List of Taxpayer</h4>
                <div class="card-tools">
                <a href="#" id="create_new" class="btn btn-flat btn-sm btn-primary" onclick="window.location.href='../../admin/user/taxpayer_reg.php'">
  <span class="fas fa-plus"></span> Add New
</a>
                </div>
                </div>
                    <div class="container-fluid">
                    <table id="taxpayer_list" class="table table-hover table-striped">
                      <colgroup>
                        <col width="5%">
                        <col width="20%">
                        <col width="30%">
                        <col width="30%">
                        <col width="20%">
                        <col width="20%">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Fullname</th>
                          <th>Type of Property</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <tbody>
                        <?php
                          $i = 1; // Row counter
                            $qry = $conn->query("SELECT * FROM `taxpayer_list` ORDER BY fullname ASC");

                          if ($qry === false) {
                            echo "Error: " . $conn->error;
                          } else {
                            while ($row = $qry->fetch_assoc()):
                        ?>
                        <tr>
                          <td><?php echo htmlspecialchars($row['id']) ?></td>
                          <td><?php echo ucwords(htmlspecialchars($row['fullname'])) ?></td>
                          <td><?php echo ucwords(htmlspecialchars($row['type_of_property'])) ?></td>
                          <td><?php echo ucwords(htmlspecialchars($row['status'])) ?></td>
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
      </div>
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../template/vendors/jquery/js/dataTables.min.js"></script>
<script src="../../dist/js/bootstrap.bundle.min.js"></script>
<script src="../../template/js/jquery-3.6.0.min.js"></script>
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
    // Delete functionality
    $('.delete_data').click(function () {
      _conf(
        "Are you sure you want to delete this taxpayer permanently?",
        "delete_taxpayer",
        [$(this).attr('data-id')]
      );
    });

    // Create new taxpayer modal
    $('#create_new').click(function () {
      uni_modal(
        "Add New Taxpayer Details",
        "../../admin/user/taxpayer_reg.php",
        'mid-large'
      );
    });

    // Edit taxpayer modal
    $('.edit_data').click(function () {
      uni_modal(
        "Update Taxpayer Details",
        "../../admin/user/taxpayer_reg.php?id=" + $(this).attr('data-id'),
        'mid-large'
      );
    });

    // Apply styling to table
    $('.table td, .table th').addClass('py-1 px-2 align-middle');
    
    // Initialize DataTable
    $('.table').dataTable({
      responsive: true,
      rowReorder: {
        selector: 'td:nth-child(2)',
      },
    });
  });

  // Delete taxpayer function
  function delete_taxpayer(id) {
    start_loader();
    $.ajax({
      url: "../../classes/Master.php?f=delete_taxpayer",
      method: "POST",
      data: { id: id },
      dataType: "json",
      error: (err) => {
        console.log(err);
        alert_toast("An error occurred.", "error");
        end_loader();
      },
      success: function (resp) {
        if (typeof resp === "object" && resp.status === "success") {
          location.reload();
        } else {
          alert_toast("An error occurred.", "error");
          end_loader();
        }
      },
    });
  }
</script>
  <script>
    new DataTable('#taxpayer_list', {
    responsive: true,
    rowReorder: {
        selector: 'td:nth-child(2)'
    }
});
  </script>
</body>

</html>
