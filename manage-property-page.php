<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Properties</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- DataTables Bootstrap5 -->

  <!-- GSAP -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>

  <style>
    .table-responsive {
      overflow: visible !important;
    }

    .dropdown-menu {
      z-index: 1055 !important;
    }
  </style>
</head>

<body class="bg-light">

  <div class="container my-5">
    <h2 class="text-center mb-4"><i class="bi bi-house-gear"></i> Property Management</h2>

    <!-- Filters -->
    <div class="mb-4">
      <input type="text" class="form-control" id="multiSearchInput" placeholder="Search by location / owner / status">
    </div>

    <!-- Property Table -->
    <div class="table-responsive mt-4">
      <table id="propertyTable" class="table table-striped table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>Property ID</th>
            <th>Title</th>
            <th>Location</th>
            <th>Owner</th>
            <th>Status</th>
            <th>Agent</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>PROP001</td>
            <td>Sea View Villa</td>
            <td>Goa</td>
            <td>Jane Smith</td>
            <td><span class="badge bg-success">Available</span></td>
            <td>Team A</td>
            <td class="position-relative">
              <div class="btn-group">
                <button class="btn btn-sm btn-outline-secondary" onclick="openEditModal('PROP001')"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-outline-info" onclick="openPreviewModal()"><i class="bi bi-images"></i></button>
                <button class="btn btn-sm btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-gear"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" onclick="assignAgent('PROP001')"><i class="bi bi-person-plus"></i> Assign Agent</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showToast('Marked as Sold')"><i class="bi bi-check-circle"></i> Mark as Sold</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showToast('Marked as Rented')"><i class="bi bi-house-door"></i> Mark as Rented</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showToast('Archived')"><i class="bi bi-archive"></i> Archive</a></li>
                </ul>
              </div>
            </td>
          </tr>
          <!-- More rows can be added -->
          <tr>
            <td>PROP001</td>
            <td>Sea View Villa</td>
            <td>Mumbai</td>
            <td>Mushraf Smith</td>
            <td><span class="badge bg-success">Available</span></td>
            <td>Team A</td>
            <td class="position-relative">
              <div class="btn-group">
                <button class="btn btn-sm btn-outline-secondary" onclick="openEditModal('PROP001')"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-outline-info" onclick="openPreviewModal()"><i class="bi bi-images"></i></button>
                <button class="btn btn-sm btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-gear"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" onclick="assignAgent('PROP001')"><i class="bi bi-person-plus"></i> Assign Agent</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showToast('Marked as Sold')"><i class="bi bi-check-circle"></i> Mark as Sold</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showToast('Marked as Rented')"><i class="bi bi-house-door"></i> Mark as Rented</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showToast('Archived')"><i class="bi bi-archive"></i> Archive</a></li>
                </ul>
              </div>
            </td>
          </tr>


        </tbody>
      </table>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
      <form class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Property</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control mb-2" placeholder="Title" value="Sea View Villa">
          <input type="text" class="form-control mb-2" placeholder="Location" value="Goa">
          <input type="text" class="form-control mb-2" placeholder="Owner" value="Jane Smith">
          <select class="form-select mb-2">
            <option>Available</option>
            <option>Sold</option>
            <option>Rented</option>
            <option>Archived</option>
          </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" onclick="showToast('Updated Successfully')" type="button">Save</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Image Preview Modal -->
  <div class="modal fade" id="previewModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Property Preview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"><img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="..."></div>
              <div class="carousel-item"><img src="https://via.placeholder.com/800x400/ddd" class="d-block w-100" alt="..."></div>
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
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="confirmationToast" class="toast align-items-center text-white bg-success border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body" id="toastMessage">Action done.</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
 <script>
  function showToast(message) {
    document.getElementById("toastMessage").innerText = message;
    new bootstrap.Toast(document.getElementById("confirmationToast")).show();
  }

  function openEditModal(id) {
    new bootstrap.Modal(document.getElementById("editModal")).show();
  }

  function openPreviewModal() {
    new bootstrap.Modal(document.getElementById("previewModal")).show();
  }

  function assignAgent(id) {
    const agents = ["Team A", "Team B", "Team C"];
    let agent = prompt("Assign to agent/team:", agents.join(", "));
    if (agent) showToast(`Assigned to ${agent}`);
  }

  // ✅ Basic search logic
  document.getElementById("multiSearchInput").addEventListener("input", function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll("#propertyTable tbody tr");

    rows.forEach(row => {
      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(filter) ? "" : "none";
    });
  });

  // Optional GSAP
  gsap.from("table", {
    scrollTrigger: {
      trigger: "table",
      start: "top 90%",
    },
    y: 50,
    opacity: 0,
    duration: 1
  });
</script>




</body>

</html>