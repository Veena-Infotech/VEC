<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Property Listing Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="bg-light">
  <div class="container py-5">
    <h1 class="mb-4 text-primary fw-bold text-center">List Your Property</h1>
    <form id="propertyForm" class="bg-white p-4 rounded shadow-sm">
      <div class="row gy-3">
        <!-- Property Type -->
        <div class="col-md-4">
          <label for="propertyType" class="form-label">Property Type</label>
          <select class="form-select" id="propertyType" required>
            <option value="" disabled selected>Select property type</option>
            <option>Flat</option>
            <option>Bungalow</option>
            <option>Office</option>
            <option>Commercial</option>
            <option>Land</option>
          </select>
        </div>

        <!-- Transaction Type -->
        <div class="col-md-4">
          <label for="transactionType" class="form-label">Transaction Type</label>
          <select class="form-select" id="transactionType" required>
            <option value="" disabled selected>Select transaction type</option>
            <option>Buy</option>
            <option>Sell</option>
            <option>Rent</option>
          </select>
        </div>

        <!-- Locality with Auto-suggest -->
        <div class="col-md-4 position-relative">
          <label for="locality" class="form-label">Locality (Ward-based Mumbai regions)</label>
          <input type="text" class="form-control" id="locality" placeholder="Start typing locality..." autocomplete="off" required />
          <ul class="list-group position-absolute w-100" id="localitySuggestions" style="z-index: 1050; max-height: 180px; overflow-y: auto; display: none;"></ul>
        </div>

        <!-- Address -->
        <div class="col-md-6">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" placeholder="Enter full address" required />
        </div>

        <!-- Pincode -->
        <div class="col-md-3">
          <label for="pincode" class="form-label">Pincode</label>
          <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" pattern="[0-9]{6}" title="6 digit pincode" required />
        </div>

        <!-- Landmark -->
        <div class="col-md-3">
          <label for="landmark" class="form-label">Landmark</label>
          <input type="text" class="form-control" id="landmark" placeholder="Nearby landmark" />
        </div>

        <!-- Area inputs group -->
        <fieldset class="col-12">
          <legend class="h5 text-secondary mb-3">Area (in sqft)</legend>
          <div class="row g-3">
            <div class="col-md-4">
              <label for="areaCarpet" class="form-label">Carpet Area</label>
              <input type="number" min="0" class="form-control" id="areaCarpet" placeholder="e.g., 900" />
            </div>
            <div class="col-md-4">
              <label for="areaBuiltup" class="form-label">Built-up Area</label>
              <input type="number" min="0" class="form-control" id="areaBuiltup" placeholder="e.g., 1100" />
            </div>
            <div class="col-md-4">
              <label for="areaPlot" class="form-label">Plot Area</label>
              <input type="number" min="0" class="form-control" id="areaPlot" placeholder="e.g., 1200" />
            </div>
          </div>
        </fieldset>

        <!-- Price and Negotiable Toggle -->
        <div class="col-md-8">
          <label for="price" class="form-label">Price (INR)</label>
          <input type="number" min="0" class="form-control" id="price" placeholder="Enter price" required />
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div class="form-check form-switch mt-4">
            <input class="form-check-input" type="checkbox" id="negotiableToggle" />
            <label class="form-check-label" for="negotiableToggle">Negotiable</label>
          </div>
        </div>

        <!-- Amenities Checklist -->
        <fieldset class="col-12">
          <legend class="h5 text-secondary mb-3">Amenities</legend>
          <div class="row row-cols-2 row-cols-md-4 g-2">
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityLift" value="Lift" />
              <label class="form-check-label" for="amenityLift">Lift</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityParking" value="Parking" />
              <label class="form-check-label" for="amenityParking">Parking</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenitySecurity" value="Security" />
              <label class="form-check-label" for="amenitySecurity">Security</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityGarden" value="Garden" />
              <label class="form-check-label" for="amenityGarden">Garden</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityGym" value="Gym" />
              <label class="form-check-label" for="amenityGym">Gym</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenitySwimming" value="Swimming Pool" />
              <label class="form-check-label" for="amenitySwimming">Swimming Pool</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityPowerBackup" value="Power Backup" />
              <label class="form-check-label" for="amenityPowerBackup">Power Backup</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityClubhouse" value="Clubhouse" />
              <label class="form-check-label" for="amenityClubhouse">Clubhouse</label>
            </div>
          </div>
        </fieldset>

        <!-- Owner/Agent Linked -->
        <fieldset class="col-md-6">
          <legend class="h5 text-secondary mb-3">Linked To</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="linkedTo" id="linkedOwner" value="Owner" required />
            <label class="form-check-label" for="linkedOwner">Owner</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="linkedTo" id="linkedAgent" value="Agent" required />
            <label class="form-check-label" for="linkedAgent">Agent</label>
          </div>
        </fieldset>

        <!-- Source -->
        <div class="col-md-6">
          <label for="source" class="form-label">Source</label>
          <select class="form-select" id="source" required>
            <option value="" disabled selected>Select source</option>
            <option>Direct Client</option>
            <option>Agent Referral</option>
          </select>
        </div>

        <!-- Upload Images / Videos -->
        <div class="col-md-6">
          <label for="imagesVideos" class="form-label">Upload Images/Videos</label>
          <input class="form-control" type="file" id="imagesVideos" accept="image/*,video/*" multiple />
          <small class="form-text text-muted">You can upload up to 10 images/videos (max 5MB each).</small>
        </div>

        <!-- Upload Documents -->
        <div class="col-md-6">
          <label for="documentsUpload" class="form-label">Upload Documents (Title Deed, OC, etc.)</label>
          <input class="form-control" type="file" id="documentsUpload" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple />
          <small class="form-text text-muted">Supported formats: PDF, DOC, Images</small>
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center mt-4">
          <button type="submit" class="btn btn-primary btn-lg px-5">Submit Listing</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS (Popper included) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // List of ward-based Mumbai regions for auto-suggest
    const mumbaiLocalities = [
      'Andheri East',
      'Andheri West',
      'Borivali West',
      'Borivali East',
      'Dahisar East',
      'Dahisar West',
      'Goregaon East',
      'Goregaon West',
      'Malad East',
      'Malad West',
      'Kurla West',
      'Kurla East',
      'Chembur',
      'Bandra East',
      'Bandra West',
      'Mumbai Central',
      'Dadar East',
      'Dadar West',
      'Vile Parle East',
      'Vile Parle West',
      'Powai',
      'Vikhroli East',
      'Vikhroli West',
      'Sion East',
      'Sion West',
      'Colaba',
      'Churchgate',
      'Fort',
      'Byculla',
      'Wadala East',
      'Wadala West',
    ];

    const localityInput = document.getElementById('locality');
    const suggestionsBox = document.getElementById('localitySuggestions');

    localityInput.addEventListener('input', () => {
      const inputVal = localityInput.value.trim().toLowerCase();
      suggestionsBox.innerHTML = '';
      if (inputVal.length === 0) {
        suggestionsBox.style.display = 'none';
        return;
      }
      const filtered = mumbaiLocalities.filter(loc =>
        loc.toLowerCase().startsWith(inputVal)
      );
      if (filtered.length === 0) {
        suggestionsBox.style.display = 'none';
        return;
      }
      filtered.forEach(loc => {
        const li = document.createElement('li');
        li.classList.add('list-group-item', 'list-group-item-action', 'py-1', 'small');
        li.textContent = loc;
        li.addEventListener('click', () => {
          localityInput.value = loc;
          suggestionsBox.style.display = 'none';
        });
        suggestionsBox.appendChild(li);
      });
      suggestionsBox.style.display = 'block';
    });

    document.addEventListener('click', (e) => {
      if (!localityInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
        suggestionsBox.style.display = 'none';
      }
    });

    // GSAP animations
    window.addEventListener('load', () => {
      gsap.from('#propertyForm', {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: 'power3.out',
      });
      gsap.from('h1', {
        duration: 1,
        y: -50,
        opacity: 0,
        ease: 'power3.out',
      });
    });

    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
      input.addEventListener('focus', () => {
        gsap.to(input, {
          duration: 0.3,
          boxShadow: '0 0 8px rgba(13, 110, 253, 0.7)',
          ease: 'power1.out',
        });
      });
      input.addEventListener('blur', () => {
        gsap.to(input, {
          duration: 0.3,
          boxShadow: 'none',
          ease: 'power1.out',
        });
      });
    });

    // Form submit handling
    document.getElementById('propertyForm').addEventListener('submit', (e) => {
      e.preventDefault();
      // Simple validation and form data processing simulation
      const form = e.target;
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      alert('Property listing submitted successfully!');
      form.reset();
    });

    document.getElementById('imagesVideos').addEventListener('change', function () {
      const files = this.files;
      if (files.length > 10) {
        alert('You can upload a maximum of 10 files.');
        this.value = '';
        return;
      }
      for (let i = 0; i < files.length; i++) {
        if (files[i].size > 5 * 1024 * 1024) {
          alert(`File "${files[i].name}" exceeds the 5MB size limit.`);
          this.value = '';
          return;
        }
      }
    });
  </script>
</body>

</html>
