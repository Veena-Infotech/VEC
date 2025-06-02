<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Agent</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- GSAP Animation Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="bg-light text-dark">
  <?php include '../navbar.php'; ?>



  <main class="container py-5">
    <section class="card rounded-1 p-4 mx-auto" id="agentFormSection" style="max-width: 800px;">
      <h2 class="fs-4 mb-4 text-center">Agent Onboarding Form</h2>
      <form id="agentForm">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="agentName" class="form-label fw-bold">Name</label>
            <input type="text" class="form-control" id="agentName" required placeholder="Enter Your Name" />
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label fw-bold">Contact</label>
            <input type="tel" class="form-control" id="contact" required pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number." placeholder="Enter your contact number" />
          </div>
        </div>

        <div class="mb-3">
          <label for="panUpload" class="form-label fw-bold">PAN Upload</label>
          <input type="file" class="form-control" id="panUpload" accept=".pdf,.jpg,.jpeg,.png" required />
        </div>

        <div class="mb-3">
          <label for="aadharUpload" class="form-label fw-bold">Aadhar Upload</label>
          <input type="file" class="form-control" id="aadharUpload" accept=".pdf,.jpg,.jpeg,.png" required />
        </div>

        <div class="mb-3">
          <label for="specialization" class="form-label fw-bold">Specialization</label>
          <select class="form-select" id="specialization" required>
            <option value="">Select Specialization</option>
            <option value="Rental">Rental</option>
            <option value="Sale">Sale</option>
            <option value="Commercial">Commercial</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="areaOfOperation" class="form-label fw-bold d-flex flex-column">Area of Operation (Select up to 10)</label>
          <select class="form-select" id="areaOfOperation" multiple name="areaOfOperation[]" style="width: 100%;">
            <option value="Locality1">Locality 1</option>
            <option value="Locality2">Locality 2</option>
            <option value="Locality3">Locality 3</option>
            <option value="Locality4">Locality 4</option>
            <option value="Locality5">Locality 5</option>
            <option value="Locality6">Locality 6</option>
            <option value="Locality7">Locality 7</option>
            <option value="Locality8">Locality 8</option>
            <option value="Locality9">Locality 9</option>
            <option value="Locality10">Locality 10</option>
            <option value="Locality11">Locality 11</option>
            <option value="Locality12">Locality 12</option>
          </select>
          <div id="selection-warning" class="form-text text-danger d-none mt-1">
            You can only select up to 10 localities.
          </div>
        </div>


        <div class="form-text mb-3">Max 10 areas can be selected.</div>

        <div class="mb-3">
          <label for="builderTieUps" class="form-label fw-bold">Preferred Builder Tie-ups (if any)</label>
          <input type="text" class="form-control" id="builderTieUps" placeholder="Enter your preferred builder tie-ups" />
        </div>

        <div class="mb-3">
          <label for="agreementUpload" class="form-label fw-bold">Agreement Upload (Commission Agreement)</label>
          <input type="file" class="form-control" id="agreementUpload" accept=".pdf,.jpg,.jpeg,.png" required />
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>

      <button class="btn btn-outline-primary mt-3 w-100">Add Property for Agent</button>
    </section>
  </main>

  <script>
    $(document).ready(function() {
      // Animate form on load
      gsap.from("#agentFormSection", {
        duration: 1,
        y: -50,
        opacity: 0,
        ease: "power2.out"
      });

      // Validate helper functions
      function validateName(name) {
        return /^[A-Za-z\s]+$/.test(name.trim());
      }

      function validateContact(contact) {
        return /^[0-9]+$/.test(contact);
      }

      function validateFile(fileInput) {
        if (!fileInput || !fileInput.files || !fileInput.files[0]) return false;
        const file = fileInput.files[0];
        const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];
        return allowedTypes.includes(file.type);
      }

      function stepWiseValidation() {
        const name = $('#agentName').val().trim();
        const contact = $('#contact').val().trim();
        const panFile = document.getElementById('panUpload');
        const aadharFile = document.getElementById('aadharUpload');
        const agreementFile = document.getElementById('agreementUpload');
        const areaChecked = document.querySelectorAll('.area-checkbox:checked').length;


        return true;
      }

      $('#agentForm').on('submit', function(e) {
        e.preventDefault();

        if (stepWiseValidation()) {
          gsap.to("#agentFormSection", {
            duration: 0.5,
            scale: 0.95,
            ease: "power2.out",
            onComplete: function() {
              gsap.to("#agentFormSection", {
                duration: 0.5,
                opacity: 0,
                onComplete: function() {
                  alert('Agent added successfully!');
                  $('#agentForm')[0].reset();
                  gsap.to("#agentFormSection", {
                    duration: 0.5,
                    scale: 1,
                    opacity: 1
                  });
                }
              });
            }
          });
        }
      });

      // Limit area selection checkboxes to 10
      const checkboxes = document.querySelectorAll('.area-checkbox');
      const warning = document.getElementById('selection-warning');

      checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
          const checked = document.querySelectorAll('.area-checkbox:checked').length;
          if (checked > 10) {
            cb.checked = false;
            warning.classList.remove('d-none');
            setTimeout(() => warning.classList.add('d-none'), 2000);
          }
        });
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('#areaOfOperation').select2({
        placeholder: 'Select localities',
        width: '100',
        maximumSelectionLength: 10
      });

      $('#areaOfOperation').on('select2:select select2:unselect', function(e) {
        const selected = $(this).val() || [];
        const warning = $('#selection-warning');

        if (selected.length >= 10) {
          warning.removeClass('d-none');
        } else {
          warning.addClass('d-none');
        }
      });
    });
  </script>

  <?php include '../footer.php'; ?>


  <!-- jQuery + Select2 JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>