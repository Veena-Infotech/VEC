<?php
$activePage = 'dashboard'; // or 'web_dev', 'seo', 'uiux', 'graphic', 'signup'
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
    <title>Dashboard</title>
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
          <a class="opacity-5 text-dark" href="./Dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
          Dashboard
        </li>
      </ol>
    </nav>
    <!-- Page Content -->
    <h2>Dashboard</h2>
    <form>
      <div class="mb-3">
        <label for="propertyName" class="form-label">Property Name</label>
        <input type="text" class="form-control" id="propertyName" name="propertyName">
      </div>
      <div class="mb-3">
        <label for="propertyType" class="form-label">Property Type</label>
        <select class="form-control" id="propertyType" name="propertyType">
          <option>Apartment</option>
          <option>House</option>
          <option>Commercial</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="propertyPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="propertyPrice" name="propertyPrice">
      </div>
      <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
  </div>
</body>
</html>