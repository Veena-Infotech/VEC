<?php
if (!function_exists('isActive')) {
  function isActive($pageName) {
    global $activePage;
    return $activePage === $pageName ? 'active bg-gradient-dark text-white' : 'text-dark';
  }
}
if (!function_exists('isParentActive')) {
  function isParentActive($pageNames = []) {
    global $activePage;
    return in_array($activePage, $pageNames) ? 'show' : '';
  }
}
if (!function_exists('isTextBold')) {
  function isTextBold($pageNames = []) {
    global $activePage;
    return in_array($activePage, $pageNames) ? 'fw-bold' : '';
  }
}
?>
<aside
  class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2"
  id="sidenav-main"
>
  <div class="sidenav-header">
    <i
      class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true"
      id="iconSidenav"
    ></i>
    <a
      class="navbar-brand px-4 py-3 m-0"
      href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
      target="_blank"
    >
      <img
        src="../assets/img/logo-ct-dark.png"
        class="navbar-brand-img"
        width="26"
        height="26"
        alt="main_logo"
      />
      <span class="ms-1 text-sm text-dark">VEC</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2" />
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= isActive('dashboard') ?>" href="./Dashboard.php">
          <i class="material-symbols-rounded opacity-5">dashboard</i>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item has-dropdown">
        <a class="nav-link <?= isTextBold(['add_property', 'view_property', 'seo']) ?>">
          <i class="material-symbols-rounded opacity-5">build</i>
          <span class="nav-link-text ms-1">Property</span>
          <span class="dropdown-arrow">▼</span>
        </a>
        <ul class="dropdown-menu <?= isParentActive(['add_property', 'view_property', 'seo']) ?>">
          <li>
            <a class="nav-link <?= isActive('add_property') ?>" href="./AddProperty.php">
              <i class="material-symbols-rounded opacity-5">language</i>
              <span class="nav-link-text ms-1">Add Property</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= isActive('view_property') ?>" href="./ViewProperty.php">
              <i class="material-symbols-rounded opacity-5">visibility</i>
              <span class="nav-link-text ms-1">View Property</span>
            </a>
          </li>
          <li>
            <a class="nav-link <?= isActive('seo') ?>" href="../pages/seo.php">
              <i class="material-symbols-rounded opacity-5">trending_up</i>
              <span class="nav-link-text ms-1">SEO</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="../pages/sign-up.html">
          <i class="material-symbols-rounded opacity-5">assignment</i>
          <span class="nav-link-text ms-1">Sign Up</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
<script>
  document.querySelectorAll('.has-dropdown > .nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const menu = this.nextElementSibling;
      document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
        if (openMenu !== menu) openMenu.classList.remove('show');
      });
      if (menu) {
        menu.classList.toggle('show');
      }
    });
  });
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-item')) {
      document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
        menu.classList.remove('show');
      });
    }
  });
</script>
  </head>

  <body class="g-sidenav-show bg-gray-100">
    <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2"
      id="sidenav-main"
    >
      <div class="sidenav-header">
        <i
          class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true"
          id="iconSidenav"
        ></i>
        <a
          class="navbar-brand px-4 py-3 m-0"
          href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
          target="_blank"
        >
          <img
            src="../assets/img/logo-ct-dark.png"
            class="navbar-brand-img"
            width="26"
            height="26"
            alt="main_logo"
          />
          <span class="ms-1 text-sm text-dark">VEC</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0 mb-2" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
       <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" <?= isActive('dashboard') ?> href="./Dashboard.php">
      <i class="material-symbols-rounded opacity-5">dashboard</i>
      <span class="nav-link-text ms-1">Dashboard</span>
    </a>
  </li>

  <li class="nav-item has-dropdown">
    <a class="nav-link <?= isTextBold(['add_property', 'view_property', 'uiux', 'graphic']) ?>">
      <i class="material-symbols-rounded opacity-5">build</i>
      <span class="nav-link-text ms-1">Property</span>
      <span class="dropdown-arrow">▼</span>
    </a>
    <ul class="dropdown-menu <?= isParentActive(['add_property', 'view_property', 'uiux', 'graphic']) ?>">
      <li>
        <a class="nav-link <?= isActive('add_property') ?>" href="./AddProperty.php">
          <i class="material-symbols-rounded opacity-5">language</i>
          <span class="nav-link-text ms-1">Add Property</span>
        </a>
      </li>
      <li>
        <a class="nav-link <?= isActive(['view_property']) ?>">
          <i class="material-symbols-rounded opacity-5">palette</i>
          <span class="nav-link-text ms-1">View Property</span>
        </a>
        
      </li>
      <li>
        <a class="nav-link <?= isActive('seo') ?>" href="../pages/seo.php">
          <i class="material-symbols-rounded opacity-5">trending_up</i>
          <span class="nav-link-text ms-1">SEO</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link text-dark" href="../pages/sign-up.html">
      <i class="material-symbols-rounded opacity-5">assignment</i>
      <span class="nav-link-text ms-1">Sign Up</span>
    </a>
  </li>
