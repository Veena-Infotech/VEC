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
    <title>Starter</title>
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
          <a class="opacity-5 text-dark" href="./Dashboard.php">Page</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
          Add Property
        </li>
      </ol>
    </nav>
    <!-- Page Content -->
    <h2>Stater code</h2>
    
  </div>
</body>
</html>