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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>

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
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/VEC/property-management/add-property-page.php">Add Property</a>
                        <a class="collapse-item active" href="/VEC/property-management/manage-property-page.php">Manage Property</a>
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
                <div id="collapsePages" class="collapse " aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/VEC/agent-broker-management/add-agent-page.php">Add Agent</a>
                        <a class="collapse-item" href="/VEC/agent-broker-management/agent-linked-property.php">Agent Properties</a>
                        <a class="collapse-item" href="/VEC/agent-broker-management/client-ref-log.php">Client Referrals</a>
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

          <!-- Page Heading -->
          <h3 class="h3 mb-4 text-gray-800"> </h3>
            <div class="container py-3 small">
              <div class="text-center me-4 mt-2 mb-4">
                <i class="bi bi-house-gear-fill text-primary fs-4 d-block mb-2"></i>
                <h5 class="fw-semibold fs-4 mb-1">Property Management</h5>
                <p class="text-muted small mb-0">Manage, filter, and act on property listings</p>
              </div>


              <div class="card shadow-sm mb-4 border-0 mt-2">
                <div class="card-body p-3">
                  <form id="filterForm" class="row g-3 align-items-end small">
                    <div class="col-md-4">
                      <label for="filterLocation" class="form-label fw-semibold text-secondary">
                        <i class="bi bi-geo-alt me-1"></i> Location
                      </label>
                      <input type="text" class="form-control form-control-sm" id="filterLocation" name="location" placeholder="Enter location" />
                    </div>
                    <div class="col-md-4">
                      <label for="filterOwner" class="form-label fw-semibold text-secondary">
                        <i class="bi bi-person me-1"></i> Owner
                      </label>
                      <input type="text" class="form-control form-control-sm" id="filterOwner" name="owner" placeholder="Enter owner name" />
                    </div>
                    <div class="col-md-3">
                      <label for="filterStatus" class="form-label fw-semibold text-secondary">
                        <i class="bi bi-filter-circle me-1"></i> Status
                      </label>
                      <select class="form-select form-select-sm" id="filterStatus" name="status">
                        <option value="">All</option>
                        <option>Available</option>
                        <option>Sold</option>
                        <option>Rented</option>
                        <option>Archived</option>
                      </select>
                    </div>
                    <div class="col-md-1 d-flex align-items-end">
                      <button type="button" class="btn btn-outline-primary btn-sm w-100" id="applyFilters" title="Apply Filters">
                        <i class="bi bi-funnel"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="table-responsive shadow-sm">
                <table id="propertyTable" class="table table-hover table-borderless align-middle mb-0 text-nowrap small">
                  <thead class="table-primary">
                    <tr>
                      <th>Property ID</th>
                      <th>Title</th>
                      <th>Location</th>
                      <th>Owner</th>
                      <th>Status</th>
                      <th>Agent</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    <tr>
                      <td>PROP001</td>
                      <td>Sea View Villa</td>
                      <td>Goa</td>
                      <td>Jane Smith</td>
                      <td><span class="badge bg-success">Available</span></td>
                      <td>Team A</td>
                      <td class="text-center">
                        <div class="btn-group btn-group-sm">
                          <a href="edit-property.php" class="btn btn-outline-secondary" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                          </a>
                          <button class="btn btn-outline-info" onclick="openPreviewModal()" title="Preview">
                            <i class="bi bi-images"></i>
                          </button>
                          <button class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" title="More Actions"></button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#" onclick="assignAgent('PROP001')"><i class="bi bi-person-plus"></i> Assign Agent</a></li>
                            <li><a class="dropdown-item" href="#" onclick="showToast('Marked as Sold')"><i class="bi bi-check-circle"></i> Mark as Sold</a></li>
                            <li><a class="dropdown-item" href="#" onclick="showToast('Marked as Rented')"><i class="bi bi-house-door"></i> Mark as Rented</a></li>
                            <li><a class="dropdown-item text-danger" href="#" onclick="showToast('Archived')"><i class="bi bi-archive"></i> Archive</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <!-- Add more rows similarly -->
                  </tbody>
                </table>
              </div>
            </div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
              function showToast(message) {
                document.getElementById("toastMessage").innerText = message;
                new bootstrap.Toast(document.getElementById("confirmationToast")).show();
              }

              function openPreviewModal() {
                new bootstrap.Modal(document.getElementById("previewModal")).show();
              }

              function assignAgent(id) {
                const agents = ["Team A", "Team B", "Team C"];
                let agent = prompt("Assign to agent/team:", agents.join(", "));
                if (agent) showToast(`Assigned to ${agent}`);
              }

              gsap.from("table", {
                scrollTrigger: {
                  trigger: "table",
                  start: "top 90%",
                },
                y: 50,
                opacity: 0,
                duration: 1,
              });

              document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("applyFilters").addEventListener("click", function() {
                  const locationVal = document.getElementById("filterLocation").value.toLowerCase();
                  const ownerVal = document.getElementById("filterOwner").value.toLowerCase();
                  const statusVal = document.getElementById("filterStatus").value.toLowerCase();

                  document.querySelectorAll("#propertyTable tbody tr").forEach((row) => {
                    const location = row.cells[2].innerText.toLowerCase();
                    const owner = row.cells[3].innerText.toLowerCase();
                    const status = row.cells[4].innerText.toLowerCase();
                    const matchLoc = location.includes(locationVal);
                    const matchOwner = owner.includes(ownerVal);
                    const matchStatus = statusVal === "" || status.includes(statusVal);
                    row.style.display = matchLoc && matchOwner && matchStatus ? "" : "none";
                  });
                });
              });
            </script>


        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>




  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>