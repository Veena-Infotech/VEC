<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Archived Properties</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
  <?php include '../navbar.php'; ?>

  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold"><i class="bi bi-archive-fill text-primary me-2"></i>Archived Properties</h2>
      <p class="text-muted">Review and manage previously archived listings.</p>
    </div>

    <!-- Search Input -->
    <div class="row justify-content-center mb-4">
      <div class="col-md-6">
        <div class="input-group shadow-sm">
          <span class="input-group-text bg-primary text-white"><i class="bi bi-search"></i></span>
          <input type="text" id="propertySearch" class="form-control" placeholder="Search archived properties...">
        </div>
      </div>
    </div>

    <!-- Table Card -->
    <div class="card shadow-sm border-0">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0 text-center">
            <thead class="table-light">
              <tr>
                <th><i class="bi bi-hash me-1"></i>Property ID</th>
                <th><i class="bi bi-house-door me-1"></i>Title</th>
                <th><i class="bi bi-geo-alt me-1"></i>Location</th>
                <th><i class="bi bi-person me-1"></i>Owner</th>
                <th><i class="bi bi-info-circle me-1"></i>Status</th>
                <th><i class="bi bi-gear me-1"></i>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PROP1001</td>
                <td>Oceanfront Ward</td>
                <td>Miami</td>
                <td>John Smith</td>
                <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#!" onclick="viewClosureSummary('PROP1001')"><i class="bi bi-eye me-2"></i>View</a></li>
                      <li><a class="dropdown-item" href="#!" onclick="confirmRestore('PROP1001')"><i class="bi bi-box-arrow-up-right me-2"></i>Restore</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item text-danger" href="#!" onclick="confirmDelete('PROP1001')"><i class="bi bi-trash3 me-2"></i>Delete</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>PROP1002</td>
                <td>Mountain Cabin</td>
                <td>Denver</td>
                <td>Jane Doe</td>
                <td><span class="badge bg-success-subtle text-success">Finalized</span></td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#!" onclick="viewClosureSummary('PROP1002')"><i class="bi bi-eye me-2"></i>View</a></li>
                      <li><a class="dropdown-item" href="#!" onclick="confirmRestore('PROP1002')"><i class="bi bi-box-arrow-up-right me-2"></i>Restore</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item text-danger" href="#!" onclick="confirmDelete('PROP1002')"><i class="bi bi-trash3 me-2"></i>Delete</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modals and Toast remain same (you already included them) -->

    <?php include '../footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      let selectedPropertyId = '';

      function showToast(message) {
        document.getElementById("toastMessage").innerText = message;
        const toast = new bootstrap.Toast(document.getElementById("actionToast"));
        toast.show();
      }

      function viewClosureSummary(propertyId) {
        const modal = new bootstrap.Modal(document.getElementById("closureModal"));
        modal.show();
      }

      function confirmRestore(propertyId) {
        selectedPropertyId = propertyId;
        const modal = new bootstrap.Modal(document.getElementById("restoreModal"));
        modal.show();
      }

      function confirmDelete(propertyId) {
        selectedPropertyId = propertyId;
        const modal = new bootstrap.Modal(document.getElementById("deleteModal"));
        modal.show();
      }

      document.getElementById("confirmRestoreBtn").addEventListener("click", function () {
        showToast(`Property ${selectedPropertyId} has been restored.`);
        const modal = bootstrap.Modal.getInstance(document.getElementById("restoreModal"));
        modal.hide();
      });

      document.getElementById("confirmDeleteBtn").addEventListener("click", function () {
        showToast(`Property ${selectedPropertyId} has been deleted.`);
        const modal = bootstrap.Modal.getInstance(document.getElementById("deleteModal"));
        modal.hide();
      });

      // Search functionality
      document.getElementById("propertySearch").addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll("tbody tr");

        rows.forEach(row => {
          const id = row.cells[0].textContent.toLowerCase();
          const title = row.cells[1].textContent.toLowerCase();
          const location = row.cells[2].textContent.toLowerCase();
          const owner = row.cells[3].textContent.toLowerCase();

          row.style.display = id.includes(searchTerm) || title.includes(searchTerm) || location.includes(searchTerm) || owner.includes(searchTerm) ? '' : 'none';
        });
      });
    </script>
  </div>
</body>

</html>
