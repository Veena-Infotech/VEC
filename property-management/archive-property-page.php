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
            <a class="collapse-item" href="/VEC/property-management/manage-property-page.php">Manage Property</a>
            <a class="collapse-item active" href="/VEC/property-management/archive-property-page.php">Archive Property</a>
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
          <div class="container py-5">
            <h2 class="text-primary fw-bold text-center mb-2">
              <i class="bi bi-archive-fill me-2"></i>Archived Properties
            </h2>

            <p class="text-muted text-center mb-4">Review and manage archived listings</p>

            <!-- Search -->
            <div class="row justify-content-center mb-4">
              <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control" placeholder="Search by property, location, agent...">
              </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-bordered table-hover text-center align-middle" id="propertyTable">
                <thead class="table-primary">
                  <tr>
                    <th><i class="bi bi-house-door-fill me-1"></i>Property</th>
                    <th><i class="bi bi-geo-alt-fill me-1"></i>Location</th>
                    <th><i class="bi bi-person-fill me-1"></i>Sold To</th>
                    <th><i class="bi bi-person-badge-fill me-1"></i>Agent</th>
                    <th><i class="bi bi-cash-coin me-1"></i>Amount</th>
                    <th><i class="bi bi-three-dots-vertical me-1"></i>Actions</th>
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <!-- JS Injects Rows Here -->
                </tbody>
              </table>
            </div>


           <nav class="mt-4">
  <ul class="pagination justify-content-center" id="pagination">
    <!-- JS will populate here -->
  </ul>
