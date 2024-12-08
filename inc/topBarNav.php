<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <!-- Logo and branding -->
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
    <!-- User greeting and search bar -->
    <ul class="navbar-nav">
      <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
        <h1 class="welcome-text">Hi, <span class="text-black fw-bold"><?php echo $user['name']; ?></span></h1>
      </li>
    </ul>
    
    <ul class="navbar-nav ms-auto">
      <!-- Datepicker (hidden in smaller screens) -->
      <li class="nav-item d-none d-lg-block">
        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
          <span class="input-group-addon input-group-prepend border-right">
            <span class="icon-calendar input-group-text calendar-icon"></span>
          </span>
          <input type="text" class="form-control">
        </div>
      </li>
      <!-- Search bar -->
      <li class="nav-item">
        <form class="search-form" action="#">
          <i class="icon-search"></i>
          <input type="search" class="form-control" placeholder="Search Here" title="Search here">
        </form>
      </li>
      <!-- User profile dropdown -->
      <li class="nav-item dropdown"> 
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> 
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
              <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user['name']; ?></p>
              <p class="fw-light text-muted mb-0"><?php echo $user['email']; ?></p>
            </div>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
            <a class="dropdown-item" href="C:\xampp\htdocs\datupaglas\admin\login.html"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
          </div>
        </li>
      </li>
    </ul>
    
    <!-- Toggler button for mobile view -->
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
