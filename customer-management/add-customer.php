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
        <h2 class="mb-4 text-primary fw-bold text-center">Add Customer</h2>
        <form id="customerForm" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" required placeholder="Enter full name">
            </div>
            <div class="col-md-6">
              <label class="form-label">Customer Type</label>
              <select class="form-select" id="customerType" required>
                <option value="">Select</option>
                <option value="Buyer">Buyer</option>
                <option value="Seller">Seller</option>
                <option value="Tenant">Tenant</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Contact Number</label>
              <input type="tel" class="form-control" required placeholder="Enter contact number">
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" required placeholder="Enter email">
            </div>
            <div class="col-md-6">
              <label class="form-label">Upload ID Proof (PDF/JPEG only)</label>
              <input type="file" class="form-control" id="idProof" accept=".pdf,.jpeg,.jpg" required placeholder="Upload ID proof">
            </div>
            <div class="col-md-6">
              <label class="form-label">Budget Range</label>
              <input type="range" class="form-range" min="100000" max="10000000" step="50000" id="budgetRange">
              <div class="fw-medium">Budget: <span id="budgetDisplay">₹100000</span></div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Preferred Localities / Areas</label>
              <input type="text" class="form-control" placeholder="Enter preferred localities or areas">
            </div>
            <div class="col-md-6">
              <label class="form-label">Purpose</label>
              <select class="form-select">
                <option>Investment</option>
                <option>Self-use</option>
                <option>Rental</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type of Property Interested In</label>
              <input type="text" class="form-control" placeholder="e.g. Apartment, Villa, Commercial">
            </div>
            <div class="col-md-6">
              <label class="form-label">Agent Linked</label>
              <input type="text" class="form-control" placeholder="Enter agent name or ID">
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Looking</option>
                <option>On Hold</option>
                <option>Closed Deal</option>
              </select>
            </div>
            <div class="col-12" id="sellerFields" style="display:none;">
              <label class="form-label">Owned Property Details</label>
              <textarea class="form-control" placeholder="Enter owned property details..."></textarea>
            </div>
            <div class="col-12" id="tenantFields" style="display:none;">
              <label class="form-label">Rental Duration</label>
              <input type="text" class="form-control" placeholder="e.g. 6 months, 1 year">
            </div>
            <div class="col-12 text-center">
              <button type="button" class="btn btn-primary px-5 py-2 rounded-pill mt-3" onclick="handleSubmit()">Submit</button>
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
    const customerType = document.getElementById('customerType');
    const sellerFields = document.getElementById('sellerFields');
    const tenantFields = document.getElementById('tenantFields');
    const budgetRange = document.getElementById('budgetRange');
    const budgetDisplay = document.getElementById('budgetDisplay');

    customerType.addEventListener('change', () => {
      sellerFields.style.display = customerType.value === 'Seller' ? 'block' : 'none';
      tenantFields.style.display = customerType.value === 'Tenant' ? 'block' : 'none';
      gsap.fromTo('#sellerFields, #tenantFields', {
        opacity: 0,
        y: -20
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5
      });
    });

    budgetRange.addEventListener('input', () => {
      budgetDisplay.textContent = '₹' + budgetRange.value;
    });

    function handleSubmit() {
      const fileInput = document.getElementById('idProof');
      const file = fileInput.files[0];
      if (!file) {
        alert("Please upload an ID proof.");
        return;
      }
      const validTypes = ['application/pdf', 'image/jpeg'];
      if (!validTypes.includes(file.type)) {
        alert("Only PDF and JPEG files are allowed.");
        return;
      }

      const hasMatch = Math.random() < 0.5; // Simulated match result
      if (hasMatch) {
        const matchModal = new bootstrap.Modal(document.getElementById('matchModal'));
        matchModal.show();
        gsap.fromTo('#matchModal .modal-content', {
          opacity: 0,
          scale: 0.8
        }, {
          opacity: 1,
          scale: 1,
          duration: 0.5
        });
      } else {
        const toastEl = document.getElementById('noMatchToast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        gsap.fromTo(toastEl, {
          opacity: 0,
          x: 100
        }, {
          opacity: 1,
          x: 0,
          duration: 0.5
        });
      }
    }

    // Animate entire form entrance
    window.addEventListener('load', () => {
      gsap.from("form .form-control, form .form-select, form .form-range, form textarea, button", {
        opacity: 0,
        y: 30,
        duration: 0.6,
        stagger: 0.1,
        ease: "power2.out"
      });
    });

    function handleSubmit() {
      const form = document.getElementById('customerForm');
      const fullName = form.querySelector('input[type="text"]').value.trim();
      const customerType = document.getElementById('customerType').value;
      const contactNumber = form.querySelector('input[type="tel"]').value.trim();
      const email = form.querySelector('input[type="email"]').value.trim();
      const fileInput = document.getElementById('idProof');
      const file = fileInput.files[0];
      const validTypes = ['application/pdf', 'image/jpeg'];

      // Full Name Validation
      if (!fullName || !/^[a-zA-Z\s]+$/.test(fullName)) {
        alert("Please enter a valid full name (letters and spaces only).");
        return;
      }

      // Customer Type Validation
      if (customerType === "") {
        alert("Please select a customer type.");
        return;
      }

      // Contact Number Validation
      if (!/^\d{10}$/.test(contactNumber)) {
        alert("Please enter a valid 10-digit contact number (numbers only).");
        return;
      }

      // Email Validation
      if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Please enter a valid email address.");
        return;
      }

      // File Upload Validation
      if (!file) {
        alert("Please upload an ID proof.");
        return;
      }
      if (!validTypes.includes(file.type)) {
        alert("Only PDF and JPEG files are allowed.");
        return;
      }

      // Budget Range Validation
      const budgetValue = document.getElementById('budgetRange').value;
      if (budgetValue < 100000 || budgetValue > 10000000) {
        alert("Please select a budget within the range of ₹100,000 to ₹10,000,000.");
        return;
      }

      // Dynamic Fields Validation
      if (customerType === 'Seller') {
        const ownedPropertyDetails = form.querySelector('#sellerFields textarea').value.trim();
        if (!ownedPropertyDetails) {
          alert("Please enter owned property details.");
          return;
        }
      } else if (customerType === 'Tenant') {
        const rentalDuration = form.querySelector('#tenantFields input[type="text"]').value.trim();
        if (!rentalDuration) {
          alert("Please enter rental duration.");
          return;
        }
      }

      // If all validations pass, proceed with the submission
      const hasMatch = Math.random() < 0.5; // Simulated match result
      if (hasMatch) {
        const matchModal = new bootstrap.Modal(document.getElementById('matchModal'));
        matchModal.show();
        gsap.fromTo('#matchModal .modal-content', {
          opacity: 0,
          scale: 0.8
        }, {
          opacity: 1,
          scale: 1,
          duration: 0.5
        });
      } else {
        const toastEl = document.getElementById('noMatchToast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        gsap.fromTo(toastEl, {
          opacity: 0,
          x: 100
        }, {
          opacity: 1,
          x: 0,
          duration: 0.5
        });
      }
    }
  </script>
  <?php include '../footer.php'; ?>

</body>

</html>