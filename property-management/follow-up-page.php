<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Follow Up Page | Property</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- GSAP Library -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

  <style>
    th,
    td {
      text-align: center;
      vertical-align: middle;
    }

    .form-select-sm {
      min-width: 120px;
    }

    #searchInput {
      padding: 0.4rem 0.75rem;
    }
  </style>
</head>

<body class="bg-light text-dark">

  <!-- Title Section -->
  <div class="py-4 text-center bg-white shadow-sm mb-5">
    <div class="fs-2 fw-semibold">
      <i class="bi bi-building"></i> Follow Up Management
    </div>
    <p class="fs-6 text-muted mb-0">Manage Follow Ups for property</p>
  </div>

  <!-- Main Content -->
  <main class="container mb-5">

    <!-- Interested Buyers/Tenants Section -->
    <section class="mb-5 bg-white rounded shadow-sm p-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <h2 class="fs-4 mb-2 mb-md-0"><i class="bi bi-people pe-2"></i>Interested Buyers/Tenants</h2>
        <div class="ms-md-3" style="min-width: 300px;">
          <input type="text" id="searchInput" class="form-control" placeholder="Search by Property ID, Title, Location, or Owner...">
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle" id="buyersTable">
          <thead class="table-secondary">
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
              <td class="profile-id">PROP1001</td>
              <td class="title">Oceanfront Condo</td>
              <td class="location">Miami</td>
              <td class="owner">John Smith</td>
              <td>
                <select class="form-select form-select-sm">
                  <option>Interested</option>
                  <option>Visited</option>
                  <option>Negotiating</option>
                  <option>Finalized</option>
                </select>
              </td>
              <td>
                <div class="btn-reveal-trigger position-static">
                  <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="#!" onclick="viewClosureSummary('PROP1001')">
                      <i class="bi bi-eye me-2"></i> View
                    </a>
                    <a class="dropdown-item" href="#!" onclick="scheduleSiteVisit('PROP1001')">
                      <i class="bi bi-calendar-event me-2"></i> Schedule Site Visit
                    </a>
                    <a class="dropdown-item" href="#!" data-bs-toggle="modal" data-bs-target="#notesModal" onclick="openNotes('PROP1001')">
                      <i class="bi bi-chat-dots me-2"></i> Add Note
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#!" onclick="confirmDelete('PROP1001')">
                      <i class="bi bi-trash3 me-2"></i> Delete
                    </a>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Add more <tr> rows as needed -->

          </tbody>
        </table>
      </div>
    </section>

  </main>

  <!-- Notes Modal -->
  <div class="modal fade" id="notesModal" tabindex="-1" aria-labelledby="notesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="notesModalLabel"><i class="bi bi-chat-dots"></i> Communication Notes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="noteForm">
            <div class="mb-3">
              <label for="noteText" class="form-label">Note</label>
              <textarea class="form-control" id="noteText" rows="4" placeholder="Enter communication note..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-save2"></i> Save Note</button>
          </form>
          <hr />
          <h6>Previous Notes</h6>
          <ul class="list-group" id="notesList"></ul>
        </div>
      </div>
    </div>
  </div>

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

    document.getElementById("noteForm").addEventListener("submit", function (e) {
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

    // Search function
    document.getElementById('searchInput').addEventListener('keyup', function () {
      const filter = this.value.toLowerCase();
      const rows = document.querySelectorAll('#buyersTable tbody tr');

      rows.forEach(row => {
        const propertyId = row.querySelector('.profile-id')?.textContent.toLowerCase() || '';
        const title = row.querySelector('.title')?.textContent.toLowerCase() || '';
        const location = row.querySelector('.location')?.textContent.toLowerCase() || '';
        const owner = row.querySelector('.owner')?.textContent.toLowerCase() || '';

        if (
          propertyId.includes(filter) ||
          title.includes(filter) ||
          location.includes(filter) ||
          owner.includes(filter)
        ) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  </script>

</body>

</html>
