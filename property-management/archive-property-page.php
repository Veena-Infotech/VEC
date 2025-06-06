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

  <div class="container my-5">
    <h2 class="text-center mb-4"><i class="bi bi-archive"></i> Archived Properties</h2>

    <!-- Archived Properties Table -->
    <div class=" mt-3">
      <table class="table table-striped table-sm mb-0 text-center">
        <div class="row mb-3">
          <div class="col-md-6 mx-auto">
            <input type="text" id="propertySearch" class="form-control" placeholder="Search archived properties...">
          </div>
        </div>

        <thead>
          <tr>
            <th class="border-top border-translucent ps-3" data-sort="property-id">
              <i class="bi bi-hash me-1"></i> Property ID
            </th>
            <th class="border-top border-translucent ps-3" data-sort="title">
              <i class="bi bi-house-door me-1"></i> Title
            </th>
            <th class="border-top border-translucent ps-3" data-sort="location">
              <i class="bi bi-geo-alt me-1"></i> Location
            </th>
            <th class="border-top border-translucent ps-3" data-sort="owner">
              <i class="bi bi-person me-1"></i> Owner
            </th>
            <th class="border-top border-translucent ps-3" data-sort="status">
              <i class="bi bi-info-circle me-1"></i> Status
            </th>
            <th class="border-top border-translucent ps-3" data-sort="action">
              <i class="bi bi-gear me-1"></i> Action
            </th>
          </tr>
        </thead>

        <tbody class="list">
          <tr>
            <td class="align-middle ps-3 profile-id">PROP1001</td>
            <td class="align-middle ps-3 title">Oceanfront Ward</td>
            <td class="align-middle location">Miami</td>
            <td class="align-middle owner">John Smith</td>
            <td class="align-middle ps-3 status">Pending</td>
            <td class="align-middle text-center pe-0">
              <div class="btn-reveal-trigger position-static">
                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-three-dots"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                  <a class="dropdown-item" href="#!" onclick="viewClosureSummary('PROP1001')">
                    <i class="bi bi-eye me-2"></i> View
                  </a>
                  <a class="dropdown-item" href="#!" onclick="confirmRestore('PROP1001')">
                    <i class="bi bi-box-arrow-up-right me-2"></i> Restore
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="#!" onclick="confirmDelete('PROP1001')">
                    <i class="bi bi-trash3 me-2"></i> Delete
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle ps-3 profile-id">PROP1002</td>
            <td class="align-middle ps-3 title">Mountain Cabin</td>
            <td class="align-middle location">Denver</td>
            <td class="align-middle owner">Jane Doe</td>
            <td class="align-middle ps-3 status">Finalized</td>
            <td class="align-middle text-center pe-0">
              <div class="btn-reveal-trigger position-static">
                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-three-dots"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end py-2">
                  <a class="dropdown-item" href="#!" onclick="viewClosureSummary('PROP1002')">
                    <i class="bi bi-eye me-2"></i> View
                  </a>
                  <a class="dropdown-item" href="#!" onclick="confirmRestore('PROP1002')">
                    <i class="bi bi-box-arrow-up-right me-2"></i> Restore
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="#!" onclick="confirmDelete('PROP1002')">
                    <i class="bi bi-trash3 me-2"></i> Delete
                  </a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Closure Summary Modal -->
    <div class="modal fade" id="closureModal" tabindex="-1" aria-labelledby="closureModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Closure Summary</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p><strong>Buyer:</strong> Jane Smith</p>
            <p><strong>Agent:</strong> Team Alpha</p>
            <p><strong>Sale Amount:</strong> $1,200,000</p>
            <p><strong>Closure Date:</strong> 2025-05-01</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Restore Confirmation Modal -->
    <div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="restoreModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="restoreModalLabel">Confirm Restore</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to restore this item?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="confirmRestoreBtn">Restore</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to delete this item? This action cannot be undone.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div id="actionToast" class="toast align-items-center text-white bg-success border-0" role="alert">
        <div class="d-flex">
          <div class="toast-body" id="toastMessage">Action completed successfully.</div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      let selectedPropertyId = '';

      // Function to show toast notification
      function showToast(message) {
        document.getElementById("toastMessage").innerText = message;
        const toast = new bootstrap.Toast(document.getElementById("actionToast"));
        toast.show();
      }

      // Function to view closure summary
      function viewClosureSummary(propertyId) {
        // Populate modal with dynamic data based on propertyId if needed
        const modal = new bootstrap.Modal(document.getElementById("closureModal"));
        modal.show();
      }

      // Function to confirm restore
      function confirmRestore(propertyId) {
        selectedPropertyId = propertyId;
        const modal = new bootstrap.Modal(document.getElementById("restoreModal"));
        modal.show();
      }

      // Function to confirm delete
      function confirmDelete(propertyId) {
        selectedPropertyId = propertyId;
        const modal = new bootstrap.Modal(document.getElementById("deleteModal"));
        modal.show();
      }

      // Event listener for restore confirmation
      document.getElementById("confirmRestoreBtn").addEventListener("click", function() {
        // Implement restoration logic here
        showToast(`Property ${selectedPropertyId} has been restored.`);
        const modal = bootstrap.Modal.getInstance(document.getElementById("restoreModal"));
        modal.hide();
      });

      // Event listener for delete confirmation
      document.getElementById("confirmDeleteBtn").addEventListener("click", function() {
        // Implement deletion logic here
        showToast(`Property ${selectedPropertyId} has been deleted.`);
        const modal = bootstrap.Modal.getInstance(document.getElementById("deleteModal"));
        modal.hide();
      });
    </script>
    <?php include '../footer.php'; ?>

    <script>
      // Search functionality
      document.getElementById("propertySearch").addEventListener("input", function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll("tbody tr");

        rows.forEach(row => {
          const id = row.querySelector(".profile-id").textContent.toLowerCase();
          const title = row.querySelector(".title").textContent.toLowerCase();
          const location = row.querySelector(".location").textContent.toLowerCase();
          const owner = row.querySelector(".owner").textContent.toLowerCase();

          const matches = id.includes(searchTerm) || title.includes(searchTerm) || location.includes(searchTerm) || owner.includes(searchTerm);
          row.style.display = matches ? "" : "none";
        });
      });
    </script>


</body>

</html>