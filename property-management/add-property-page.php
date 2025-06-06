<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Property Listing Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<body class="bg-light">
  <?php include '../navbar.php'; ?>
  <div class="container py-5">
    <h1 class="mb-4 text-primary fw-bold text-center">Add Your Property</h1>
    <form name="propertyForm" class="bg-white p-4 rounded shadow-sm">
      <div class="row g-3">

        <!-- Property Type -->
        <div class="col-md-4">
          <label for="propertyType" class="form-label">Property Type</label>
          <select class="form-select" id="propertyType" name="propertyType" required>
            <option value="" disabled selected>Select property type</option>
            <option>1 BHK</option>
            <option>2 BHK</option>
            <option>3 BHK</option>
            <option>4 BHK</option>
            <option>5 BHK+</option>
            <option>Studio Apartment</option>
            <option>Apartment</option>
            <option>Independent House</option>
            <option>Bungalow</option>
            <option>Villa</option>
            <option>Row House</option>
            <option>Duplex</option>
            <option>Penthouse</option>
            <option>Farmhouse</option>
          </select>
        </div>

        <!-- Transaction Type -->
        <div class="col-md-4">
          <label for="transactionType" class="form-label">Transaction Type</label>
          <select class="form-select" id="transactionType" name="transactionType" required>
            <option value="" disabled selected>Select transaction type</option>
            <option>Buy</option>
            <option>Sell</option>
            <option>Rent</option>
          </select>
        </div>

        <!-- Locality -->
        <div class="col-md-4 position-relative">
          <label for="locality" class="form-label">Locality (Ward-based Mumbai regions)</label>
          <input type="text" class="form-control" id="locality" name="locality" placeholder="Start typing locality..." autocomplete="off" required />
          <ul class="list-group position-absolute w-100" id="localitySuggestions" style="z-index: 1050; max-height: 180px; overflow-y: auto; display: none;"></ul>
        </div>

        <!-- Address -->
        <div class="col-md-6">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter full address" required />
        </div>

        <!-- Pincode -->
        <div class="col-md-3">
          <label for="pincode" class="form-label">Pincode</label>
          <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" pattern="[0-9]{6}" title="6 digit pincode" required />
        </div>

        <!-- Landmark -->
        <div class="col-md-3">
          <label for="landmark" class="form-label">Landmark</label>
          <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Nearby landmark" />
        </div>

        <!-- Area -->
        <div class="col-12">
          <legend class="h5 text-secondary mb-3">Area (in sqft)</legend>
          <div class="row g-3">
            <div class="col-md-4">
              <label for="areaCarpet" class="form-label">Carpet Area</label>
              <input type="number" min="0" class="form-control" id="areaCarpet" name="carpetArea" placeholder="e.g., 900" required />
            </div>
            <div class="col-md-4">
              <label for="areaBuiltup" class="form-label">Built-up Area</label>
              <input type="number" min="0" class="form-control" id="areaBuiltup" name="builtupArea" placeholder="e.g., 1100" required />
            </div>
            <div class="col-md-4">
              <label for="areaPlot" class="form-label">Plot Area</label>
              <input type="number" min="0" class="form-control" id="areaPlot" name="plotArea" placeholder="e.g., 1200" required />
            </div>
          </div>
        </div>

        <!-- Price and Negotiable -->
        <div class="col-md-8">
          <label for="price" class="form-label">Price (INR)</label>
          <input type="number" min="0" class="form-control" id="price" name="price" placeholder="Enter price" required />
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div class="form-check form-switch mt-4">
            <input class="form-check-input" type="checkbox" id="negotiableToggle" name="isNegotiable" />
            <label class="form-check-label" for="negotiableToggle">Negotiable</label>
          </div>
        </div>

        <!-- Amenities -->
        <div class="col-12">
          <legend class="h5 text-secondary mb-3">Amenities</legend>
          <div class="row row-cols-2 row-cols-md-4 g-2">
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityLift" name="amenities[]" value="Lift" />
              <label class="form-check-label" for="amenityLift">Lift</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityParking" name="amenities[]" value="Parking" />
              <label class="form-check-label" for="amenityParking">Parking</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenitySecurity" name="amenities[]" value="Security" />
              <label class="form-check-label" for="amenitySecurity">Security</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityGarden" name="amenities[]" value="Garden" />
              <label class="form-check-label" for="amenityGarden">Garden</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityGym" name="amenities[]" value="Gym" />
              <label class="form-check-label" for="amenityGym">Gym</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenitySwimming" name="amenities[]" value="Swimming Pool" />
              <label class="form-check-label" for="amenitySwimming">Swimming Pool</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityPowerBackup" name="amenities[]" value="Power Backup" />
              <label class="form-check-label" for="amenityPowerBackup">Power Backup</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" id="amenityClubhouse" name="amenities[]" value="Clubhouse" />
              <label class="form-check-label" for="amenityClubhouse">Clubhouse</label>
            </div>
          </div>
        </div>

        <!-- Linked To -->
        <div class="col-md-6">
          <legend class="h5 text-secondary mb-3">Linked To</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="linkedTo" id="linkedOwner" value="Owner" required />
            <label class="form-check-label" for="linkedOwner">Owner</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="linkedTo" id="linkedAgent" value="Agent" required />
            <label class="form-check-label" for="linkedAgent">Agent</label>
          </div>
        </div>

        <!-- Source -->
        <div class="col-md-6">
          <label for="source" class="form-label">Source</label>
          <select class="form-select" id="source" name="source" required>
            <option value="" disabled selected>Select source</option>
            <option>Direct Client</option>
            <option>Agent Referral</option>
          </select>
        </div>

        <!-- Uploads -->
        <div class="col-md-6">
          <label for="imagesVideos" class="form-label">Upload Images/Videos</label>
          <input class="form-control" type="file" id="imagesVideos" name="imagesVideos[]" accept="image/*,video/*" multiple />
          <small class="form-text text-muted">You can upload up to 10 images/videos (max 5MB each).</small>
        </div>

        <div class="col-md-6">
          <label for="documentsUpload" class="form-label">Upload Documents (Title Deed, OC, etc.)</label>
          <input class="form-control" type="file" id="documentsUpload" name="documents[]" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple />
          <small class="form-text text-muted">Supported formats: PDF, DOC, Images</small>
        </div>

        <!-- Submit -->
        <div class="col-12 text-center mt-4">
          <button type="submit" class="btn btn-primary btn-lg px-5">Submit Listing</button>
        </div>

      </div>
    </form>

  </div>


  <?php include '../footer.php'; ?>


</body>

</html>