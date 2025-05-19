<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Property</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- GSAP Library -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
</head>

<body class="bg-light text-dark">

  <!-- Header -->
  <header class="py-4 text-center bg-white shadow-sm mb-5">
    <h1 class="fs-2"><i class="bi bi-building"></i> Manage Property</h1>
    <p class="fs-6 text-muted">Track interested clients, schedule visits, and maintain communication history</p>
  </header>

  <!-- Main Content -->
  <main class="container mb-5">

    <!-- Interested Buyers/Tenants Section -->
    <section class="mb-5 bg-white rounded shadow-sm p-4">
      <h2 class="fs-4 mb-4"><i class="bi bi-people pe-2"></i>Interested Buyers/Tenants</h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-secondary text-center">
            <tr>
              <th scope="col">Client Name</th>
              <th scope="col">Contact</th>
              <th scope="col">Status</th>
              <th scope="col">Scheduled Visit</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jane Smith</td>
              <td>jane.smith@example.com</td>
              <td><span class="badge bg-info text-dark">Interested</span></td>
              <td>Not Scheduled</td>
              <td class="text-center">
                <div class="dropdown">
                  <button
                    class="btn btn-outline-primary btn-sm dropdown-toggle"
                    type="button" id="actionDropdown1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    aria-label="Actions for Jane Smith">
                    <i class="bi bi-gear"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="actionDropdown1">
                    <li><button class="dropdown-item" type="button" onclick="openScheduleVisitModal('Jane Smith')"><i class="bi bi-calendar-plus me-2"></i> Schedule Visit</button></li>
                    <li><button class="dropdown-item" type="button" onclick="openCommunicationModal('Jane Smith')"><i class="bi bi-chat-dots me-2"></i> View Communication</button></li>
                    <li><button class="dropdown-item" type="button" onclick="openUpdateStatusModal('Jane Smith')"><i class="bi bi-pencil-square me-2"></i> Update Status</button></li>
                  </ul>
                </div>
              </td>
            </tr>
            <!-- Additional rows can be added here -->
          </tbody>
        </table>
      </div>
    </section>

    <!-- Communication History Section -->
    <section class="bg-white rounded shadow-sm p-4">
      <h2 class="fs-4 mb-4"><i class="bi bi-chat-left-text pe-2"></i>Notes & Communication History</h2>
      <div class="accordion" id="communicationAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button collapsed"
              type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="false"
              aria-controls="collapseOne">
              Jane Smith - Last Contact: May 15, 2025
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="headingOne"
            data-bs-parent="#communicationAccordion">
            <div class="accordion-body">
              <p><strong>Note:</strong> Interested in scheduling a visit next week. Requested more details about the neighborhood.</p>
              <p><strong>Communication:</strong> Sent brochure and answered initial queries.</p>
            </div>
          </div>
        </div>
        <!-- Additional accordion items can be added here -->
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white text-center py-3 shadow-sm mt-auto">
    <p class="fs-6 text-muted mb-0">&copy; 2025 Real Estate Management. All rights reserved.</p>
  </footer>

  <!-- Modals -->

  <!-- Schedule Visit Modal -->
  <div class="modal fade" id="scheduleVisitModal" tabindex="-1" aria-labelledby="scheduleVisitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="scheduleVisitModalLabel"><i class="bi bi-calendar-plus"></i> Schedule Visit</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="scheduleVisitForm">
          <div class="modal-body">
            <p id="scheduleVisitClient" class="fw-semibold"></p>
            <div class="mb-3">
              <label for="visitDate" class="form-label">Select Visit Date</label>
              <input type="date" class="form-control" id="visitDate" required />
            </div>
            <div class="mb-3">
              <label for="visitTime" class="form-label">Select Visit Time</label>
              <input type="time" class="form-control" id="visitTime" required />
            </div>
            <div class="mb-3">
              <label for="visitNotes" class="form-label">Notes</label>
              <textarea class="form-control" id="visitNotes" rows="3" placeholder="Optional notes"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save Visit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Communication Modal -->
  <div class="modal fade" id="communicationModal" tabindex="-1" aria-labelledby="communicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title" id="communicationModalLabel"><i class="bi bi-chat-dots"></i> Communication History</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="communicationModalBody">
          <p><strong>Communication history for client will appear here.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Update Status Modal -->
  <div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-warning text-dark">
          <h5 class="modal-title" id="updateStatusModalLabel"><i class="bi bi-pencil-square"></i> Update Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateStatusForm">
          <div class="modal-body">
            <p id="updateStatusClient" class="fw-semibold"></p>
            <div class="mb-3">
              <label for="statusSelect" class="form-label">Select New Status</label>
              <select class="form-select" id="statusSelect" required>
                <option value="">Choose status</option>
                <option value="Interested">Interested</option>
                <option value="Visited">Visited</option>
                <option value="Negotiating">Negotiating</option>
                <option value="Finalized">Finalized</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="statusNote" class="form-label">Optional Note</label>
              <textarea class="form-control" id="statusNote" rows="3" placeholder="Notes about status update"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-warning">Update Status</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
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

  <script>
    // Modal instances
    const scheduleVisitModal = new bootstrap.Modal(document.getElementById('scheduleVisitModal'));
    const communicationModal = new bootstrap.Modal(document.getElementById('communicationModal'));
    const updateStatusModal = new bootstrap.Modal(document.getElementById('updateStatusModal'));

    // Open Schedule Visit Modal
    function openScheduleVisitModal(clientName) {
      document.getElementById('scheduleVisitClient').textContent = `Client: ${clientName}`;
      document.getElementById('scheduleVisitForm').reset();
      scheduleVisitModal.show();
    }

    // Open Communication Modal
    function openCommunicationModal(clientName) {
      document.getElementById('communicationModalLabel').textContent = `Communication History — ${clientName}`;
      // Here you can fetch and populate the communication data dynamically
      document.getElementById('communicationModalBody').innerHTML = `<p><strong>Communication history for ${clientName} will appear here.</strong></p>`;
      communicationModal.show();
    }

    // Open Update Status Modal
    function openUpdateStatusModal(clientName) {
      document.getElementById('updateStatusClient').textContent = `Client: ${clientName}`;
      document.getElementById('updateStatusForm').reset();
      updateStatusModal.show();
    }

    // Form submissions for Schedule Visit
    document.getElementById('scheduleVisitForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Visit scheduled successfully!');
      scheduleVisitModal.hide();
    });

    // Form submissions for Update Status
    document.getElementById('updateStatusForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Status updated successfully!');
      updateStatusModal.hide();
    });
  </script>
</body>

</html>