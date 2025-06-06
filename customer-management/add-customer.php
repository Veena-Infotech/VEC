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
        <!-- |enctype="multipart/form-data"|  <-- is for file uploading  -->
        <form id="customerForm" class="needs-validation" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" name="full_name" required placeholder="Enter full name">
            </div>
            <div class="col-md-6">
              <label class="form-label">Customer Type</label>
              <select class="form-select" name="customerType" id="customerType" required>
                <option value="">Select</option>
                <option value="Buyer">Buyer</option>
                <option value="Seller">Seller</option>
                <option value="Tenant">Tenant</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Contact Number</label>
              <input type="tel" class="form-control" name="contact" required placeholder="Enter contact number">
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required placeholder="Enter email">
            </div>

            <div class="col-md-6">
              <label class="form-label">Upload ID Proof (PDF/JPEG only)</label>
              <input type="file" class="form-control" name="uploadFile" id="idProof" accept=".pdf,.jpeg,.jpg" required placeholder="Upload ID proof">
            </div>

            <div class="col-md-6">
              <label class="form-label">Budget Range</label>
              <input type="range" class="form-range" min="100000" max="10000000" step="50000" name="budgetRange" id="budgetRange" required>
              <div class="fw-medium">Budget: <span id="budgetDisplay">₹100000</span></div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Preferred Localities / Areas</label>
              <input type="text" name="area" class="form-control" placeholder="Enter preferred localities or areas" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Purpose</label>
              <select class="form-select" name="purpose" required>
                <option value="Investment">Investment</option>
                <option value="Self-use">Self-use</option>
                <option value="Rental">Rental</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type of Property Interested In</label>
              <input type="text" name="property_type" class="form-control" required placeholder="e.g. Apartment, Villa, Commercial">
            </div>
            <div class="col-md-6">
              <label class="form-label">Agent Linked</label>
              <input type="text" name="agent_linked" class="form-control" required placeholder="Enter agent name or ID">
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select class="form-select" name="status" required>
                <option value="Looking">Looking</option>
                <option value="OnHold">On Hold</option>
                <option value="Closed Deal">Closed Deal</option>
              </select>
            </div>
            <div class="col-12" id="sellerFields" style="display:none;">
              <label class="form-label">Owned Property Details</label>
              <textarea class="form-control"  name="owned_property" id="owned_property" placeholder="Enter wned property details..." required></textarea>
            </div>
            <div class="col-12" id="tenantFields" style="display:none;">
              <label class="form-label">Rental Duration</label>
              <input type="text" class="form-control" name="tenant_duration" id="tenant_duration" placeholder="e.g. 6 months, 1 year" required>
            </div>
            <div class="col-12 text-center">
              <button type="submit" name="add_customer_btn" class="btn btn-primary px-5 py-2 rounded-pill mt-3">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- php add customer code -->
  <?php
  include '../PhpFiles/connection.php';  //connecting the database

 

  if (isset($_POST['add_customer_btn'])) {
    $name = $_POST['full_name'];
    $contact = $_POST['contact'];
    //  $file = $_POST[''];
    $area = $_POST['area'];
    $property_type = $_POST['property_type'];
    $status = $_POST['status'];
    $customer_type = $_POST['customerType'];
    $email = $_POST['email'];
    $budget = $_POST['budgetRange'];
    $purpose = $_POST['purpose'];
    $agent_linked = $_POST['agent_linked'];
    $owned_property = $_POST['owned_property'];
    $rental_duration = $_POST['tenant_duration'];

    // spliting full name as 1st_name and last_name
    $full_name = trim($_POST['full_name']);
    $name_parts = explode(" ", $full_name);

    // Simple logic:
    $f_name = $name_parts[0]; // First word as first name
    $l_name = isset($name_parts[1]) ? $name_parts[1] : ''; // Second word or blank

    // generate unique id manually
    $uid = uniqid('customer_', true);

    // file uploading
     $src = "../Uploads/";
    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] == 0) {
      $file = basename($_FILES['uploadFile']['name']);
      $srcPath = $src . $file;

      // to move file 
      if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $srcPath)) {

        $query = "INSERT INTO `tbl_add_customer` (`uid`, `f_name`, `l_name`, `customer_type`, `contact`, `email`, `upload_file_name`,`upload_file_path`, `budget`, `area`, `property_type`, `status`, `purpose`, `agent_linked`, `owned_property`, `rental_duration`) VALUES ('$uid', '$f_name', '$l_name', '$customer_type', '$contact', '$email', '$file', '$srcPath', '$budget', '$area', '$property_type', '$status', '$purpose', '$agent_linked', '$owned_property', '$rental_duration')";

        $result = mysqli_query($conn, $query) or die("Query Unsuccessful" . mysqli_errno($conn) . "");

        if ($result) {
          echo "<script> alert('Succesfully Added Customer'); window.location.href = 'add-customer.php' </script>";
        } else {
          echo "<script> alert('Failed : '" . mysqli_error($conn) . "); window.location.href = 'add-customer.php' </script> ";
        }
      }
    }
  }
  ?>

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
  </script>

  <script>
  document.getElementById("customerType").addEventListener("change", function () {
    const type = this.value;

    const sellerFields = document.getElementById("sellerFields");
    const tenantFields = document.getElementById("tenantFields");

    // Clear previous values and requirements
    document.getElementById("owned_property").value = "";
    document.getElementById("owned_property").removeAttribute("required");

    document.getElementById("tenant_duration").value = "";
    document.getElementById("tenant_duration").removeAttribute("required");

    // Toggle based on selected type
    if (type === "Seller") {
      sellerFields.style.display = "block";
      tenantFields.style.display = "none";
      document.getElementById("owned_property").setAttribute("required", true);
    } else if (type === "Tenant") {
      sellerFields.style.display = "none";
      tenantFields.style.display = "block";
      document.getElementById("tenant_duration").setAttribute("required", true);
    } else {
      sellerFields.style.display = "none";
      tenantFields.style.display = "none";
    }
  });
</script>


  <?php include '../footer.php'; ?>

</body>

</html>