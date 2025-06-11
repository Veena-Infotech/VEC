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
                        <a class="collapse-item" href="/VEC/agent-broker-management/client-ref-log.php">Client Referrals</a>
                        <a class="collapse-item active" href="/VEC/agent-broker-management/commission-manage.php">Commission and <br> Agreement Logs</a>
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
         
            <div class="container py-5">
              <!-- Page Heading -->
              <div class="text-center my-4">
                <h4 class="fw-bold text-primary mb-0">
                  <i class="bi bi-graph-up-arrow me-2"></i>Commission Entry & Summary
                </h4>
                <p class="text-muted small mt-2">Fill in commission details, calculate payable amount, and generate receipt</p>
              </div>

              <div class="container py-3">
                <div class="row g-4" style="font-size: 12px;">

                  <!-- Form Section -->
                  <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                      <div class="card-header bg-primary text-white py-2 px-3">
                        <h6 class="mb-0"><i class="bi bi-cash-coin me-2"></i>Commission Entry</h6>
                      </div>
                      <div class="card-body p-3">
                        <form id="commissionForm">

                          <!-- Deal Info -->
                          <div class="row g-2 mb-3">
                            <div class="col-md-6">
                              <label class="form-label">Deal ID</label>
                              <input type="text" id="dealId" name="dealId" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-md-6">
                              <label class="form-label">Client Name</label>
                              <input type="text" id="clientName" name="clientName" class="form-control form-control-sm" required>
                            </div>
                          </div>

                          <!-- Commission Details -->
                          <div class="row g-2 mb-3">
                            <div class="col-md-4">
                              <label class="form-label">Commission Type</label>
                              <select id="commissionType" name="commissionType" class="form-select form-select-sm">
                                <option value="standard">Standard (10%)</option>
                                <option value="custom">Deal-Specific</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label">Commission %</label>
                              <input type="number" id="commissionPercent" name="commissionPercent" class="form-control form-control-sm" value="10" readonly>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label">Deal Amount (₹)</label>
                              <input type="number" id="dealAmount" name="dealAmount" class="form-control form-control-sm" required>
                            </div>
                          </div>

                          <!-- Tax and Payment -->
                          <div class="row g-2 mb-3">
                            <div class="col-md-4">
                              <label class="form-label">GST Applicable?</label>
                              <select id="gstApplicable" name="gstApplicable" class="form-select form-select-sm">
                                <option value="yes">Yes (18%)</option>
                                <option value="no">No</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label">Commission Status</label>
                              <select id="status" name="status" class="form-select form-select-sm">
                                <option value="Paid">Paid</option>
                                <option value="Unpaid" selected>Unpaid</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label">Total Payable (₹)</label>
                              <input type="text" id="totalPayable" name="totalPayable" class="form-control form-control-sm bg-body-secondary" readonly>
                            </div>
                          </div>

                          <!-- Actions -->
                          <div class="d-flex justify-content-end gap-2 mt-2">
                            <button type="button" class="btn btn-outline-primary btn-sm" onclick="calculate()">
                              <i class="bi bi-calculator"></i> Calc
                            </button>
                            <button type="button" class="btn btn-success btn-sm" onclick="generateReceipt()">
                              <i class="bi bi-printer"></i> Receipt
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Live Summary -->
                  <div class="col-lg-5">
                    <div class="card h-100 border-start border-4 border-primary shadow-sm">
                      <div class="card-body p-3">
                        <h6 class="text-primary mb-3"><i class="bi bi-clipboard-data me-2"></i>Live Summary</h6>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item py-1"><strong>Deal ID:</strong> <span id="previewDealId">-</span></li>
                          <li class="list-group-item py-1"><strong>Client:</strong> <span id="previewClient">-</span></li>
                          <li class="list-group-item py-1"><strong>Deal Amount:</strong> ₹<span id="previewAmount">-</span></li>
                          <li class="list-group-item py-1"><strong>Commission %:</strong> <span id="previewPercent">-</span>%</li>
                          <li class="list-group-item py-1"><strong>Status:</strong> <span id="previewStatus">-</span></li>
                          <li class="list-group-item py-1"><strong>GST:</strong> <span id="previewGST">-</span></li>
                          <li class="list-group-item py-1 text-end"><strong>Total Payable:</strong> ₹<span id="previewTotal">-</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Receipt Section -->
                <div class="card mt-4 d-none d-print-block" id="receiptCard" style="font-size: 12px;">
                  <div class="card-header bg-dark text-white py-2 px-3">
                    <h6 class="mb-0"><i class="bi bi-file-earmark-text me-2"></i>Commission Payment Advice</h6>
                  </div>
                  <div class="card-body p-3">
                    <div class="mb-1"><strong>Deal ID:</strong> <span id="rDealId"></span></div>
                    <div class="mb-1"><strong>Client Name:</strong> <span id="rClientName"></span></div>
                    <div class="mb-1"><strong>Commission %:</strong> <span id="rPercent"></span>%</div>
                    <div class="mb-1"><strong>Deal Amount:</strong> ₹<span id="rAmount"></span></div>
                    <div class="mb-1"><strong>Status:</strong> <span id="rStatus"></span></div>
                    <div class="mb-1"><strong>GST Included:</strong> <span id="rGST"></span></div>
                    <hr>
                    <h6 class="text-end"><strong>Total Payable:</strong> ₹<span id="rTotal"></span></h6>
                  </div>
                </div>

              </div>

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
              <script>
                // Update commission percent field based on type
                document.getElementById('commissionType').addEventListener('change', function() {
                  const percentInput = document.getElementById('commissionPercent');
                  if (this.value === 'standard') {
                    percentInput.value = 10;
                    percentInput.readOnly = true;
                  } else {
                    percentInput.readOnly = false;
                    percentInput.focus();
                  }
                });

                // Calculate Total Payable
                function calculate() {
                  const dealAmount = parseFloat(document.getElementById('dealAmount').value) || 0;
                  const percent = parseFloat(document.getElementById('commissionPercent').value) || 0;
                  const gstYes = document.getElementById('gstApplicable').value === 'yes';
                  const status = document.getElementById('status').value;

                  const commission = (dealAmount * percent) / 100;
                  const gst = gstYes ? commission * 0.18 : 0;
                  const total = commission + gst;

                  document.getElementById('totalPayable').value = total.toFixed(2);

                  // Update Live Summary
                  document.getElementById('previewDealId').textContent = document.getElementById('dealId').value;
                  document.getElementById('previewClient').textContent = document.getElementById('clientName').value;
                  document.getElementById('previewAmount').textContent = dealAmount.toFixed(2);
                  document.getElementById('previewPercent').textContent = percent.toFixed(2);
                  document.getElementById('previewStatus').textContent = status;
                  document.getElementById('previewGST').textContent = gstYes ? 'Yes (18%)' : 'No';
                  document.getElementById('previewTotal').textContent = total.toFixed(2);
                }

                // Generate Printable Receipt
                function generateReceipt() {
                  calculate(); // Ensure values are calculated before printing

                  document.getElementById('rDealId').textContent = document.getElementById('dealId').value;
                  document.getElementById('rClientName').textContent = document.getElementById('clientName').value;
                  document.getElementById('rPercent').textContent = document.getElementById('commissionPercent').value;
                  document.getElementById('rAmount').textContent = parseFloat(document.getElementById('dealAmount').value || 0).toFixed(2);
                  document.getElementById('rGST').textContent = document.getElementById('gstApplicable').value === 'yes' ? 'Yes (18%)' : 'No';
                  document.getElementById('rStatus').textContent = document.getElementById('status').value;
                  document.getElementById('rTotal').textContent = document.getElementById('totalPayable').value;

                  // Show receipt section and print
                  document.getElementById('receiptCard').classList.remove('d-none');
                  window.print();
                }
              </script>

     

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



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