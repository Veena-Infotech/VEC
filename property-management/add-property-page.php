<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VEC</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">VEC</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Property</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="/VEC/property-management/add-property-page.php">Add Property</a>
                        <a class="collapse-item" href="/VEC/property-management/manage-property-page.php">Manage Property</a>
                        <a class="collapse-item" href="/VEC/property-management/archive-property-page.php">Archive Property</a>
                        <a class="collapse-item" href="/VEC/property-management/follow-up-page.php">Property Follow-up</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Customers</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/VEC/customer-management/add-customer.php">Add Customer</a>
                        <a class="collapse-item" href="/VEC/customer-management/manage-customer.php">Manage Customer</a>
                        <a class="collapse-item" href="/VEC/customer-management/customer-closer-log.php">Customer Closure log</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Agent</span>
                </a>
                <div id="collapsePages" class="collapse " aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/VEC/agent-broker-management/add-agent-page.php">Add Agent</a>
                        <a class="collapse-item" href="/VEC/agent-broker-management/agent-linked-property.php">Agent Properties</a>
                        <a class="collapse-item" href="/VEC/agent-broker-management/client-ref-log.php">Client Referrals</a>
                        <a class="collapse-item" href="/VEC/agent-broker-management/commission-manage.php">Commission and <br> Agreement Logs</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Meetings and Follow-up</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>



                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h3 class="h3 mb-4 text-gray-800"> </h3>
                    <div class="container py-4">
                        <h1 class="mb-4 text-primary fw-bold text-center fs-3">Add Your Property</h1>

                        <form id="propertyForm" class="bg-white p-4 rounded shadow-sm small mb-2" method="post" enctype="multipart/form-data">
                            <div class="row gy-4">

                                <!-- Property Type -->
                                <div class="col-md-6">
                                    <label for="propertyType" class="form-label">Property Type</label>
                                    <select class="form-select" id="propertyType" name="propertyType" required>
                                        <option value="" disabled selected>Select property type</option>
                                        <option value="1 BHK">1 BHK</option>
                                        <option value="2 BHK">2 BHK</option>
                                        <option value="3 BHK">3 BHK</option>
                                        <option value="4 BHK">4 BHK</option>
                                        <option value="5 BHK+">5 BHK+</option>
                                        <option value="Studio Apartment">Studio Apartment</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Independent House">Independent House</option>
                                        <option value="Bungalow">Bungalow</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Row House">Row House</option>
                                        <option value="Duplex">Duplex</option>
                                        <option value="Penthouse">Penthouse</option>
                                        <option value="Farmhouse">Farmhouse</option>
                                    </select>
                                </div>

                                <!-- Transaction Type -->
                                <div class="col-md-6">
                                    <label for="transactionType" class="form-label">Transaction Type</label>
                                    <select class="form-select" id="transactionType" name="transactionType" required>
                                        <option value="" disabled selected>Select transaction type</option>
                                        <option value="Buy">Buy</option>
                                        <option value="Sell">Sell</option>
                                        <option value="Rent">Rent</option>
                                    </select>
                                </div>

                                <!-- Locality -->
                                <div class="col-md-6 position-relative">
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
                                <div class="col-md-6">
                                    <label for="pincode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" pattern="[0-9]{6}" title="6 digit pincode" required />
                                </div>

                                <!-- Landmark -->
                                <div class="col-md-6">
                                    <label for="landmark" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Nearby landmark" />
                                </div>

                                <!-- location -->
                                <div class="col-md-6">
                                    <label for="location" class="form-label">Location (City, State)</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="e.g., Mumbai, Maharashtra" required />
                                </div>

                                <!-- Area Fields -->
                                <div class="col-md-6">
                                    <label for="areaCarpet" class="form-label">Carpet Area (sqft)</label>
                                    <input type="number" min="0" class="form-control" id="areaCarpet" name="carpetArea" placeholder="e.g., 900" required />
                                </div>

                                <div class="col-md-6">
                                    <label for="areaBuiltup" class="form-label">Built-up Area (sqft)</label>
                                    <input type="number" min="0" class="form-control" id="areaBuiltup" name="builtupArea" placeholder="e.g., 1100" required />
                                </div>

                                <div class="col-md-6">
                                    <label for="areaPlot" class="form-label">Plot Area (sqft)</label>
                                    <input type="number" min="0" class="form-control" id="areaPlot" name="plotArea" placeholder="e.g., 1200" required />
                                </div>

                                <!-- Price and Negotiable -->
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Price (INR)</label>
                                    <input type="number" min="0" class="form-control" id="price" name="price" placeholder="Enter price" required />
                                </div>

                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="negotiableToggle" name="isNegotiable" />
                                        <label class="form-check-label ms-2" for="negotiableToggle">Negotiable</label>
                                    </div>
                                </div>

                                <!-- Amenities -->
                                <div class="col-12">
                                    <label class="form-label">Amenities</label>
                                    <div class="row row-cols-2 row-cols-md-4 g-2">
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenityLift" name="amenities[]" value="Lift">
                                            <label class="form-check-label" for="amenityLift">Lift</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenityParking" name="amenities[]" value="Parking">
                                            <label class="form-check-label" for="amenityParking">Parking</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenitySecurity" name="amenities[]" value="Security">
                                            <label class="form-check-label" for="amenitySecurity">Security</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenityGarden" name="amenities[]" value="Garden">
                                            <label class="form-check-label" for="amenityGarden">Garden</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenityGym" name="amenities[]" value="Gym">
                                            <label class="form-check-label" for="amenityGym">Gym</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenitySwimming" name="amenities[]" value="Swimming Pool">
                                            <label class="form-check-label" for="amenitySwimming">Swimming Pool</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenityPowerBackup" name="amenities[]" value="Power Backup">
                                            <label class="form-check-label" for="amenityPowerBackup">Power Backup</label>
                                        </div>
                                        <div class="form-check col">
                                            <input class="form-check-input" type="checkbox" id="amenityClubhouse" name="amenities[]" value="Clubhouse">
                                            <label class="form-check-label" for="amenityClubhouse">Clubhouse</label>
                                        </div>
                                    </div>
                                </div>


                                <!-- Linked To -->
                                <div class="col-md-6">
                                    <label class="form-label">Linked To</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="linkedTo" id="linkedOwner" value="Owner" required>
                                        <label class="form-check-label" for="linkedOwner">Owner</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="linkedTo" id="linkedAgent" value="Agent" required>
                                        <label class="form-check-label" for="linkedAgent">Agent</label>
                                    </div>
                                </div>

                                <!-- Owner Name Input -->
                                <div class="col-md-6" id="ownerNameContainer" style="display: none;">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="ownerName" name="ownerName" placeholder="Enter Owner Name">
                                        <label for="ownerName">Please enter the name of the owner</label>
                                    </div>
                                </div>

                                <!-- Agent Name Input -->
                                <div class="col-md-6" id="agentNameContainer" style="display: none;">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="agentName" name="agentName" placeholder="Enter Agent Name">
                                        <label for="agentName">Please enter the name of the agent</label>
                                    </div>
                                </div>



                                <!-- Source -->
                                <div class="col-md-6">
                                    <label for="source" class="form-label">Source</label>
                                    <select class="form-select" id="source" name="source" required>
                                        <option value="" disabled selected>Select source</option>
                                        <option value="Direct Client">Direct Client</option>
                                        <option value="Agent Referral">Agent Referral</option>
                                    </select>
                                </div>

                                <!-- Uploads -->
                                <div class="col-md-6">
                                    <label for="imagesVideos" class="form-label">Upload Images/Videos</label>
                                    <input class="form-control" type="file" id="imagesVideos" name="imagesVideos[]" accept="image/*,video/*" multiple />
                                    <small class="text-muted">Max 10 files, 5MB each</small>
                                </div>

                                <div class="col-md-6">
                                    <label for="documentsUpload" class="form-label">Upload Documents</label>
                                    <input class="form-control" type="file" id="documentsUpload" name="documents[]" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple />
                                    <small class="text-muted">PDF, DOC, JPG, PNG formats supported</small>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-sm px-4" name="add-property-btn">Submit Listing</button>
                                </div>

                            </div>
                        </form>
                        <?php

                        include '../PhpFiles/connection.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Required fields
                            $requiredFields = ['propertyType', 'transactionType', 'locality', 'address', 'pincode', 'landmark', 'carpetArea', 'builtupArea', 'plotArea', 'price', 'linkedTo', 'source'];

                            foreach ($requiredFields as $field) {
                                if (empty($_POST[$field])) {
                                    die("Missing required field: $field");
                                }
                            }

                            // Collect fields
                            $propertyType    = $_POST['propertyType'];
                            $transactionType = $_POST['transactionType'];
                            $locality        = $_POST['locality'];
                            $address         = $_POST['address'];
                            $pincode         = $_POST['pincode'];
                            $landmark        = $_POST['landmark'];
                            $carpetArea      = $_POST['carpetArea'];
                            $builtupArea     = $_POST['builtupArea'];
                            $plotArea        = $_POST['plotArea'];
                            $price           = $_POST['price'];
                            $isNegotiable    = isset($_POST['isNegotiable']) ? 1 : 0;
                            $linkedTo        = $_POST['linkedTo'];
                            $source          = $_POST['source'];
                            $amenities       = isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : '';

                            // generating unique ids
                            $uid             = uniqid('property_', true);

                            // file storing
                            $uploadDir       = '../Uploads/';
                            $imgFiles        = [];
                            $imgPaths        = [];
                            $docNames        = [];
                            $docPaths        = [];

                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }

                            // Upload images/videos
                            if (!empty($_FILES['imagesVideos']['name'][0])) {
                                foreach ($_FILES['imagesVideos']['tmp_name'] as $i => $tmpName) {
                                    $fileName = basename($_FILES['imagesVideos']['name'][$i]);
                                    $filePath = $uploadDir . uniqid() . '_' . $fileName;

                                    if (move_uploaded_file($tmpName, $filePath)) {
                                        $imgFiles[] = $fileName;
                                        $imgPaths[] = $filePath;
                                    }
                                }
                            }

                            // Upload documents
                            if (!empty($_FILES['documents']['name'][0])) {
                                foreach ($_FILES['documents']['tmp_name'] as $i => $tmpName) {
                                    $fileName = basename($_FILES['documents']['name'][$i]);
                                    $filePath = $uploadDir . uniqid() . '_' . $fileName;

                                    if (move_uploaded_file($tmpName, $filePath)) {
                                        $docNames[] = $fileName;
                                        $docPaths[] = $filePath;
                                    }
                                }
                            }

                            // Convert to strings
                            $imgFileStr = implode(', ', $imgFiles);
                            $imgPathStr = implode(', ', $imgPaths);
                            $docNameStr = implode(', ', $docNames);
                            $docPathStr = implode(', ', $docPaths);

                            // INSERT QUERY
                            $sql = "INSERT INTO tbl_add_property 
    (`uid`, `property_type`, `transaction_type`, `locality`, `address`, `pincode`, `landmark`, `carpet_area`, `built_up_area`, `plot_area`, `price`, `is_negotiable`, `amenities`, `linked_to`, `source`, `img_name`, `img_path`, `document_name`, `document_path`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                            $stmt = $conn->prepare($sql);

                            if (!$stmt) {
                                die("Prepare failed: " . $conn->error);
                            }

                            $stmt->bind_param(
                                "ssssssissiiisssssss",
                                $uid,
                                $propertyType,
                                $transactionType,
                                $locality,
                                $address,
                                $pincode,
                                $landmark,
                                $carpetArea,
                                $builtupArea,
                                $plotArea,
                                $price,
                                $isNegotiable,
                                $amenities,
                                $linkedTo,
                                $source,
                                $imgFileStr,
                                $imgPathStr,
                                $docNameStr,
                                $docPathStr
                            );


                            if ($stmt->execute()) {
                                echo "<script>alert('Property listed successfully'); window.location.href = 'add-property-page.php';</script>";
                            } else {
                                echo "Execute failed: " . $stmt->error;
                            }

                            $stmt->close();
                            $conn->close();
                        }
                        ?>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const ownerRadio = document.getElementById('linkedOwner');
                        const agentRadio = document.getElementById('linkedAgent');
                        const ownerContainer = document.getElementById('ownerNameContainer');
                        const agentContainer = document.getElementById('agentNameContainer');
                        const ownerInput = document.getElementById('ownerName');
                        const agentInput = document.getElementById('agentName');

                        function toggleInputFields() {
                            if (ownerRadio.checked) {
                                ownerContainer.style.display = 'block';
                                agentContainer.style.display = 'none';
                                ownerInput.required = true;
                                agentInput.required = false;
                                agentInput.value = '';
                            } else if (agentRadio.checked) {
                                agentContainer.style.display = 'block';
                                ownerContainer.style.display = 'none';
                                agentInput.required = true;
                                ownerInput.required = false;
                                ownerInput.value = '';
                            }
                        }

                        ownerRadio.addEventListener('change', toggleInputFields);
                        agentRadio.addEventListener('change', toggleInputFields);
                    });
                </script>


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white text-dark py-4 mt-auto">
                <hr class="border-top border-dark opacity-25 mb-4" />

                <div class="container text-center">
                    <div class="mb-3">
                        <p class="mb-1 fw-semibold">© 2025 Veena Group. All Rights Reserved.</p>
                        <p class="mb-3 small">Empowering Mumbai’s Real Estate Market through Smart Digital Solutions.</p>
                    </div>

                    <nav class="mb-3 d-flex justify-content-center gap-4 flex-wrap">
                        <a href="#" class="text-decoration-none text-primary fw-semibold small">Privacy Policy</a>
                        <a href="#" class="text-decoration-none text-primary fw-semibold small">Terms of Service</a>
                        <a href="#" class="text-decoration-none text-primary fw-semibold small">Contact Us</a>
                    </nav>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="text-primary fs-5" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-primary fs-5" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary fs-5" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>
            </footer>
            <!-- End of Footer -->

        </div>

    </div>





    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>


</body>

</html>