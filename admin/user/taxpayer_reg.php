<?php
require_once('../../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new DBConnection;
    $conn = $db->getConnection();

    // Handle form1 submission
    if (isset($_POST['form1'])) {
        // Sanitize inputs
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
        $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
        $pob_barangay = mysqli_real_escape_string($conn, $_POST['pob_barangay']);
        $pob_municipality = mysqli_real_escape_string($conn, $_POST['pob_municipality']);
        $pob_province = mysqli_real_escape_string($conn, $_POST['pob_province']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
        $add_barangay = mysqli_real_escape_string($conn, $_POST['add_barangay']);
        $add_municipality = mysqli_real_escape_string($conn, $_POST['add_municipality']);
        $add_province = mysqli_real_escape_string($conn, $_POST['add_province']);
        $ap_lastname = mysqli_real_escape_string($conn, $_POST['ap_lastname']);
        $ap_firstname = mysqli_real_escape_string($conn, $_POST['ap_firstname']);
        $ap_middlename = mysqli_real_escape_string($conn, $_POST['ap_middlename']);
        $ap_barangay = mysqli_real_escape_string($conn, $_POST['ap_barangay']);
        $ap_municipality = mysqli_real_escape_string($conn, $_POST['ap_municipality']);
        $ap_province = mysqli_real_escape_string($conn, $_POST['ap_province']);
        $ap_email = mysqli_real_escape_string($conn, $_POST['ap_email']);
        $ap_contactnum = mysqli_real_escape_string($conn, $_POST['ap_contactnum']);
        $relationship = mysqli_real_escape_string($conn, $_POST['relationship']);

        // Prepare query for inserting taxpayer details
        $query = $conn->prepare(
            "INSERT INTO taxpayer_details 
            (lastname, firstname, middlename, birthdate, pob_barangay, pob_municipality, pob_province, email, contactnum, gender, status, add_barangay, add_municipality, add_province, ap_lastname, ap_firstname, ap_middlename, ap_barangay, ap_municipality, ap_province, ap_email, ap_contactnum, relationship) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $query->bind_param(
            "sssssssssssssssssssssss",
            $lastname, $firstname, $middlename, $birthdate, $pob_barangay, $pob_municipality, $pob_province, $email, $contactnum, $gender, $status, $add_barangay, $add_municipality, $add_province, $ap_lastname, $ap_firstname, $ap_middlename, $ap_barangay, $ap_municipality, $ap_province, $ap_email, $ap_contactnum, $relationship
        );

        // Execute query and handle result
        if ($query->execute()) {
            echo 'Taxpayer registered successfully!';
        } else {
            echo 'Error registering taxpayer: ' . $query->error;
        }
        $query->close();
    }

    // Handle form2 submission
    elseif (isset($_POST['form2'])) {
        // Sanitize inputs
        $pro_barangay = mysqli_real_escape_string($conn, $_POST['pro_barangay']);
        $pro_municipality = mysqli_real_escape_string($conn, $_POST['pro_municipality']);
        $pro_province = mysqli_real_escape_string($conn, $_POST['pro_province']);
        $type_of_property = mysqli_real_escape_string($conn, $_POST['type_of_property']);
        $assessed_value = mysqli_real_escape_string($conn, $_POST['assessed_value']);
        $area_size = mysqli_real_escape_string($conn, $_POST['area_size']);
        $tax_rate = mysqli_real_escape_string($conn, $_POST['tax_rate']);
        $ownership_type = mysqli_real_escape_string($conn, $_POST['ownership_type']);
        $classification = mysqli_real_escape_string($conn, $_POST['classification']);
        $occupancy_status = mysqli_real_escape_string($conn, $_POST['occupancy_status']);
        $property_use = mysqli_real_escape_string($conn, $_POST['property_use']);
        $lad = mysqli_real_escape_string($conn, $_POST['lad']);
        $nad = mysqli_real_escape_string($conn, $_POST['nad']);

        // Prepare query for inserting property details
        $query = $conn->prepare(
            "INSERT INTO property_details 
            (pro_barangay, pro_municipality, pro_province, type_of_property, assessed_value, area_size, tax_rate, ownership_type, classification, occupancy_status, property_use, lad, nad) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $query->bind_param(
            "sssssssssssss",
            $pro_barangay, $pro_municipality, $pro_province, $type_of_property, $assessed_value, $area_size, $tax_rate, $ownership_type, $classification, $occupancy_status, $property_use, $lad, $nad
        );

        // Execute query and handle result
        if ($query->execute()) {
            echo 'Property registered successfully!';
        } else {
            echo 'Error registering property: ' . $query->error;
        }
        $query->close();
    }

    // Close database connection
    $conn->close();
}
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
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../uploads/Seal_of_Datu_Paglas.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../admin/index.php">
            <img src="../../uploads/Seal_of_Datu_Paglas.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav ms-auto">
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
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
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
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <img src="../../uploads/Seal_of_Datu_Paglas.png" alt="Logo" class="img-fluid" style="max-width: 100px;">
                    </div>
                    <div class="additional-info">
                        <h5><strong> BAWAL ANG TAMAD</strong></h5>
                        <p>DATU PAGLAS, MAGUINDANAO DEL SUR. 9617<br>
                        datupaglasmds.com<br>
                        09490988346</p>
                    </div>
                  </div>
                  <hr>
                  <h4 class="card-title">Registration</h4>
                  <p class="card-description">
                    Basic Information
                  </p>
                  <form id="form1" method="post">
                    <div class="form-group row">
                      <h6>Fullname:</h6>
                      <div class="col-md-4">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" required>
                      </div>
                      <div class="col-md-4">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" required>
                      </div>
                      <div class="col-md-4">
                        <label for="middleName">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <h6>Birth Date:</h6>
                      <input type="date" class="form-control" id="birthdate" placeholder="Select your birth date" name="birthdate" required>
                    </div>
                    <div class="form-group row">
                      <h6>Place of Birth:</h6>
                      <div class="col-md-4">
                      <label for="pob_barangay">Barangay</label>
                      <input type="text" class="form-control" id="pob_barangay" name="pob_barangay" required>
                    </div>
                    <div class="col-md-4">
                      <label for="pob_municipality">Municipality</label>
                      <input type="text" class="form-control" id="pob_municipality" name="pob_municipality" required>
                    </div>
                    <div class="col-md-4">
                      <label for="pob_province">Province</label>
                      <input type="text" class="form-control" id="pob_province" name="pob_province" required>
                    </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="col-md-6">
                      <label for="contactnum">Contact Number</label>
                      <input type="text" class="form-control" id="contactnum" placeholder="0000 000 0000" name="contactnum" required>
                    </div>
                  </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                      <label for="status">Status:</label>
                      <select id="status"class="form-control form-control-border" name="status" required>
                        <option selected>Status</option>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="gender">Gender:</label>
                      <select name="gender" id="gender" class="form-control form-control-border" name="gender" reqiured>
                        <option selected>Gender..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                    <div class="form-group row">
                      <h6>Complete Address:</h6>
                    <div class="col-md-4">
                      <label for="add_barangay">Barangay</label>
                      <input type="text" class="form-control" id="add_barangay" name="add_barangay" required>
                      </div>
                      <div class="col-md-4">
                      <label for="add_municipality">Municipality</label>
                      <input type="text" class="form-control" id="add_municipality" name="add_municipality" required>
                    </div>
                    <div class="col-md-4">
                      <label for="add_province">Province</label>
                      <input type="text" class="form-control" id="add_province" name="add_province" required>
                    </div>
                    </div>
                    <hr class="my-3">
                    <div class="text-center mb-2">
                      <label class="form-check-label">Additional Person:</label>
                    </div>
                    <div class="form-group row">
                      <h6>Fullname:</h6>
                      <div class="col-md-4">
                      <label for="ap_lastname">Last Name</label>
                      <input type="text" class="form-control" id="ap_lastname" name="ap_lastname" placeholder="" required>
                    </div>
                    <div class="col-md-4">
                      <label for="ap-firstname">First Name</label>
                      <input type="text" class="form-control" id="ap_firstname" name="ap_firstname" placeholder="" required>
                    </div>
                    <div class="col-md-4">
                      <label for="ap_middlename">Middle Name</label>
                      <input type="text" class="form-control" id="ap_middlename" name="ap_middlename" placeholder="" required>
                    </div>
                    </div>
                    <div class="form-group row">
                      <h6>Complete Address:</h6>
                      <div class="col-md-4">
                      <label for="ap_barangay">Barangay</label>
                      <input type="text" class="form-control" id="ap_barangay" name="ap_barangay" required>
                    </div>
                    <div class="col-md-4">
                      <label for="ap_municipality">Municipality</label>
                      <input type="text" class="form-control" id="ap_municipality" name="ap_municipality" required>
                    </div>
                    <div class="col-md-4">
                      <label for="ap_province">Province</label>
                      <input type="text" class="form-control" id="ap_province" name="ap_province" required>
                    </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4">
                      <label for="ap_email">Email address</label>
                      <input type="email" class="form-control" id="ap_email" name="ap_email" placeholder="Email" required>
                    </div>
                    <div class="col-md-4">
                      <label for="ap_contactnum">Contact Number</label>
                      <input type="text" class="form-control" id="ap_contactnum" placeholder="0000 000 0000" name="ap_contactnum" required>
                    </div>
                    <div class="col-md-4">
                      <label for="relationship">Relationship</label>
                      <input type="text" class="form-control" id="relationship" name="relationship" required>
                    </div>
                  </div>
                      <button type="button" name="form1" class="btn btn-primary" onclick="showForm(2)">Next</button>
                      <button type="button" class="btn btn-light" onclick="cancel()">Cancel</button>
                  </form>
                  <form id="form2" style="display:none;" method="post">
                  <div class="form-group row">
                      <h6>Complete Address:</h6>
                    <div class="col-md-4">
                      <label for="Barangay">Barangay</label>
                      <input type="text" class="form-control" id="pro_barangay" name="pro_barangay" placeholder="" required>
                    </div>
                    <div class="col-md-4">
                      <label for="municipality">Municipality</label>
                      <input type="text" class="form-control" id="pro_municipality" name="pro_municipality" placeholder="" required>
                    </div>
                    <div class="col-md-4">
                      <label for="Province">Province</label>
                      <input type="text" class="form-control" id="pro_province" name="pro_province" placeholder="" required>
                    </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                      <label for="propert-type">Type of Property:</label>
                      <select class="form-select" id="type_of_property" name="type_of_property" onchange="updatePercentage()" required>
                        <option selected>Select the Property Type....</option>
                        <option value="agricultural">Agricultural</option>
                        <option value="commercial">Commercial</option>
                        <option value="industrial">Industrial</option>
                        <option value="mineral">Mineral</option>
                        <option value="residential">Residential</option>
                        <option value="timberland">Timberland</option>
                      </select>
                    </div>
                      <div class="col-md-6">
                        <label for="assessedRate">Assessed Value:</label>
                        <input type="text" class="form-control" id="assessed_value" name="assessed_value" required>
                      </div>
                    </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="areaSize">Area Size (sqm):</label>
                      <input type="text" class="form-control" id="area_size" name="area_size" required>
                    </div>
                    <div class="col-md-6">
                      <label for="TaxRate">Tax Rate:</label>
                      <input type="text" class="form-control" id="tax_rate" name="tax_rate" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="ownership">Ownership Type:</label>
                      <input type="text" class="form-control" id="ownership_type" name="ownership_type" required>
                    </div>
                    <div class="col-md-6">
                      <label for="PropertyUse">Property Use:</label>
                      <input type="text" class="form-control" id="property_use" name="property_use" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Classification">Classification:</label>
                      <input type="text" class="form-control" id="classification" name="classification" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Occupancy">Occupancy Status:</label>
                      <input type="text" class="form-control" id="occupancy_status" name="occupancy_status" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="LastAssessmentDate">Last Assessment Date:</label>
                      <input type="date" class="form-control" id="lad" name="lad" required>
                    </div>
                    <div class="col-md-6">
                      <label for="NextAssessmentDate">Next Assessment Date:</label>
                      <input type="date" class="form-control" id="nad" name="nad" required>
                    </div>
                  </div>
                    <button type="button" class="btn btn-light" onclick="showForm(1)">Back</button>
                  <button type="submit" name="form2" class="btn btn-primary">Submit</button>
                  </form>
                  <form id="form3" style="display:none;" enctype="multipart/form-data">
                    <!-- Form fields for the third form -->
                      <div class="mb-3">
                        <label for="document">Upload Document:</label>
                  <input type="file" id="document" name="document" accept=".pdf,.doc,.docx,.jpg,.png" required>
                      </div>
                      <div class="mb-3">
                        <label for="document">Upload Document:</label>
                  <input type="file" id="document" name="document" accept=".pdf,.doc,.docx,.jpg,.png" required>
                      </div>
                      <div class="mb-3">
                        <label for="document">Upload Document:</label>
                  <input type="file" id="document" name="document" accept=".pdf,.doc,.docx,.jpg,.png" required>
                      </div>
                      <button type="button" class="btn btn-primary" onclick="showForm(2)">Back</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
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
   <script>
    // Function to show specified form and hide others
    function showForm(formNumber) {
      document.getElementById("form1").style.display = formNumber === 1 ? "block" : "none";
      document.getElementById("form2").style.display = formNumber === 2 ? "block" : "none";
      document.getElementById("form3").style.display = formNumber === 3 ? "block" : "none";
    }

    // Function to reset to Form 1 (initial state)
    function cancel() {
      showForm(1); // Show form1 and reset
    }
  </script>
  <script>
        function updatePercentage() {
            const propertyType = document.getElementById('property-type').value;
            const percentageField = document.getElementById('percentage');
            let percentage = '';

            switch (propertyType) {
                case 'agricultural':
                    percentage = '40%';
                    break;
                case 'commercial':
                    percentage = '50%';
                    break;
                case 'industrial':
                    percentage = '50%';
                    break;
                case 'mineral':
                    percentage = '50%';
                    break;
                case 'residential':
                    percentage = '20%';
                    break;
                case 'timberland':
                    percentage = '20%';
                    break;
                default:
                    percentage = '';
            }

            percentageField.value = percentage;
        }
    </script>

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
</body>

</html>
