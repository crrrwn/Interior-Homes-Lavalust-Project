<header id="header" class="header fixed-top d-flex align-items-center bg-danger">

  <div class="d-flex align-items-center justify-content-between bg-danger p-2">
    <a href="/dashboard" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block text-dark">Admin-Dashboard</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn text-dark"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle text-light" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="public/assets/img/gwen.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2 text-light">G. Basconcillo</span>
        </a><!-- End Profile Image Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark">
          <li class="dropdown-header text-light">
            <h6>Gwen Basconcillo</h6>
            <span>Admin</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center text-light" href="/logout">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->