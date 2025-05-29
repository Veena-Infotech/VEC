<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Client Referral Log</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="bg-light">

  <div class="container mt-4">
    <!-- Header -->
    <div class=" text-black p-4 rounded mb-4 shadow-sm text-center" id="header">
      <h2 class="mb-0">Client Referral Log</h2>
      <small>Track client referrals, matching properties, and commissions</small>
    </div>


    <!-- Tabs -->
    <ul class="nav nav-tabs mb-3" id="tabs">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#clients">Clients Referred</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#properties">Matching Properties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#commission">Deal Closure & Commission</a>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">
      <!-- Clients Referred -->
      <div class="tab-pane fade show active" id="clients">
        <div class="d-flex justify-content-between mb-2 align-items-center">
          <h5>Clients Referred by Agent</h5>
          <button class="btn btn-outline-primary btn-sm">+ Add New Client</button>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered align-middle shadow-sm" id="clientTable">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Referral Date</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Smith</td>
                <td>john.smith@example.com</td>
                <td>(555) 123-4567</td>
                <td>2023-09-15</td>
                <td><span class="badge bg-success">Active</span></td>
                <td><button class="btn btn-outline-primary btn-sm">View</button> <button class="btn btn-outline-secondary btn-sm">Edit</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Emma Johnson</td>
                <td>emmaj@example.com</td>
                <td>(555) 987-6543</td>
                <td>2023-10-02</td>
                <td><span class="badge bg-dark">Closed</span></td>
                <td><button class="btn btn-outline-primary btn-sm">View</button> <button class="btn btn-outline-secondary btn-sm">Edit</button></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Michael Davis</td>
                <td>michael.d@example.com</td>
                <td>(555) 456-7890</td>
                <td>2023-10-10</td>
                <td><span class="badge bg-success">Active</span></td>
                <td><button class="btn btn-outline-primary btn-sm">View</button> <button class="btn btn-outline-secondary btn-sm">Edit</button></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Sophia Rodriguez</td>
                <td>sophia.r@example.com</td>
                <td>(555) 234-5678</td>
                <td>2023-11-05</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td><button class="btn btn-outline-primary btn-sm">View</button> <button class="btn btn-outline-secondary btn-sm">Edit</button></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Robert Wilson</td>
                <td>robert.w@example.com</td>
                <td>(555) 876-5432</td>
                <td>2023-11-20</td>
                <td><span class="badge bg-success">Active</span></td>
                <td><button class="btn btn-outline-primary btn-sm">View</button> <button class="btn btn-outline-secondary btn-sm">Edit</button></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Summary Cards -->
        <div class="row text-white mt-4" id="cards">
          <div class="col-md-4 mb-2">
            <div class="bg-primary p-3 rounded text-center shadow-sm summary-card">
              <h5>Total Clients</h5>
              <h3>5</h3>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="bg-success p-3 rounded text-center shadow-sm summary-card">
              <h5>Active Properties</h5>
              <h3>5</h3>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="bg-info p-3 rounded text-center shadow-sm summary-card">
              <h5>Total Commission</h5>
              <h3>$47,400</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Matching Properties -->
      <div class="tab-pane fade" id="properties">
        <h5 class="mt-3">Matching Properties</h5>
        <div class="table-responsive mt-2">
          <table class="table table-bordered align-middle shadow-sm animate-table">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Property</th>
                <th>Location</th>
                <th>Price</th>
                <th>Client</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Sunset Villa</td>
                <td>Miami, FL</td>
                <td>$850,000</td>
                <td>John Smith</td>
                <td><span class="badge bg-warning text-dark">Viewing Scheduled</span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lakefront Condo</td>
                <td>Chicago, IL</td>
                <td>$450,000</td>
                <td>Emma Johnson</td>
                <td><span class="badge bg-success">Interested</span></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Urban Loft</td>
                <td>New York, NY</td>
                <td>$1,200,000</td>
                <td>Michael Davis</td>
                <td><span class="badge bg-primary">Negotiating</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Deal Closure & Commission -->
      <div class="tab-pane fade" id="commission">
        <h5 class="mt-3">Deal Closures & Commissions</h5>
        <div class="table-responsive mt-2">
          <table class="table table-bordered align-middle shadow-sm animate-table">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Client</th>
                <th>Property</th>
                <th>Deal Date</th>
                <th>Commission %</th>
                <th>Commission Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Smith</td>
                <td>Sunset Villa</td>
                <td>2023-12-01</td>
                <td>5%</td>
                <td>$42,500</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Emma Johnson</td>
                <td>Lakefront Condo</td>
                <td>2023-12-15</td>
                <td>4%</td>
                <td>$18,000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Michael Davis</td>
                <td>Urban Loft</td>
                <td>2024-01-05</td>
                <td>6%</td>
                <td>$72,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- GSAP Animations -->
  <script>
    // Initial entrance
    gsap.from("#header", {
      y: -50,
      opacity: 0,
      duration: 1
    });
    gsap.from("#tabs", {
      y: -20,
      opacity: 0,
      duration: 1,
      delay: 0.5
    });
    gsap.from("#clientTable tbody tr", {
      y: 20,
      opacity: 0,
      duration: 0.6,
      delay: 1,
      stagger: 0.1
    });
    gsap.from("#cards .col-md-4", {
      y: 30,
      opacity: 0,
      duration: 0.6,
      delay: 1.5,
      stagger: 0.2
    });

    // Hover animation for cards
    document.querySelectorAll('.summary-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        gsap.to(card, {
          scale: 1.05,
          duration: 0.2
        });
      });
      card.addEventListener('mouseleave', () => {
        gsap.to(card, {
          scale: 1,
          duration: 0.2
        });
      });
    });

    // Tab content animation
    document.querySelectorAll('.nav-link').forEach(tab => {
      tab.addEventListener('shown.bs.tab', function(e) {
        const target = document.querySelector(e.target.getAttribute('href'));
        gsap.from(target.querySelectorAll('table, h5'), {
          y: 40,
          opacity: 0,
          duration: 0.6,
          stagger: 0.2
        });
      });
    });
  </script>

</body>

</html>