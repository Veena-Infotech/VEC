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
            <a class="collapse-item" href="/VEC/property-management/archive-property-page.php">Archive Property</a>
            <a class="collapse-item active" href="/VEC/property-management/follow-up-page.php">Property Follow-up</a>
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
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
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


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> </h1>
          <div class="container py-4 text-center">
            <h2 class="fs-5 fw-semibold mb-1 text-primary">
              <i class="bi bi-journal-check me-2"></i> Follow Up Management
            </h2>
            <p class="fs-4 text-muted mb-0">
              <i class="bi bi-clipboard-data me-2"></i> Manage Follow Ups for Property
            </p>
          </div>
          <section class="mb-5 rounded position-relative overflow-visible">
            <div class="table-responsive mt-4">
              <table class="table table-hover table-sm align-middle text-center small" id="buyersTable">
                <thead class=" border-bottom border-primary small">
                  <tr>
                    <th scope="col">Property ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td class="profile-id text-black">PROP1001</td>
                    <td class="title text-black">Oceanfront Condo</td>
                    <td class="location text-black">Miami</td>
                    <td class="owner text-sm text-black">John Smith</td>
                    <td>
                      <select class="form-select form-select-sm border-black text-black">
                        <option>Interested</option>
                        <option>Visited</option>
                        <option>Negotiating</option>
                        <option>Finalized</option>
                      </select>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end small" style="max-height: 300px;">
                          <li>
                            <a class="dropdown-item text-black" href="http://localhost/VEC/property-management/edit-property.php?id=PROP1001">
                              <i class="bi bi-pencil-square me-2"></i> Edit
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-black" href="#!" onclick="viewClosureSummary('PROP1001')">
                              <i class="bi bi-eye me-2"></i> View
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-black" href="#!" onclick="scheduleSiteVisit('PROP1001')">
                              <i class="bi bi-calendar-event me-2"></i> Schedule Site Visit
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item text-black" href="#!" data-bs-toggle="modal" data-bs-target="#notesModal" onclick="openNotes('PROP1001')">
                              <i class="bi bi-chat-dots me-2"></i> Add Note
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider" />
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#!" onclick="confirmDelete('PROP1001')">
                              <i class="bi bi-trash3 me-2"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>



          <!-- Bootstrap Bundle JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

          <!-- GSAP Animations -->
          <script>
            gsap.from("header", {
              duration: 1,
              y: -100,
              opacity: 0,
              ease: "bounce",
            });

            gsap.from("section", {
              duration: 1,
              y: 50,
              opacity: 0,
              stagger: 0.3,
              ease: "power1.out",
            });
          </script>

          <!-- Interactions & Search Script -->
          <script>
            function openNotes(propertyId) {
              document.getElementById("noteText").value = "";
              document.getElementById("notesList").innerHTML =
                `<li class="list-group-item">No previous notes for ${propertyId}</li>`;
            }

            document.getElementById("noteForm").addEventListener("submit", function(e) {
              e.preventDefault();
              const note = document.getElementById("noteText").value.trim();
              if (note) {
                const li = document.createElement("li");
                li.className = "list-group-item";
                li.textContent = note;
                document.getElementById("notesList").appendChild(li);
                document.getElementById("noteText").value = "";
              }
            });

            function scheduleSiteVisit(propertyId) {
              alert(`Site visit scheduled for ${propertyId} (This is a placeholder action)`);
            }

            function confirmDelete(propertyId) {
              if (confirm(`Are you sure you want to delete property ${propertyId}?`)) {
                alert(`Deleted ${propertyId} (This is a placeholder action)`);
              }
            }

            function viewClosureSummary(propertyId) {
              alert(`Viewing closure summary for ${propertyId} (This is a placeholder action)`);
            }

            document.getElementById('searchInput').addEventListener('keyup', function() {
              const filter = this.value.toLowerCase();
              const rows = document.querySelectorAll('#buyersTable tbody tr');

              rows.forEach(row => {
                const propertyId = row.querySelector('.profile-id')?.textContent.toLowerCase() || '';
                const title = row.querySelector('.title')?.textContent.toLowerCase() || '';
                const location = row.querySelector('.location')?.textContent.toLowerCase() || '';
                const owner = row.querySelector('.owner')?.textContent.toLowerCase() || '';

                row.style.display = (
                  propertyId.includes(filter) ||
                  title.includes(filter) ||
                  location.includes(filter) ||
                  owner.includes(filter)
                ) ? '' : 'none';
              });
            });
          </script>
        </div>
      </div>

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