<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Add Customer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<body class="bg-light">
  <?php include '../navbar.php'; ?>
  <div class="container py-5">
    <div class="card  border-0">
      <div class="card-body p-4">
        <h2 class="mb-4 text-primary fw-bold text-center">Edit Customer</h2>
        <form id="customerForm" class="needs-validation">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" name="fullName" class="form-control" required placeholder="Enter full name">
            </div>
            <div class="col-md-6">
              <label class="form-label">Customer Type</label>
              <select class="form-select" id="customerType" name="customerType" required>
                <option value="">Select</option>
                <option value="Buyer">Buyer</option>
                <option value="Seller">Seller</option>
                <option value="Tenant">Tenant</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Contact Number</label>
              <input type="tel" name="contactNumber" class="form-control" required placeholder="Enter contact number">
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required placeholder="Enter email">
            </div>
            <div class="col-md-6">
              <label class="form-label">Upload ID Proof (PDF/JPEG only)</label>
              <input type="file" name="idProof" class="form-control" id="idProof" accept=".pdf,.jpeg,.jpg" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Budget Range</label>
              <input type="range" name="budgetRange" class="form-range" min="100000" max="10000000" step="50000" id="budgetRange">
              <div class="fw-medium">Budget: <span id="budgetDisplay">₹100000</span></div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Preferred Localities / Areas</label>
              <input type="text" name="preferredLocalities" class="form-control" placeholder="Enter preferred localities or areas">
            </div>
            <div class="col-md-6">
              <label class="form-label">Purpose</label>
              <select class="form-select" name="purpose">
                <option>Investment</option>
                <option>Self-use</option>
                <option>Rental</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type of Property Interested In</label>
              <input type="text" name="propertyType" class="form-control" placeholder="e.g. Apartment, Villa, Commercial">
            </div>
            <div class="col-md-6">
              <label class="form-label">Agent Linked</label>
              <input type="text" name="agentLinked" class="form-control" placeholder="Enter agent name or ID">
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select class="form-select" name="status">
                <option>Looking</option>
                <option>On Hold</option>
                <option>Closed Deal</option>
              </select>
            </div>
            <div class="col-12" id="sellerFields" style="display:none;">
              <label class="form-label">Owned Property Details</label>
              <textarea class="form-control" name="ownedPropertyDetails" placeholder="Enter owned property details..."></textarea>
            </div>
            <div class="col-12" id="tenantFields" style="display:none;">
              <label class="form-label">Rental Duration</label>
              <input type="text" name="rentalDuration" class="form-control" placeholder="e.g. 6 months, 1 year">
            </div>
            <!-- Submit -->
            <div class="col-12 text-center mt-4">
              <button type="submit" class="btn btn-primary btn-lg px-5">Submit Listing</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Property Match Modal -->
  <div class="modal fade" id="matchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Property Match Found</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>We found a matching property for this customer!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- No Match Toast -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="noMatchToast" class="toast align-items-center text-bg-warning border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body">No property match found!</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      gsap.from(".card", {
        y: 50,
        opacity: 0,
        duration: 1,
        ease: "power2.out"
      });

      gsap.from(".card .form-label, .card .form-control, .card .form-select, .card textarea, .card input[type='range']", {
        opacity: 0,
        y: 20,
        duration: 0.6,
        stagger: 0.1,
        delay: 0.5,
        ease: "power1.out"
      });

      gsap.from(".btn-primary", {
        scale: 0.8,
        opacity: 0,
        delay: 1.2,
        duration: 0.5,
        ease: "back.out(1.7)"
      });
    });
  </script>

  <?php include '../footer.php'; ?>

</body>

</html>