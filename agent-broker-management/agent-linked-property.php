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
<body class="bg-body-tertiary">

  <div class="container py-5">
    <!-- Header Card -->
    <div class="card border-0 shadow mb-4">
      <div class="card-body d-flex justify-content-between align-items-center">
        <h3 class="card-title fw-bold mb-0" id="pageTitle">
          <i class="bi bi-house-door-fill me-2"></i>
          Agent Linked Properties
        </h3>
        <button class="btn btn-outline-secondary btn-lg" id="addPropertyBtn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quickly add a new property for the agent">
          <i class="bi bi-plus-circle me-1"></i> Add Property
        </button>
      </div>
    </div>

    <!-- Properties Table Card -->
    <div class="card shadow-sm border-0">
      <div class="card-header fw-semibold sticky-top">
        Linked Property List
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover align-middle mb-0 text-center">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Property Name</th>
                <th>Status</th>
                <th>Lead Source</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Sunset Villa</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Completed</span></td>
                <td><i class="bi bi-facebook me-1"></i>Facebook Ads</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Downtown Loft</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Pending</span></td>
                <td><i class="bi bi-people-fill me-1"></i>Referral</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Seaside Apartment</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Cancelled</span></td>
                <td><i class="bi bi-globe me-1"></i>Website</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle and Tooltips -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Tooltip initialization
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    [...tooltipTriggerList].forEach(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
  </script>

  <!-- GSAP Animations -->
  <script>
    gsap.from("#pageTitle", {
      duration: 1,
      y: -40,
      opacity: 0,
      ease: "power4.out"
    });

    gsap.from("#addPropertyBtn", {
      duration: 1,
      x: 100,
      opacity: 0,
      ease: "power2.out",
      delay: 0.3
    });

    gsap.from("table tbody tr", {
      duration: 0.6,
      opacity: 0,
      y: 20,
      stagger: 0.2,
      delay: 0.6
    });
  </script>
</body>
</html>
