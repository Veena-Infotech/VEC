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
    <div class="container py-4">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-primary"><i class="bi bi-clipboard-check me-2"></i>Property Follow-Up</h2>
      <p class="text-muted">Track client interactions, statuses, and follow-ups</p>
    </div>

    <!-- Search -->
    <div class="row g-2 mb-3">
  <div class="col-md-8">
    <input type="text" id="searchInput" name="searchInput"  class="form-control form-control-sm" placeholder="Search by Client Name or Notes">
  </div>
  <div class="col-md-4">
    <select id="statusFilter" name="statusFilter" class="form-select form-select-sm">
      <option value="">Filter by Status</option>
      <option value="Interested">Interested</option>
      <option value="Visited">Visited</option>
      <option value="Negotiating">Negotiating</option>
      <option value="Finalized">Finalized</option>
    </select>
  </div>
</div>


    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-sm bg-white">
        <thead class="table-primary text-center">
          <tr>
            <th>Client Name</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Follow-Up Date</th>
            <th>Notes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="tableBody"></tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex flex-column align-items-center mt-3">
      <ul class="pagination pagination-sm mb-2" id="pagination"></ul>
      <div>
        <button class="btn btn-outline-primary btn-sm me-1" id="prevPage">
          <i class="bi bi-chevron-left"></i> Previous
        </button>
        <button class="btn btn-outline-primary btn-sm" id="nextPage">
          Next <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script>
    const data = [
      { name: "Aman Gupta", contact: "9876543210", status: "Interested", followUp: "2025-06-10", notes: "Shared Bandra details." },
      { name: "Neha Sharma", contact: "9876523450", status: "Visited", followUp: "2025-06-09", notes: "Visited Andheri site." },
      { name: "Ravi Mehta", contact: "9765432109", status: "Negotiating", followUp: "2025-06-08", notes: "Wants lower price." },
      { name: "Priya Nair", contact: "9876509876", status: "Finalized", followUp: "2025-06-07", notes: "Deal signed." },
      { name: "Suresh Kumar", contact: "9898989898", status: "Interested", followUp: "2025-06-06", notes: "Interested in 2 BHK." },
      { name: "Anjali Verma", contact: "9812345678", status: "Visited", followUp: "2025-06-05", notes: "Site review done." },
      { name: "Karan Singh", contact: "9823456789", status: "Negotiating", followUp: "2025-06-04", notes: "Wants EMI options." },
      { name: "Fatima Ali", contact: "9834567890", status: "Finalized", followUp: "2025-06-03", notes: "Final docs pending." },
      { name: "Rajeev Saini", contact: "9845678901", status: "Interested", followUp: "2025-06-02", notes: "Asked for brochure." },
      { name: "Meera Joshi", contact: "9856789012", status: "Visited", followUp: "2025-06-01", notes: "Liked flat plan." }
    ];

    let currentPage = 1;
    const rowsPerPage = 5;

    function getFilteredData() {
      const query = document.getElementById("searchInput").value.toLowerCase();
      return data.filter(entry =>
        entry.name.toLowerCase().includes(query) || entry.notes.toLowerCase().includes(query)
      );
    }

    function renderTable() {
      const filtered = getFilteredData();
      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      const sliced = filtered.slice(start, end);

      const tbody = document.getElementById("tableBody");
      tbody.innerHTML = "";

      sliced.forEach((row, i) => {
        const tr = document.createElement("tr");
        tr.innerHTML = `
          <td>${row.name}</td>
          <td>${row.contact}</td>
          <td>${row.status}</td>
          <td>${row.followUp}</td>
          <td>${row.notes}</td>
          <td class="text-center">
            <button class="btn btn-sm btn-outline-success me-1" title="Schedule Site Visit">
              <i class="bi bi-calendar-event"></i>
            </button>
            <button class="btn btn-sm btn-outline-primary" title="View Notes">
              <i class="bi bi-chat-dots"></i>
            </button>
          </td>
        `;
        tbody.appendChild(tr);
        gsap.from(tr, { opacity: 0, y: 20, duration: 0.4, delay: i * 0.05 });
      });

      renderPagination(filtered.length);
    }

    function renderPagination(total) {
      const totalPages = Math.ceil(total / rowsPerPage);
      const pagination = document.getElementById("pagination");
      pagination.innerHTML = "";

      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement("li");
        li.className = `page-item ${i === currentPage ? "active" : ""}`;
        li.innerHTML = `<button class="page-link">${i}</button>`;
        li.querySelector("button").addEventListener("click", () => {
          currentPage = i;
          renderTable();
        });
        pagination.appendChild(li);
      }

      document.getElementById("prevPage").disabled = currentPage === 1;
      document.getElementById("nextPage").disabled = currentPage === totalPages || totalPages === 0;
    }

    document.getElementById("prevPage").addEventListener("click", () => {
      if (currentPage > 1) {
        currentPage--;
        renderTable();
      }
    });

    document.getElementById("nextPage").addEventListener("click", () => {
      const totalPages = Math.ceil(getFilteredData().length / rowsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        renderTable();
      }
    });

    document.getElementById("searchInput").addEventListener("input", () => {
      currentPage = 1;
      renderTable();
    });

    renderTable();
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