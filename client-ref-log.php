<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agent Linked Properties</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- GSAP -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
</head>

<body class="bg-light">

  <div class="container py-5">

    <!-- Header Card -->
    <div class="card shadow-sm border-0 mb-4">
      <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
          <h2 class="fw-bold text-primary mb-1" id="pageTitle">
            <i class="bi bi-house-door-fill me-2"></i>Agent Linked Properties
          </h2>
          <p class="text-muted mb-0">View all properties submitted by this agent with lead sources and status indicators.</p>
        </div>
        <button class="btn btn-outline-primary btn-lg d-flex align-items-center gap-1" id="addPropertyBtn" data-bs-toggle="tooltip" title="Add a new property">
          <i class="bi bi-plus-circle"></i> Add Property
        </button>
      </div>
    </div>

    <!-- Table Card -->
    <div class="card border-0 shadow-sm">
      <div class="card-header bg-primary text-white fw-semibold fs-5 d-flex align-items-center gap-2">
        <i class="bi bi-table"></i> Linked Properties Overview
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-bordered table-hover align-middle text-center mb-0">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th class="text-start">Property Name</th>
                <th>Transaction Status</th>
                <th>Lead Source</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="text-start">
                  <i class="bi bi-building text-secondary me-2"></i>Greenwood Villas
                </td>
                <td>
                  <span class="badge bg-success px-3 py-2 rounded-pill d-inline-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-1"></i> Closed
                  </span>
                </td>
                <td>
                  <i class="bi bi-globe2 text-muted me-1"></i> Website
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="text-start">
                  <i class="bi bi-building text-secondary me-2"></i>Maple Apartments
                </td>
                <td>
                  <span class="badge bg-warning text-dark px-3 py-2 rounded-pill d-inline-flex align-items-center">
                    <i class="bi bi-hourglass-split me-1"></i> In Progress
                  </span>
                </td>
                <td>
                  <i class="bi bi-facebook text-muted me-1"></i> Social Media
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td class="text-start">
                  <i class="bi bi-building text-secondary me-2"></i>Sunny Heights
                </td>
                <td>
                  <span class="badge bg-danger px-3 py-2 rounded-pill d-inline-flex align-items-center">
                    <i class="bi bi-x-octagon-fill me-1"></i> Cancelled
                  </span>
                </td>
                <td>
                  <i class="bi bi-envelope-paper-fill text-muted me-1"></i> Email Campaign
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td class="text-start">
                  <i class="bi bi-building text-secondary me-2"></i>Lakeview Residency
                </td>
                <td>
                  <span class="badge bg-info text-dark px-3 py-2 rounded-pill d-inline-flex align-items-center">
                    <i class="bi bi-info-circle-fill me-1"></i> Pending Approval
                  </span>
                </td>
                <td>
                  <i class="bi bi-person-check-fill text-muted me-1"></i> Referral
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer text-muted text-end small">
        Last updated: <span id="lastUpdated"></span>
      </div>
    </div>

  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Tooltip Init
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));

    // Timestamp
    const now = new Date();
    document.getElementById('lastUpdated').textContent = now.toLocaleString();

    // GSAP Animations
    gsap.from("#pageTitle", {
      duration: 1,
      y: -30,
      opacity: 0,
      ease: "power4.out"
    });

    gsap.from("#addPropertyBtn", {
      duration: 1,
      x: 60,
      opacity: 0,
      ease: "power2.out",
      delay: 0.3
    });

    gsap.from("table tbody tr", {
      duration: 0.6,
      opacity: 0,
      y: 20,
      stagger: 0.2,
      delay: 0.5
    });
  </script>

</body>
</html>
