<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Documents</title>
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
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h1, h2, h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
            font-size: larger;
        }
    .header {
      display: flex;
      align-items: center; /* Vertically center the items */
      margin-bottom: 20px; /* Space below the header */
    }

    .header img {
      width: 80px; /* Adjust the width of the logo */
      height: auto; /* Maintain aspect ratio */
      margin-right: 10px; /* Space between logo and text */
    }

    .header h1 {
      margin: 0; /* Remove default margin */
      font-size: 24px; /* Adjust font size for visibility */
    }
    .invoice-title {
            text-align: center; /* Center align the title */
            margin-top: 20px; /* Space above the title */
            font-size: 24px; /* Title font size */
            color: #000; /* Title color */
    /* Added for better structure */

    .title-container {
      display: flex;
      flex-direction: column; /* Stack h1 and h2 vertically */
    }
    .header-text {
            font-family: Georgia, serif; /* Changed to a more formal font */
            font-size: 18px;
            color: #333; /* Darker color for the text */
    }

        .contact-info {
            margin-top: 10px;
            font-size: 14px;
            color: #555; /* Slightly lighter color for the contact info */
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
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Industrial, commercial, and mineral properties</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Agricultural</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Residential</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Timberland</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Special Classes</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Hospital and Water District</p>
                </div>
              </a>
            </div>
          </li>
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
      <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <!-- Documents Table -->
          <div class="row">
           <!-- Card 1 -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tax Return 2023</h5>
                  <p class="card-text"><strong>Date Uploaded:</strong> 2024-09-01</p>
                  <p class="card-text"><strong>Type:</strong> PDF</p>
                  <a href="#" class="btn btn-primary">Download</a>
                </div>
              </div>
            </div>
              <!-- Repeat cards for each document -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Another Document</h5>
                  <p class="card-text"><strong>Date Uploaded:</strong> 2024-09-02</p>
                  <p class="card-text"><strong>Type:</strong> PDF</p>
                  <a href="#" class="btn btn-primary">Download</a>
                </div>
              </div>
            </div>
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

