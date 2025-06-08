<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Properties</title>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
</head>

<body class="bg-light">
  <?php include '../navbar.php'; ?>

  <div class="container py-3">
    <div class="bg-white px-4 py-3 rounded shadow-sm border-start border-3 border-primary mb-4">
      <div class="d-flex align-items-center gap-3">
        <i class="bi bi-house-gear-fill text-primary fs-4"></i>
        <div>
          <h5 class="mb-1 fw-semibold">Property Management</h5>
          <p class="mb-0 text-muted small">Manage, filter, and act on property listings</p>
        </div>
      </div>
    </div>
  </div>


  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <form id="filterForm" class="row g-3 align-items-middle">
        <div class="col-md-4">
          <label for="filterLocation" class="form-label"><i class="bi bi-geo-alt"></i> Location</label>
          <input type="text" class="form-control" id="filterLocation" name="location" placeholder="Enter location" />
        </div>
        <div class="col-md-4">
          <label for="filterOwner" class="form-label"><i class="bi bi-person"></i> Owner</label>
          <input type="text" class="form-control" id="filterOwner" name="owner" placeholder="Enter owner name" />
        </div>
        <div class="col-md-3">
          <label for="filterStatus" class="form-label"><i class="bi bi-filter-circle"></i> Status</label>
          <select class="form-select" id="filterStatus" name="status">
            <option value="">All</option>
            <option>Available</option>
            <option>Sold</option>
            <option>Rented</option>
            <option>Archived</option>
          </select>
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-outline-primary w-100" id="applyFilters"><i class="bi bi-funnel"></i></button>
        </div>
      </form>
    </div>
  </div>

  <div class="table-responsive shadow-sm">
    <table id="propertyTable" class="table table-hover table-borderless align-middle">
      <thead class="table-primary">
        <tr class="text-nowrap">
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
            <div class="btn-group">
              <a href="edit-property.php" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></a>
              <button class="btn btn-sm btn-outline-info" onclick="openPreviewModal()" title="Preview"><i class="bi bi-images"></i></button>
              <button class="btn btn-sm btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" title="More Actions"><i class="bi bi-gear"></i></button>
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

  <!-- Preview Modal -->
  <div class="modal fade" id="previewModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content shadow">
        <div class="modal-header">
          <h5 class="modal-title">Property Preview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-0">
          <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400/ddd" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080">
    <div id="confirmationToast" class="toast align-items-center text-white bg-success border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body" id="toastMessage">Action done.</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
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

  <?php include '../footer.php'; ?>
</body>

</html>