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
        Interface
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
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Add Property</a>
            <a class="collapse-item" href="cards.html">Manage Property</a>
            <a class="collapse-item" href="cards.html">Archive Property</a>
            <a class="collapse-item" href="cards.html">Property Follow-up</a>
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
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Add Customer</a>
            <a class="collapse-item" href="utilities-border.html">Manage Customer</a>
            <a class="collapse-item" href="utilities-animation.html">Customer Closure log</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Agent
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Agent</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Add Agent</a>
            <a class="collapse-item" href="register.html">Agent Properties</a>
            <a class="collapse-item" href="forgot-password.html">Client Referrals</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">Commission and <br> Agreement Logs</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
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
          <h1 class="h3 mb-4 text-gray-800">
            <div class="container py-5 small">
              <h1 class="mb-4 text-dark fw-bold text-center small">Manage Customer</h1>

              <!-- Filter Card -->
              <div class="card shadow-sm mb-4 border-muted bg-white">
                <div class="card-header bg-light text-dark fw-semibold border-bottom border-muted small">
                  Search & Filter Customers
                </div>
                <div class="card-body">
                  <form class="row g-3" id="filterForm">
                    <div class="col-md-3">
                      <label for="filterType" class="form-label text-secondary small">Type</label>
                      <select id="filterType" name="filterType" class="form-select border-muted form-select-sm">
                        <option value="" selected>All Types</option>
                        <option value="Buyer">Buyer</option>
                        <option value="Seller">Seller</option>
                        <option value="Investor">Investor</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="filterBudget" class="form-label text-secondary small">Budget</label>
                      <select id="filterBudget" name="filterBudget" class="form-select border-muted form-select-sm">
                        <option value="" selected>All Budgets</option>
                        <option value="low">&lt; $100,000</option>
                        <option value="medium">$100,000 - $500,000</option>
                        <option value="high">&gt; $500,000</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="filterLocation" class="form-label text-secondary small">Location</label>
                      <select id="filterLocation" name="filterLocation" class="form-select border-muted form-select-sm">
                        <option value="" selected>All Locations</option>
                        <option value="New York">New York</option>
                        <option value="San Francisco">San Francisco</option>
                        <option value="Miami">Miami</option>
                      </select>
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                      <button type="button" id="btnFilter" class="btn btn-outline-dark w-100 btn-sm">Apply Filters</button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Customer Info Section -->
              <div id="customerContainer"></div>
            </div>


            <script>
              gsap.from("h1", {
                duration: 1,
                y: -40,
                opacity: 0,
                ease: "power2.out"
              });
              gsap.from(".card", {
                duration: 0.8,
                opacity: 0,
                y: 20,
                stagger: 0.2,
                delay: 0.3
              });

              const customerContainer = document.getElementById("customerContainer");

              // Sample customer data
              const customers = [{
                  name: "John Doe",
                  type: "Buyer",
                  budget: "medium",
                  location: "New York",
                  status: "Looking",
                  agent: "Agent A"
                },
                {
                  name: "Jane Smith",
                  type: "Seller",
                  budget: "high",
                  location: "San Francisco",
                  status: "On Hold",
                  agent: "Agent B"
                },
                {
                  name: "Ali Khan",
                  type: "Investor",
                  budget: "low",
                  location: "Miami",
                  status: "Closed Deal",
                  agent: "Agent C"
                }
              ];

              function renderCustomers(filteredCustomers) {
                customerContainer.innerHTML = "";

                if (filteredCustomers.length === 0) {
                  customerContainer.innerHTML = `<div class="alert alert-warning">No matching customers found.</div>`;
                  return;
                }

                filteredCustomers.forEach((customer, index) => {
                  const card = document.createElement("div");
                  card.className = "card shadow-sm mb-4 border-muted bg-white";

                  const noteInputId = `noteInput-${index}`;
                  const notesListId = `notesList-${index}`;
                  const addNoteBtnId = `addNoteBtn-${index}`;

                  card.innerHTML = `
      <div class="card-header d-flex justify-content-between align-items-center bg-light text-dark fw-semibold border-bottom border-muted">
        <span>Customer: <strong>${customer.name}</strong></span>
        <select class="form-select form-select-sm w-auto border-muted">
          <option${customer.status === "Looking" ? " selected" : ""}>Looking</option>
          <option${customer.status === "On Hold" ? " selected" : ""}>On Hold</option>
          <option${customer.status === "Closed Deal" ? " selected" : ""}>Closed Deal</option>
        </select>
      </div>
      <div class="card-body">
        <p class="mb-2 text-secondary">Type: ${customer.type}</p>
        <p class="mb-2 text-secondary">Budget: ${customer.budget}</p>
        <p class="mb-2 text-secondary">Location: ${customer.location}</p>

        <div class="d-flex align-items-center gap-2 mb-3">
          <label class="text-secondary mb-0">Assigned Agent:</label>
          <select class="form-select form-select-sm border-muted" style="width: 200px;">
            <option ${customer.agent === "Agent A" ? "selected" : ""}>Agent A</option>
            <option ${customer.agent === "Agent B" ? "selected" : ""}>Agent B</option>
            <option ${customer.agent === "Agent C" ? "selected" : ""}>Agent C</option>
          </select>
        </div>

        <h6 class="text-secondary">Follow-up Notes</h6>
        <div id="${notesListId}" class="bg-light border border-muted rounded p-3 mb-3" style="max-height: 180px; overflow-y: auto;"></div>

        <div class="input-group">
          <input type="text" id="${noteInputId}" class="form-control border-muted" placeholder="Add a follow-up note..." />
          <button id="${addNoteBtnId}" class="btn btn-outline-dark" type="button">Add Note</button>
        </div>
      </div>
    `;

                  customerContainer.appendChild(card);

                  // Set up note functionality per customer card
                  const noteInput = card.querySelector(`#${noteInputId}`);
                  const notesList = card.querySelector(`#${notesListId}`);
                  const addNoteBtn = card.querySelector(`#${addNoteBtnId}`);

                  const addNote = () => {
                    const text = noteInput.value.trim();
                    if (!text) return;

                    const timestamp = new Date().toLocaleString();
                    const noteItem = document.createElement("div");
                    noteItem.className = "border border-muted rounded bg-white p-2 mb-2";
                    noteItem.innerHTML = `
        <div class="d-flex justify-content-between">
          <div class="text-secondary">${text}</div>
          <small class="text-muted">${timestamp}</small>
        </div>
      `;
                    notesList.prepend(noteItem);
                    noteInput.value = "";

                    gsap.from(noteItem, {
                      duration: 0.5,
                      opacity: 0,
                      y: 20
                    });
                  };

                  addNoteBtn.addEventListener("click", addNote);
                  noteInput.addEventListener("keypress", e => {
                    if (e.key === "Enter") addNote();
                  });

                  gsap.from(card, {
                    duration: 0.4,
                    opacity: 0,
                    y: 20
                  });
                });
              }


              document.getElementById("btnFilter").addEventListener("click", () => {
                const type = document.getElementById("filterType").value;
                const budget = document.getElementById("filterBudget").value;
                const location = document.getElementById("filterLocation").value;

                const filtered = customers.filter(c =>
                  (type === "" || c.type === type) &&
                  (budget === "" || c.budget === budget) &&
                  (location === "" || c.location === location)
                );

                renderCustomers(filtered);
              });

              // Initial render
              renderCustomers(customers);
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <?php include '../footer.php'; ?>
          </h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
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