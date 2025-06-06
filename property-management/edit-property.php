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
    <h1 class="mb-4 text-primary fw-bold text-center">Edit Your Property</h1>
    <form id="propertyForm" class="bg-white p-4 rounded shadow-sm">
      <div class="row g-3">

        <!-- Property Type -->
        <div class="col-md-4">
          <label class="form-label">Property Type</label>
          <select class="form-select" name="propertyType" required>
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
          <label class="form-label">Transaction Type</label>
          <select class="form-select" name="transactionType" required>
            <option value="" disabled selected>Select transaction type</option>
            <option>Buy</option>
            <option>Sell</option>
            <option>Rent</option>
          </select>
        </div>

        <!-- Locality -->
        <div class="col-md-4 position-relative">
          <label class="form-label">Locality (Ward-based Mumbai regions)</label>
          <input type="text" class="form-control" name="locality" placeholder="Start typing locality..." autocomplete="off" required />
          <ul class="list-group position-absolute w-100" style="z-index: 1050; max-height: 180px; overflow-y: auto; display: none;"></ul>
        </div>

        <!-- Address -->
        <div class="col-md-6">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address" placeholder="Enter full address" required />
        </div>

        <!-- Pincode -->
        <div class="col-md-3">
          <label class="form-label">Pincode</label>
          <input type="text" class="form-control" name="pincode" placeholder="Enter pincode" pattern="[0-9]{6}" title="6 digit pincode" required />
        </div>

        <!-- Landmark -->
        <div class="col-md-3">
          <label class="form-label">Landmark</label>
          <input type="text" class="form-control" name="landmark" placeholder="Nearby landmark" />
        </div>

        <!-- Area -->
        <div class="col-12">
          <legend class="h5 text-secondary mb-3">Area (in sqft)</legend>
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">Carpet Area</label>
              <input type="number" min="0" class="form-control" name="areaCarpet" placeholder="e.g., 900" required />
            </div>
            <div class="col-md-4">
              <label class="form-label">Built-up Area</label>
              <input type="number" min="0" class="form-control" name="areaBuiltup" placeholder="e.g., 1100" required />
            </div>
            <div class="col-md-4">
              <label class="form-label">Plot Area</label>
              <input type="number" min="0" class="form-control" name="areaPlot" placeholder="e.g., 1200" required />
            </div>
          </div>
        </div>

        <!-- Price and Negotiable -->
        <div class="col-md-8">
          <label class="form-label">Price (INR)</label>
          <input type="number" min="0" class="form-control" name="price" placeholder="Enter price" required />
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div class="form-check form-switch mt-4">
            <input class="form-check-input" type="checkbox" name="negotiable" />
            <label class="form-check-label">Negotiable</label>
          </div>
        </div>

        <!-- Amenities -->
        <div class="col-12">
          <legend class="h5 text-secondary mb-3">Amenities</legend>
          <div class="row row-cols-2 row-cols-md-4 g-2">
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Lift" />
              <label class="form-check-label">Lift</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Parking" />
              <label class="form-check-label">Parking</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Security" />
              <label class="form-check-label">Security</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Garden" />
              <label class="form-check-label">Garden</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Gym" />
              <label class="form-check-label">Gym</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Swimming Pool" />
              <label class="form-check-label">Swimming Pool</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Power Backup" />
              <label class="form-check-label">Power Backup</label>
            </div>
            <div class="form-check col">
              <input class="form-check-input" type="checkbox" name="amenities" value="Clubhouse" />
              <label class="form-check-label">Clubhouse</label>
            </div>
          </div>
        </div>

        <!-- Linked To -->
        <div class="col-md-6">
          <legend class="h5 text-secondary mb-3">Linked To</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="linkedTo" value="Owner" required />
            <label class="form-check-label">Owner</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="linkedTo" value="Agent" required />
            <label class="form-check-label">Agent</label>
          </div>
        </div>

        <!-- Source -->
        <div class="col-md-6">
          <label class="form-label">Source</label>
          <select class="form-select" name="source" required>
            <option value="" disabled selected>Select source</option>
            <option>Direct Client</option>
            <option>Agent Referral</option>
          </select>
        </div>

        <!-- Uploads -->
        <div class="col-md-6">
          <label class="form-label">Upload Images/Videos</label>
          <input class="form-control" type="file" name="mediaFiles" accept="image/*,video/*" multiple />
          <small class="form-text text-muted">You can upload up to 10 images/videos (max 5MB each).</small>
        </div>

        <div class="col-md-6">
          <label class="form-label">Upload Documents (Title Deed, OC, etc.)</label>
          <input class="form-control" type="file" name="documents" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple />
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