</ul>

<script>
  document.querySelectorAll('.has-dropdown > .nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const menu = this.nextElementSibling;

      // Close other open menus
      document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
        if (openMenu !== menu) openMenu.classList.remove('show');
      });

      // Toggle current one
      if (menu) {
        menu.classList.toggle('show');
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-item')) {
      document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
        menu.classList.remove('show');
      });
    }
  });
</script>
  </li>


</ul>
      </div>
      
      </div>
    </aside>
    <main
      class="main-content position-relative  border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl"
        id="navbarBlur"
        data-scroll="true"
      >
        <div class="container-fluid py-1 px-3">
          
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
             
            </div>
            <ul
              class="navbar-nav d-flex align-items-center justify-content-end"
            >
              
            
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="iconNavbarSidenav"
                >
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
             
              <li class="nav-item dropdown pe-3 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="dropdownMenuButton"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="material-symbols-rounded">notifications</i>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                  aria-labelledby="dropdownMenuButton"
                >
                  
                  
                  
                </ul>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a
                  href="../pages/sign-in.html"
                  class="nav-link text-body font-weight-bold px-0"
                >
                  <i class="material-symbols-rounded">account_circle</i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-2">
        
       
        
      </div>
    </main>
    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-symbols-rounded py-2">settings</i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">VEC Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button
              class="btn btn-link text-dark p-0 fixed-plugin-close-button"
            >
              <i class="material-symbols-rounded">clear</i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1" />
        <div class="card-body pt-sm-3 pt-0">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Sidebar Colors</h6>
          </div>
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
              <span
                class="badge filter bg-gradient-primary"
                data-color="primary"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-dark active"
                data-color="dark"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-info"
                data-color="info"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-success"
                data-color="success"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-warning"
                data-color="warning"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-danger"
                data-color="danger"
                onclick="sidebarColor(this)"
              ></span>
            </div>
          </a>
          <!-- Sidenav Type -->
          <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between different sidenav types.</p>
          </div>
          <div class="d-flex">
            <button
              class="btn bg-gradient-dark px-3 mb-2"
              data-class="bg-gradient-dark"
              onclick="sidebarType(this)"
            >
              Dark
            </button>
            <button
              class="btn bg-gradient-dark px-3 mb-2 ms-2"
              data-class="bg-transparent"
              onclick="sidebarType(this)"
            >
              Transparent
            </button>
            <button
              class="btn bg-gradient-dark px-3 mb-2 active ms-2"
              data-class="bg-white"
              onclick="sidebarType(this)"
            >
              White
            </button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">
            You can change the sidenav type just on desktop view.
          </p>
          <!-- Navbar Fixed -->
          <div class="mt-3 d-flex">
            <h6 class="mb-0">Navbar Fixed</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input
                class="form-check-input mt-1 ms-auto"
                type="checkbox"
                id="navbarFixed"
                onclick="navbarFixed(this)"
              />
            </div>
          </div>
          <hr class="horizontal dark my-3" />
          <div class="mt-2 d-flex">
            <h6 class="mb-0">Light / Dark</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input
                class="form-check-input mt-1 ms-auto"
                type="checkbox"
                id="dark-version"
                onclick="darkMode(this)"
              />
            </div>
          </div>
          <hr class="horizontal dark my-sm-4" />
          
         
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
   
    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
  </body>
</html>
