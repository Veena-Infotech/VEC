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
  <!-- jQuery for Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

  <!-- Header -->
  <header class="py-4 text-center bg-primary text-white">
    <h1 class="fs-2"><i class="bi bi-person-plus"></i> Add Agent</h1>
  </header>

  <!-- Main Content -->
  <main class="container mb-5">
    <section class="card p-4 mt-4" id="agentFormSection">
      <h2 class="fs-4 mb-4">Agent Onboarding Form</h2>
      <form id="agentForm">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="agentName" class="form-label">Name</label>
            <input type="text" class="form-control" id="agentName" required />
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label">Contact</label>
            <input type="tel" class="form-control" id="contact" required />
          </div>
        </div>
        <div class="mb-3">
          <label for="panUpload" class="form-label">PAN Upload</label>
          <input type="file" class="form-control" id="panUpload" accept=".pdf,.jpg,.jpeg,.png" required />
        </div>
        <div class="mb-3">
          <label for="aadharUpload" class="form-label">Aadhar Upload</label>
          <input type="file" class="form-control" id="aadharUpload" accept=".pdf,.jpg,.jpeg,.png" required />
        </div>
        <div class="mb-3">
          <label for="specialization" class="form-label">Specialization</label>
          <select class="form-select" id="specialization" required>
            <option value="">Select Specialization</option>
            <option value="Rental">Rental</option>
            <option value="Sale">Sale</option>
            <option value="Commercial">Commercial</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="areaOfOperation" class="form-label">Area of Operation (Select up to 10)</label>
          <select class="form-select" id="areaOfOperation" multiple required>
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
          <small class="form-text text-muted">Max 10 areas can be selected.</small>
        </div>
        <div class="mb-3">
          <label for="builderTieUps" class="form-label">Preferred Builder Tie-ups (if any)</label>
          <input type="text" class="form-control" id="builderTieUps" />
        </div>
        <div class="mb-3">
          <label for="agreementUpload" class="form-label">Agreement Upload (Commission Agreement)</label>
          <input type="file" class="form-control" id="agreementUpload" accept=".pdf,.jpg,.jpeg,.png" required />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <button class="btn btn-outline-secondary mt-3" onclick="addPropertyForAgent()">Add Property for Agent</button>
    </section>
  </main>

  <!-- Footer -->
  <footer class="text-center py-4">
    <p>&copy; 2025 Real Estate Management. All rights reserved.</p>
  </footer>

  <!-- Script for form validation and animations -->
  <script>
    $(document).ready(function() {
      // GSAP animation for the form section
      gsap.from("#agentFormSection", { 
        duration: 1, 
        y: -50, 
        opacity: 0, 
        ease: "power2.out" 
      });

      $('#areaOfOperation').on('change', function() {
        const selectedOptions = $(this).find('option:selected');
        if (selectedOptions.length > 10) {
          alert('You can select a maximum of 10 areas.');
          $(this).val($(this).val().slice(0, 10));
        }
      });

      $('#agentForm').on('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        gsap.to("#agentFormSection", { 
          duration: 0.5, 
          scale: 0.95, 
          ease: "power2.out", 
          onComplete: function() {
            alert('Agent added successfully!');
            gsap.to("#agentFormSection", { 
              duration: 0.5, 
              scale: 1 
            });
          } 
        });
      });
    });

    function addPropertyForAgent() {
      // Logic to add property for the agent
      alert('Redirecting to Add Property for Agent...');
    }
  </script>
</body>
</html>
