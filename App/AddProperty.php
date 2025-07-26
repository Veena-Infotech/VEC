<?php
$activePage = 'add_property';
include './sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Add Property</title>
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900"
    />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Material Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="../assets/css/material-dashboard.css?v=3.2.0"
      rel="stylesheet"
    />
  <style>
    /* Ensure sidebar does not overlap content */
    body {
      background: #f8f9fa;
    }
    .main-content-custom {
      margin-left: 290px; /* Match or slightly exceed your sidebar width */
      padding: 32px 24px 24px 24px;
      min-height: 100vh;
    }
    @media (max-width: 1200px) {
      .main-content-custom {
        margin-left: 0;
        padding: 16px;
      }
    }
    /* Remove extra top margin if sidebar or navbar adds it */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
  <!-- Sidebar is already included above -->
  <div class="main-content-custom">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-2 pb-0 pt-1 px-0">
        <li class="breadcrumb-item text-sm">
          <a class="opacity-5 text-dark" href="./Dashboard.php">Home</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
          Add Property
        </li>
      </ol>
    </nav>
    <!-- Page Content -->
    <h2>Add Property</h2>
    <form>
       <!-- Navbar / Breadcrumb -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        
      </div>
    </nav>
    <!-- End Navbar / Breadcrumb -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
          <div class="card">
            
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="propertyType" class="form-label">Property Type</label>
                    <select class="form-select" id="propertyType" name="propertyType">
                      <option selected disabled>Select type</option>
                      <option>1 BHK</option>
                      <option>2 BHK</option>
                      <option>3 BHK</option>
                      <option>4 BHK</option>
                      <option>5 BHK</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="transactionType" class="form-label">Transaction Type</label>
                    <select class="form-select" id="transactionType" name="transactionType">
                      <option selected disabled>Select transaction</option>
                      <option>Sell</option>
                      <option>Rent</option>
                    </select>
                  </div>
                 <div class="input-group input-group-outline my-3">
                    <label class="form-label">Locality Ward Based (Mumbai Region)</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Address</label>
                    <textarea  class="form-control" id=""></textarea>
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control">
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="input-group input-group-outline my-3">
                    <label class="form-label">Landmark</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="input-group input-group-outline my-3">
                    <label class="form-label">Carpet area (Sq. FT)</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4 mb-3">
                   <div class="input-group input-group-outline my-3">
                    <label class="form-label">Build Up area (SQ ft)</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="input-group input-group-outline my-3">
                    <label class="form-label">Plot area (Sq Ft)</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="input-group input-group-outline my-3">
                    <label class="form-label">Price</label>
                    <input type="nummber" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4 mb-3 d-flex align-items-center">
                    <label class="form-label me-3 mb-0">Negotiable</label>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="negotiable" name="negotiable">
                    </div>
                  </div>
                   <div class="input-group input-group-static">
       <label for="exampleFormControlSelect2" class="ms-0">Amenities</label>
       <select multiple="" class="form-control pb-4" id="exampleFormControlSelect2">
         <option>Gym</option>
         <option>Parking</option>
         <option>Balcony</option>
         <option>Turf</option>
         <option></option>
       </select>
     </div>
                  <div class="col-md-4 mb-3">
                    <label for="source" class="form-label">Source</label>
                    <select class="form-select" id="source" name="source">
                      <option selected disabled>Select source</option>
                      <option>Direct Client</option>
                      <option>Agent</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="photos" class="form-label">Upload Photos</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="photos" name="photos[]" multiple accept="image/*">
                      <label class="input-group-text" for="photos">Choose files</label>
                    </div>
                    <small class="text-muted">Maximum size: 2MB per file.</small>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="documents" class="form-label">Upload Documents</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="documents" name="documents[]" multiple>
                      <label class="input-group-text" for="documents">Choose files</label>
                    </div>
                    <small class="text-muted">Maximum size: 2MB per file.</small>
                  </div>
                </div>
                <div class="mt-4 text-end">
                  <button type="submit" class="btn btn-primary">Add Property</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</body>
</html>