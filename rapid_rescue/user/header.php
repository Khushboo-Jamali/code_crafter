<?php
session_start();
include "config.php";
if (!isset($_SESSION['userId'])) {
  header('location:login-user.php');
  exit();
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rapid-Rescue_user-dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/logo.png" rel="icon">
  <link href="images/logo.png" rel="logo.png">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="login-user.php" class="logo d-flex align-items-center">
        <img src="images/logo.png" alt="">
        <span class="d-none d-lg-block">User Dashboard</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
    <?php
    $sel = "SELECT * FROM users";
    $res = mysqli_query($conn, $sel);
    while ($data = mysqli_fetch_array($res)) {
      $_SESSION['userId'] = $data['user_id'];
      $_SESSION['userpic'] = $data['pic'];
      $_SESSION['username'] = $data['firstname'];
    //   $_SESSION['userpic']=$data[''];


    }
    ?>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php if (isset($_SESSION['userpic'])) {
                        echo $_SESSION['userpic'];
                      } ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php if (isset($_SESSION['username'])) {
                                                                    echo $_SESSION['username'];
                                                                  } ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php if (isset($_SESSION['username'])) {
                    echo $_SESSION['username'];
                  } ?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="user_profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>




            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="login-user.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ambulance-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Book Ambulance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ambulance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Emergency.php">
              <i class="bi bi-circle"></i><span>Emergency Ambulance</span>
            </a>
          </li>
          <li>
            <a href="Non-Emergency.php">
              <i class="bi bi-circle"></i><span>Non-Emergency Ambulance</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#driver-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Driver</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="driver-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view_driver.php">
              <i class="bi bi-circle"></i><span>View Status</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ambul-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>View Ambulance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ambul-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view-ambulance.php">
              <i class="bi bi-circle"></i><span>View Status</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#medical-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Medical History</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="medical-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_medical_history.php">
              <i class="bi bi-circle"></i><span>Add Medical History</span>
            </a>
          </li>
          <li>
            <a href="view_medical_history.php">
              <i class="bi bi-circle"></i><span>View Medical History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pat-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>First-Aid_Instructions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pat-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="view_instruction.php">
              <i class="bi bi-circle"></i><span>View Instructions</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#dis-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Emt</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="dis-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view_emt.php">
              <i class="bi bi-circle"></i><span>View Emt</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->







  </aside><!-- End Sidebar-->

  <main id="main" class="main">