</nav>


          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

          <script>
            const archivedProperties = [{
                property: "Sea View Apartment",
                location: "Bandra",
                soldTo: "Mr. Mehta",
                agent: "Anjali",
                amount: "2.5Cr"
              },
              {
                property: "Hilltop Villa",
                location: "Lonavala",
                soldTo: "Mrs. Kapoor",
                agent: "Rohit",
                amount: "3Cr"
              },
              {
                property: "Luxury Flat",
                location: "Juhu",
                soldTo: "Mr. Shah",
                agent: "Meera",
                amount: "1.8Cr"
              },
              {
                property: "Commercial Shop",
                location: "Andheri",
                soldTo: "ABC Pvt Ltd",
                agent: "Karan",
                amount: "1.2Cr"
              },
              {
                property: "Studio Apartment",
                location: "Thane",
                soldTo: "Mr. Patil",
                agent: "Nikita",
                amount: "60L"
              },
              {
                property: "Row House",
                location: "Borivali",
                soldTo: "Mr. Agarwal",
                agent: "Ramesh",
                amount: "1.1Cr"
              },
              {
                property: "Office Space",
                location: "Powai",
                soldTo: "XYZ Ltd",
                agent: "Amit",
                amount: "2Cr"
              },
              {
                property: "3BHK Flat",
                location: "Vashi",
                soldTo: "Ms. Joshi",
                agent: "Sneha",
                amount: "90L"
              },
              {
                property: "Penthouse Suite",
                location: "Worli",
                soldTo: "Mr. Khanna",
                agent: "Neha",
                amount: "4.5Cr"
              },
              {
                property: "1BHK Studio",
                location: "Khar",
                soldTo: "Ms. Batra",
                agent: "Vikas",
                amount: "75L"
              },
              {
                property: "Industrial Shed",
                location: "Navi Mumbai",
                soldTo: "PQR Industries",
                agent: "Alok",
                amount: "3Cr"
              },
              {
                property: "4BHK Duplex",
                location: "Chembur",
                soldTo: "Mr. Nair",
                agent: "Sana",
                amount: "2.7Cr"
              },
              {
                property: "Retail Space",
                location: "Kurla",
                soldTo: "Fashion Hub",
                agent: "Mona",
                amount: "1.5Cr"
              },
              {
                property: "Farmhouse",
                location: "Karjat",
                soldTo: "Mr. & Mrs. Shetty",
                agent: "Dev",
                amount: "5Cr"
              },
              {
                property: "2BHK Apartment",
                location: "Mulund",
                soldTo: "Mr. Rao",
                agent: "Sonia",
                amount: "1Cr"
              },
              {
                property: "Resort Land",
                location: "Alibaug",
                soldTo: "Mr. Varma",
                agent: "Ravi",
                amount: "6Cr"
              },
              {
                property: "Studio Condo",
                location: "Santacruz",
                soldTo: "Ms. Pillai",
                agent: "Zoya",
                amount: "85L"
              },
              {
                property: "Luxury Office",
                location: "Lower Parel",
                soldTo: "ABC Corp",
                agent: "Deepak",
                amount: "3.2Cr"
              },
              {
                property: "Hilltop Villa",
                location: "Lonavala",
                soldTo: "Mrs. Kapoor",
                agent: "Rohit",
                amount: "3Cr"
              },
              {
                property: "Luxury Flat",
                location: "Juhu",
                soldTo: "Mr. Shah",
                agent: "Meera",
                amount: "1.8Cr"
              },
              {
                property: "Commercial Shop",
                location: "Andheri",
                soldTo: "ABC Pvt Ltd",
                agent: "Karan",
                amount: "1.2Cr"
              },
              {
                property: "Studio Apartment",
                location: "Thane",
                soldTo: "Mr. Patil",
                agent: "Nikita",
                amount: "60L"
              },
              {
                property: "Row House",
                location: "Borivali",
                soldTo: "Mr. Agarwal",
                agent: "Ramesh",
                amount: "1.1Cr"
              },
              {
                property: "Office Space",
                location: "Powai",
                soldTo: "XYZ Ltd",
                agent: "Amit",
                amount: "2Cr"
              },
              {
                property: "3BHK Flat",
                location: "Vashi",
                soldTo: "Ms. Joshi",
                agent: "Sneha",
                amount: "90L"
              },
              {
                property: "Penthouse Suite",
                location: "Worli",
                soldTo: "Mr. Khanna",
                agent: "Neha",
                amount: "4.5Cr"
              },
              {
                property: "1BHK Studio",
                location: "Khar",
                soldTo: "Ms. Batra",
                agent: "Vikas",
                amount: "75L"
              },
              {
                property: "Industrial Shed",
                location: "Navi Mumbai",
                soldTo: "PQR Industries",
                agent: "Alok",
                amount: "3Cr"
              },
              {
                property: "4BHK Duplex",
                location: "Chembur",
                soldTo: "Mr. Nair",
                agent: "Sana",
                amount: "2.7Cr"
              },
              {
                property: "Retail Space",
                location: "Kurla",
                soldTo: "Fashion Hub",
                agent: "Mona",
                amount: "1.5Cr"
              },
              {
                property: "Farmhouse",
                location: "Karjat",
                soldTo: "Mr. & Mrs. Shetty",
                agent: "Dev",
                amount: "5Cr"
              },
              {
                property: "2BHK Apartment",
                location: "Mulund",
                soldTo: "Mr. Rao",
                agent: "Sonia",
                amount: "1Cr"
              },
              {
                property: "Resort Land",
                location: "Alibaug",
                soldTo: "Mr. Varma",
                agent: "Ravi",
                amount: "6Cr"
              },
              {
                property: "Studio Condo",
                location: "Santacruz",
                soldTo: "Ms. Pillai",
                agent: "Zoya",
                amount: "85L"
              },
              {
                property: "Luxury Office",
                location: "Lower Parel",
                soldTo: "ABC Corp",
                agent: "Deepak",
                amount: "3.2Cr"
              }
            ];


            let filteredData = [...archivedProperties];
            let currentPage = 1;
            const rowsPerPage = 5;

            function renderTable(data) {
              const start = (currentPage - 1) * rowsPerPage;
              const end = start + rowsPerPage;
              const rows = data.slice(start, end);
              const tableBody = document.getElementById("tableBody");

              tableBody.innerHTML = rows.map(item => `
        <tr>
          <td>${item.property}</td>
          <td>${item.location}</td>
          <td>${item.soldTo}</td>
          <td>${item.agent}</td>
          <td>${item.amount}</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#" onclick="alert('Viewing closure summary for ${item.property}')"><i class="bi bi-file-earmark-text me-2"></i>View Summary</a></li>
                <li><a class="dropdown-item" href="#" onclick="alert('Restored ${item.property}')"><i class="bi bi-arrow-counterclockwise me-2"></i>Restore</a></li>
                <li><a class="dropdown-item text-danger" href="#" onclick="confirmDelete('${item.property}')"><i class="bi bi-trash me-2"></i>Delete Permanently</a></li>
              </ul>
            </div>
          </td>
        </tr>`).join("");

              // GSAP fade-in animation
              gsap.from("#tableBody tr", {
                duration: 0.4,
                opacity: 0,
                y: 10,
                stagger: 0.1
              });
            }

            function renderPagination(data) {
              const totalPages = Math.ceil(data.length / rowsPerPage);
              const pagination = document.getElementById("pagination");
              pagination.innerHTML = '';

              // Always show pagination if there's more than 1 page
              if (totalPages > 1) {
                // Previous button
                pagination.innerHTML += `
      <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
        <button class="page-link" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
          &laquo; Previous
        </button>
      </li>`;

                // Page numbers
                for (let i = 1; i <= totalPages; i++) {
                  pagination.innerHTML += `
        <li class="page-item ${i === currentPage ? 'active' : ''}">
          <button class="page-link" onclick="changePage(${i})">${i}</button>
        </li>`;
                }

                // Next button
                pagination.innerHTML += `
      <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
        <button class="page-link" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>
          Next &raquo;
        </button>
      </li>`;
              }
            }


            function changePage(page) {
              const totalPages = Math.ceil(filteredData.length / rowsPerPage);
              if (page < 1 || page > totalPages) return;
              currentPage = page;
              renderTable(filteredData);
              renderPagination(filteredData);
            }

            function filterTable() {
              const searchText = document.getElementById("searchInput").value.toLowerCase();
              filteredData = archivedProperties.filter(item =>
                item.property.toLowerCase().includes(searchText) ||
                item.location.toLowerCase().includes(searchText) ||
                item.soldTo.toLowerCase().includes(searchText) ||
                item.agent.toLowerCase().includes(searchText)
              );
              currentPage = 1;
              renderTable(filteredData);
              renderPagination(filteredData);
            }

            function confirmDelete(propertyName) {
              if (confirm(`Are you sure you want to permanently delete "${propertyName}"?`)) {
                alert(`"${propertyName}" deleted permanently.`);
              }
            }

            document.getElementById("searchInput").addEventListener("input", filterTable);

            // Initial render
            renderTable(filteredData);
            renderPagination(filteredData);
          </script>

        </div>
      </div>
      <!-- /.container-fluid -->


      <!-- Footer -->
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
      <!-- End of Footer -->
    </div>
    <!-- End of Main Content -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>