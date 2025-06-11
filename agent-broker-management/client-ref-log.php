<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VEC</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VEC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pages
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Property</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/VEC/property-management/add-property-page.php">Add Property</a>
            <a class="collapse-item" href="/VEC/property-management/manage-property-page.php">Manage Property</a>
            <a class="collapse-item" href="/VEC/property-management/archive-property-page.php">Archive Property</a>
            <a class="collapse-item" href="/VEC/property-management/follow-up-page.php">Property Follow-up</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Customers</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/VEC/customer-management/add-customer.php">Add Customer</a>
            <a class="collapse-item" href="/VEC/customer-management/manage-customer.php">Manage Customer</a>
            <a class="collapse-item" href="/VEC/customer-management/customer-closer-log.php">Customer Closure log</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Agent</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/VEC/agent-broker-management/add-agent-page.php">Add Agent</a>
            <a class="collapse-item" href="/VEC/agent-broker-management/agent-linked-property.php">Agent Properties</a>
            <a class="collapse-item active" href="/VEC/agent-broker-management/client-ref-log.php">Client Referrals</a>
            <a class="collapse-item" href="/VEC/agent-broker-management/commission-manage.php">Commission and <br> Agreement Logs</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Meetings and Follow-up</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                      placeholder="Search for..." aria-label="Search"
                      aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                      alt="...">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                      problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                      alt="...">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                      would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                      alt="...">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                      the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                      alt="...">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                      told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle"
                  src="img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



          <div class="container mt-4 small">
            <!-- Header -->
            <div class="text-black p-4 rounded mb-4 text-center" id="header">
              <h2 class="mb-0 fs-5 text-primary">Client Referral Log</h2>
              <small class="text-muted">Track client referrals, matching properties, and commissions</small>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs mb-3 small" id="tabs">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#clients">Clients Referred</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#properties">Matching Properties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#commission">Deal Closure & Commission</a>
              </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
              <!-- Clients Referred -->
              <div class="tab-pane fade show active" id="clients">
                <div class="d-flex justify-content-between mb-2 align-items-center">
                  <h5 class="fs-6 mb-0">Clients Referred by Agent</h5>
                  <a href="http://localhost/VEC/customer-management/add-customer.php" class="btn btn-outline-primary btn-sm small">+ Add New Client</a>
                </div>

                <div class="table-responsive">
                  <table class="table table-bordered table-sm align-middle shadow-sm small" id="clientTable">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Referral Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John Smith</td>
                        <td>john.smith@example.com</td>
                        <td>(555) 123-4567</td>
                        <td>2023-09-15</td>
                        <td><span class="badge bg-light text-dark small">Active</span></td>
                        <td>
                          <a href="http://localhost/VEC/customer-management/view-customer.php" class="btn btn-outline-primary btn-sm small">View</a>
                          <a href="http://localhost/VEC/customer-management/edit-customer.php" class="btn btn-outline-secondary btn-sm small">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Emma Johnson</td>
                        <td>emmaj@example.com</td>
                        <td>(555) 987-6543</td>
                        <td>2023-10-02</td>
                        <td><span class="badge bg-light text-dark small">Closed</span></td>
                        <td>
                          <a href="http://localhost/VEC/customer-management/view-customer.php" class="btn btn-outline-primary btn-sm small">View</a>
                          <a href="http://localhost/VEC/customer-management/edit-customer.php" class="btn btn-outline-secondary btn-sm small">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Michael Davis</td>
                        <td>michael.d@example.com</td>
                        <td>(555) 456-7890</td>
                        <td>2023-10-10</td>
                        <td><span class="badge bg-light text-dark small">Active</span></td>
                        <td>
                          <a href="http://localhost/VEC/customer-management/view-customer.php" class="btn btn-outline-primary btn-sm small">View</a>
                          <a href="http://localhost/VEC/customer-management/edit-customer.php" class="btn btn-outline-secondary btn-sm small">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Sophia Rodriguez</td>
                        <td>sophia.r@example.com</td>
                        <td>(555) 234-5678</td>
                        <td>2023-11-05</td>
                        <td><span class="badge bg-light text-dark small">Pending</span></td>
                        <td>
                          <a href="http://localhost/VEC/customer-management/view-customer.php" class="btn btn-outline-primary btn-sm small">View</a>
                          <a href="http://localhost/VEC/customer-management/edit-customer.php" class="btn btn-outline-secondary btn-sm small">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Robert Wilson</td>
                        <td>robert.w@example.com</td>
                        <td>(555) 876-5432</td>
                        <td>2023-11-20</td>
                        <td><span class="badge bg-light text-dark small">Active</span></td>
                        <td>
                          <a href="http://localhost/VEC/customer-management/view-customer.php" class="btn btn-outline-primary btn-sm small">View</a>
                          <a href="http://localhost/VEC/customer-management/edit-customer.php" class="btn btn-outline-secondary btn-sm small">Edit</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- Summary Cards -->
                <div class="row text-white mt-4" id="cards">
                  <div class="col-md-4 mb-2">
                    <div class="bg-primary p-3 rounded text-center small">
                      <h6 class="fs-6 mb-1">Total Clients</h6>
                      <h5 class="fs-5 mb-0">5</h5>
                    </div>
                  </div>
                  <div class="col-md-4 mb-2">
                    <div class="bg-success p-3 rounded text-center small">
                      <h6 class="fs-6 mb-1">Active Properties</h6>
                      <h5 class="fs-5 mb-0">5</h5>
                    </div>
                  </div>
                  <div class="col-md-4 mb-2">
                    <div class="bg-info p-3 rounded text-center small">
                      <h6 class="fs-6 mb-1">Total Commission</h6>
                      <h5 class="fs-5 mb-0">$47,400</h5>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Matching Properties -->
              <div class="tab-pane fade" id="properties">
                <h5 class="mt-3 fs-6">Matching Properties</h5>
                <div class="table-responsive mt-2">
                  <table class="table table-bordered table-sm align-middle shadow-sm small">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>Property</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Client</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Sunset Villa</td>
                        <td>Miami, FL</td>
                        <td>$850,000</td>
                        <td>John Smith</td>
                        <td><span class="badge bg-light text-dark small">Viewing Scheduled</span></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Lakefront Condo</td>
                        <td>Chicago, IL</td>
                        <td>$450,000</td>
                        <td>Emma Johnson</td>
                        <td><span class="badge bg-light text-dark small">Interested</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Urban Loft</td>
                        <td>New York, NY</td>
                        <td>$1,200,000</td>
                        <td>Michael Davis</td>
                        <td><span class="badge bg-light text-dark small">Negotiating</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Deal Closure & Commission -->
              <div class="tab-pane fade" id="commission">
                <h5 class="mt-3 fs-6">Deal Closures & Commissions</h5>
                <div class="table-responsive mt-2">
                  <table class="table table-bordered table-sm align-middle shadow-sm small">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>Client</th>
                        <th>Property</th>
                        <th>Deal Date</th>
                        <th>Commission %</th>
                        <th>Commission Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John Smith</td>
                        <td>Sunset Villa</td>
                        <td>2023-12-01</td>
                        <td>5%</td>
                        <td>$42,500</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Emma Johnson</td>
                        <td>Lakefront Condo</td>
                        <td>2023-12-15</td>
                        <td>4%</td>
                        <td>$18,000</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Michael Davis</td>
                        <td>Urban Loft</td>
                        <td>2024-01-05</td>
                        <td>6%</td>
                        <td>$72,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <!-- GSAP Animations -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

          <script>
            // Initial entrance
            gsap.from("#header", {
              y: -50,
              opacity: 0,
              duration: 1
            });
            gsap.from("#tabs", {
              y: -20,
              opacity: 0,
              duration: 1,
              delay: 0.5
            });
            gsap.from("#clientTable tbody tr", {
              y: 20,
              opacity: 0,
              duration: 0.6,
              delay: 1,
              stagger: 0.1
            });
            gsap.from("#cards .col-md-4", {
              y: 30,
              opacity: 0,
              duration: 0.6,
              delay: 1.5,
              stagger: 0.2
            });

            // Hover animation for cards
            document.querySelectorAll('.summary-card').forEach(card => {
              card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                  scale: 1.05,
                  duration: 0.2
                });
              });
              card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                  scale: 1,
                  duration: 0.2
                });
              });
            });

            // Tab content animation
            document.querySelectorAll('.nav-link').forEach(tab => {
              tab.addEventListener('shown.bs.tab', function(e) {
                const target = document.querySelector(e.target.getAttribute('href'));
                gsap.from(target.querySelectorAll('table, h5'), {
                  y: 40,
                  opacity: 0,
                  duration: 0.6,
                  stagger: 0.2
                });
              });
            });
          </script>


        </div>

      </div>
    </div>

  </div>
  <!-- End of Page Wrapper -->

  <!-- footer -->

  <footer class="sticky-footer bg-white text-dark py-4 mt-auto">
    <hr class="border-top border-dark opacity-25 mb-4" />

    <div class="container text-center">
      <div class="mb-3">
        <p class="mb-1 fw-semibold">© 2025 Veena Group. All Rights Reserved.</p>
        <p class="mb-3 small">Empowering Mumbai’s Real Estate Market through Smart Digital Solutions.</p>
      </div>

      <nav class="mb-3 d-flex justify-content-center gap-4 flex-wrap">
            <a href="#" class="text-decoration-none text-primary fw-semibold small">Privacy Policy</a>
            <a href="#" class="text-decoration-none text-primary fw-semibold small">Terms of Service</a>
            <a href="#" class="text-decoration-none text-primary fw-semibold small">Contact Us</a>
          </nav>

          <div class="d-flex justify-content-center gap-3">
            <a href="#" class="text-primary fs-5" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-primary fs-5" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-primary fs-5" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>

    </div>
  </footer>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>