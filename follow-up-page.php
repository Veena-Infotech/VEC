<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manage Property</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- GSAP Library -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
</head>
<body class="bg-light text-dark">

  <!-- Header -->
  <header class="py-4 text-center">
    <h1 class="fs-3"><i class="bi bi-building"></i> Manage Property</h1>
    <p class="fs-6 text-muted">Track interested clients, schedule visits, and maintain communication history</p>
  </header>

  <!-- Main Content -->
  <main class="container my-5">
    <!-- Interested Clients -->
    <section class="mb-5">
      <h2 class="fs-4 mb-4"><i class="bi bi-people"></i> Interested Buyers/Tenants</h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th scope="col">Client Name</th>
              <th scope="col">Contact</th>
              <th scope="col">Status</th>
              <th scope="col">Scheduled Visit</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example Row -->
            <tr>
              <td>Jane Smith</td>
              <td>jane.smith@example.com</td>
              <td><span class="badge bg-info">Interested</span></td>
              <td>Not Scheduled</td>
              <td>
                <div class="dropup">
                  <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="actionDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-gear"></i> Actions
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="actionDropdown1">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus"></i> Schedule Visit</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-chat-dots"></i> View Communication</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i> Update Status</a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <!-- Additional rows can be added here -->
          </tbody>
        </table>
      </div>
    </section>

    <!-- Communication History -->
    <section class="mb-5">
      <h2 class="fs-4 mb-4"><i class="bi bi-chat-left-text"></i> Notes & Communication History</h2>
      <div class="accordion" id="communicationAccordion">
        <!-- Example Accordion Item -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Jane Smith - Last Contact: May 15, 2025
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#communicationAccordion">
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
  <footer class="bg-light text-center py-3">
    <p class="fs-6 text-muted mb-0">&copy; 2025 Real Estate Management. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- GSAP Animations -->
  <script>
    // Animate header
    gsap.from("header", {
      duration: 1,
      y: -100,
      opacity: 0,
      ease: "bounce"
    });

    // Animate sections on page load
    gsap.from("section", {
      duration: 1,
      y: 50,
      opacity: 0,
      stagger: 0.3,
      ease: "power1.out"
    });
  </script>
</body>
</html>
