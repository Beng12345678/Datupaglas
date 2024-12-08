<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Statement of Account</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../template/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../dist/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../template/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="../../template/css/vertical-layout-light/style3.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../uploads/Seal_of_Datu_Paglas.png" />
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
            background-color: #6b8d53;
            color: white;
            padding: 10px 0;
        }
        .table {
          width: 100%;
          border-collapse: collapse;
          table-layout: auto; /* Automatically adjust column widths */
        }
        .table th, .table td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
          font-size: 14px; /* Adjust font size for better readability */
          word-wrap: break-word; /* Ensure long content wraps */
        }
        th {
            background-color: #f4f4f4;
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
    }
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
    .table-responsive {
      margin-bottom: 15px;
    }
    .table-container {
      overflow-x: auto; /* Enable horizontal scrolling on small screens */
      width: 100%; /* Ensure container fits screen */
      margin: 0 auto; /* Center container */
    }
    @media (max-width: 576px) {
    .table th, .table td {
      font-size: 12px; /* Smaller font for compactness */
      padding: 6px; /* Reduce padding */
    }
    .table {
      table-layout: fixed; /* Ensure columns stay within width */
    }
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
        <div class="header">
    <img src="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" alt="Datu Paglas Logo" />
    <div class="header-text">
            Datu Paglas, Maguindanao Del Sur. 9617<br>
            09490988346<br>
            <a href="mailto:datupaglas@gmail.com">datupaglas@gmail.com</a> <!-- Email link -->
      </div>
  </div>
<hr class="my-3">
<h1 class="invoice-title">Tax Declaration Invoice</h1>
<div class="header d-flex justify-content-between">
            <div>
                <p><strong>Datu Paglas, Municipality</strong><br>
                    Bill To:<br>
                    Poblacion, Datu Paglas. Maguindanao<br>
                    datupaglas@gmail.com</p>
            </div>
            <div>
                <p><strong>Statement Date:</strong> <span id="currentDate"></span><br>
                    <strong>Statement #:</strong> 101<br>
                    <strong>Taxpayer ID:</strong> ABC123</p>
            </div>
        </div>
        <div class="table-responsive">

<table class="table table-bordered">
    <tr>
        <th>Classification</th>
        <th>Area (sqm)</th>
        <th>Market Value (Php)</th>
        <th>Actual Use</th>
        <th>Assessment Level (%)</th>
        <th>Assessed Value (Php)</th>
    </tr>
    <tr>
        <td>Residential</td>
        <td>180.00</td>
        <td>412,200.00</td>
        <td>Residential</td>
        <td>15</td>
        <td>61,830.00</td>
    </tr>
</table>
</div>
<p class="total">Total Assessed Value: <strong>Php 61,830.00</strong></p>
<p>Total Assessed Value in Words: SIXTY-ONE THOUSAND EIGHT HUNDRED THIRTY AND 00/100</p>

<p>Recommended for Approval: ENGR. DONINADOR B. SERRADILLA JR.</p>
<p>Approved By: NOEL L. VERACRUZ</p>
<p>This declaration cancels TIDAR No.: 24</p>

        <!-- Footer Section -->
        <div class="footer">
            <p>If you have any questions about this invoice, please contact Datu Paglas Municipality, Pobacion Datu Paglas Maguindanao Del Sur, 9617<br>
                Phone: (0949)098-8346 |<a href="mailto:datupaglas@gmail.com">datupaglas@gmail.com</a></p>
            <p>Thank You For Your Business!</p>
        </div>

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
  <script>
        function setCurrentDate() {
            const dateElement = document.getElementById('currentDate');
            const today = new Date();
            const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
            const day = String(today.getDate()).padStart(2, '0');
            const year = today.getFullYear();
            dateElement.textContent = `${month}/${day}/${year}`;
        }

        // Call the function when the document loads
        window.onload = setCurrentDate;
    </script>
  <!-- End custom js for this page-->
</body>

</html>

