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
</head>

<body class="bg-light text-dark">
   <?php include '../navbar.php'; ?>



  <main class="container py-5">
    <section class="card shadow-lg rounded-4 p-4 mx-auto" id="agentFormSection" style="max-width: 800px;">
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
          <label class="form-label fw-bold">Area of Operation (Select up to 10)</label>
          <div id="areaOfOperationCheckboxes" class="row row-cols-2 g-2">
            <!-- Each checkbox -->
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality1" id="loc1">
              <label class="form-check-label" for="loc1">Locality 1</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality2" id="loc2">
              <label class="form-check-label" for="loc2">Locality 2</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality3" id="loc3">
              <label class="form-check-label" for="loc3">Locality 3</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality4" id="loc4">
              <label class="form-check-label" for="loc4">Locality 4</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality5" id="loc5">
              <label class="form-check-label" for="loc5">Locality 5</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality6" id="loc6">
              <label class="form-check-label" for="loc6">Locality 6</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality7" id="loc7">
              <label class="form-check-label" for="loc7">Locality 7</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality8" id="loc8">
              <label class="form-check-label" for="loc8">Locality 8</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality9" id="loc9">
              <label class="form-check-label" for="loc9">Locality 9</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality10" id="loc10">
              <label class="form-check-label" for="loc10">Locality 10</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality11" id="loc11">
              <label class="form-check-label" for="loc11">Locality 11</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input area-checkbox" type="checkbox" value="Locality12" id="loc12">
              <label class="form-check-label" for="loc12">Locality 12</label>
            </div>
          </div>
          <div id="selection-warning" class="form-text text-danger d-none">
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

        <button type="submit" class="btn btn-dark w-100">Submit</button>
      </form>

      <button class="btn btn-outline-dark mt-3 w-100" onclick="addPropertyForAgent()">Add Property for Agent</button>
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

        if (!validateName(name)) {
          alert("Please enter a valid name (letters and spaces only).");
          $('#agentName').focus();
          return false;
        }

        if (!validateContact(contact) || contact.length !== 10) {
          alert("Please enter a valid 10-digit contact number (numbers only).");
          $('#contact').focus();
          return false;
        }

        if (!validateFile(panFile)) {
          alert("Please upload a valid PAN file.");
          $('#panUpload').focus();
          return false;
        }

        if (!validateFile(aadharFile)) {
          alert("Please upload a valid Aadhar file.");
          $('#aadharUpload').focus();
          return false;
        }

        if (!validateFile(agreementFile)) {
          alert("Please upload a valid agreement file.");
          $('#agreementUpload').focus();
          return false;
        }

        if (areaChecked === 0) {
          alert("Please select at least one area of operation.");
          document.querySelector('.area-checkbox').focus();
          return false;
        }

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

    function addPropertyForAgent() {
      alert('Redirecting to Add Property for Agent...');
    }
  </script>
</body>

</html>