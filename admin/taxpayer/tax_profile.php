<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Taxpayer Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\vendors\feather\feather.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\vendors\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\vendors\ti-icons\css\themify-icons.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\vendors\typicons\typicons.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\vendors\simple-line-icons\css\simple-line-icons.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\vendors\css\vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\css\vertical-layout-light\style.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\datupaglas\template\css\vertical-layout-light\style3.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" />
  <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #6c757d;
            margin: 20px;
        }
        h1, h2, h3, p, li {
      line-height: 2.0 !important; /* Apply line-height with !important */
      font-size: 15px;
    }
        .profile-header {
            margin-bottom: 20px;
        }
        .profile-content {
            display: flex;
            justify-content: space-between;
        }
        .profile-picture {
            margin-right: 5px;
        }
        .profile-picture img {
          border-radius: 50%;
          width: 100px;
          height: 100px;
        }
        .family-section {
          margin-top: 20px;
        }
    </style>
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" alt="logo" />
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
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item" href="C:\xampp\htdocs\datupaglas\admin\login.html"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="C:\xampp\htdocs\datupaglas\admin\taxpayer\tax_dash.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="C:\xampp\htdocs\datupaglas\admin\taxpayer\tax_profile.html">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="C:\xampp\htdocs\datupaglas\admin\taxpayer\tax_property.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Property</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="C:\xampp\htdocs\datupaglas\admin\taxpayer\tax_document.html">
              <i class="mdi mdi-folder-download menu-icon"></i>
              <span class="menu-title">Documents</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container">

        <!-- Header Section -->
        <div class="content">
      <!-- Profile Header -->
      <div class="profile-header">
        <h2>Profile</h2>
      </div>

      <!-- Profile Content -->
      <div class="profile-content">
        <!-- Profile Picture Section -->
        <div class="profile-picture">
          <img src="https://via.placeholder.com/100" alt="Profile Picture">
          <button>Upload Profile Picture</button>
        </div>

        <!-- Profile Info Section -->
        <div class="profile-info">
          <div class="left">
            <p><strong>Fullname:</strong> <?php echo $taxpayer['fname']. ' ' . $taxpayer['mname']. ' ' . $taxpayer['lname']; ?> <br>
               <strong>Birthdate:</strong> <?php echo $taxpayer['birthd']; ?> <br>
               <strong>Place of Birth:</strong> <?php echo $taxpayer['bar']. ' ' . $taxpayer['mun']. ' ' . $taxpayer['pro']; ?> <br>
               <strong>Email:</strong> <?php echo $taxpayer['eadd']; ?> <br>
               <strong>Contact Number:</strong> <?php echo $taxpayer['cnumber']; ?><br>
               <strong>Status:</strong> <?php echo $taxpayer['stat']; ?> <br>
               <strong>Gender: </strong> <?php echo $taxpayer['gen']; ?> <br>
               <strong>Occupation: </strong> <?php echo $taxpayer['occup']; ?> <br>
               <strong>Net Worth: </strong> <?php echo $taxpayer['net']; ?> <br>
               <strong>Complete Address: </strong> <?php echo $taxpayer['barangay']. ' ' . $taxpayer['municipality']. ' ' . $taxpayer['province']; ?> <br>
            </p>
          </div>
          <hr class="my-3">
      <!-- Family Relations Section -->
      <div class="family-section">
        <h3>Additional Person:</h3>
        <div class="left">
          <p><strong>Fullname:</strong> <?php echo $taxpayer['firstname']. ' ' . $taxpayer['middlename']. ' ' . $taxpayer['lastname']; ?> <br>
             <strong>Complete Address:</strong> <?php echo $taxpayer['barangay1']. ' ' . $taxpayer['municipality1']. ' ' . $taxpayer['province1']; ?><br>
             <strong>Email:</strong> <?php echo $taxpayer['emailadd']; ?><br>
             <strong>Contact Number:</strong> <?php echo $taxpayer['cn']; ?> <br>
             <strong> Relationship:</strong> <?php echo $taxpayer['relationship']; ?> <br>
          </p>
        </div>
      </div>

      <!-- Footer -->
    </div>
  </div>
  <div class="footer">
        <p>&copy; 2024 Datu Paglas Government. All rights reserved.</p>
      </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="C:\xampp\htdocs\datupaglas\template\vendors\js\vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="C:\xampp\htdocs\datupaglas\template\vendors\chart.js\Chart.min.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\vendors\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\vendors\progressbar.js\progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="C:\xampp\htdocs\datupaglas\template\js\off-canvas.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\js\hoverable-collapse.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\js\template.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\js\settings.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\js\todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="C:\xampp\htdocs\datupaglas\template\js\jquery.cookie.js" type="text/javascript"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\js\dashboard.js"></script>
  <script src="C:\xampp\htdocs\datupaglas\template\js\Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

