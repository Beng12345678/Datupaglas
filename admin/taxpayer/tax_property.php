<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Property Information</title>
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

    .header, .footer {
      background-color:#6b8d53;
      color: white;
      padding: 10px 0;
    }

    .header h1, .header img {
      margin: 0 auto;
      display: inline-block;
      vertical-align: middle;
    }

    .header img {
      margin-right: 10px;
      width: 50px;
      height: auto;
    }

    .profile-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-header h2 {
      font-weight: 600;
      font-size: 28px;
      color: #000000;
    }

    .profile-content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-info p {
      font-size: 16px;
      line-height: 1.6;
      margin: 5px 0;
      color: #6c757d; /* Gray text color for regular text */
    }

    .profile-info strong {
      color: #000000; /* Black font color for strong text */
    }

    .container-scroller {
      display: flex;
      justify-content: space-between;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
    }

    /* Footer styling */
    .footer {
      text-align: center;
      font-size: 14px;
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
        <h2>Property Information</h2>
      </div>

      <!-- Profile Content -->
      <div class="profile-content">
        <!-- Profile Info Section -->
        <div class="profile-info">
          <div class="left">
            <p><strong>Taxpayer ID:</strong> 00001<br>
               <strong>Complete Address:</strong> Brgy, Datang, Datu Paglas. Maguindanao Del Sur <br>
               <strong>Type of Property:</strong> Residential <br>
               <strong>Assessed Value:</strong>50% <br>
               <strong>Issue Date:</strong> May 23, 2020 <br>
               <strong>Area Size (sqm):</strong> 180.00<br>
               <strong>Tax Rate:</strong> 15%<br>
               <strong>Ownership Type:</strong> Single Owner <br>
               <strong>Property Title No. </strong> TCT-12345678 <br>
               <strong>Classification:</strong> Residential with minor commercial usage<br>
               <strong>Occupancy Status:</strong> Owner-Occupied<br>
               <strong>Property Use:</strong> Residential<br>
               <strong>Permit No.:</strong> BP-98765432<br>
               <strong>Last Assessment Date:</strong> January 10, 2023<br>
               <strong>Next Assessment Date:</strong> January 10, 2025<br> 
            </p>
          </div>
        </div>
      </div>
    </div>

      <!-- Footer -->
      <div class="footer">
        <p>&copy; 2024 Datu Paglas Government. All rights reserved.</p>
      </div>
    </div>
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

