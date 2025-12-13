<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bharath Nursery & Primary School</title>

    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .top-header {
            background: #017bb4;
            color: #fff;
            font-size: 15px;
            padding: 6px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .top-header .left-info span { margin-right: 20px; }
        .top-header .social-icons a {
            color: #fff;
            margin-left: 12px;
            font-size: 15px;
            transition: .3s;
        }
        .top-header .social-icons a:hover { color: #ffd700; }
        nav .nav-link { font-size: 16px; margin-right: 8px; }
        nav .nav-link:hover, nav .nav-link.active {
            color: #017bb4 !important;
        }
        @media (max-width: 768px) {
            .top-header { justify-content: center; text-align: center; }
            .top-header .left-info { margin-bottom: 5px; }
        }
        .nav-link.active {
            color: #017bb4 !important;
            font-weight: 600;
        }
    </style>
</head>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<body>

<!-- 💠 TOP HEADER -->
<div class="top-header">
    <div class="left-info">
        <span class="phone"><i class="fa fa-phone"></i> 9788925222</span>
        <span class="email"><i class="fa fa-envelope"></i> bharathividyalaya1991@gmail.com</span>
    </div>
    <!-- <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div> -->
</div>

<!-- 💠 MAIN HEADER & NAV BAR -->
<header class="py-3 px-3 bg-white shadow-sm">
    <div class="d-flex align-items-center justify-content-between flex-wrap">

        <!-- Logo & School Title -->
        <div class="d-flex align-items-center mb-2 mb-lg-0">
            <img src="assets/img/logo1.png" height="80" class="me-3">
            <div>
                <h3 class="m-0 fw-bold">BHARATH</h3>
                <div>Nursery & Primary School</div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse">
               <ul class="navbar-nav fw-semibold ms-lg-4">
                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'home.php') ? 'active' : '' ?>" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'admission.php') ? 'active' : '' ?>" href="admission.php">Admission</a></li>
                    <!-- <li class="nav-item"><a class="nav-link <?= ($currentPage == 'features.php') ? 'active' : '' ?>" href="features.php">Features</a></li> -->

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?=
                            ($currentPage == 'education_activities.php' ||
                            $currentPage == 'circular_activities.php' ||
                            $currentPage == 'extra_curricular_activities.php')
                            ? 'active' : '' ?>"
                            href="#" id="activitiesDropdown" data-bs-toggle="dropdown">
                            Activities
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item <?= ($currentPage == 'education_activities.php') ? 'active' : '' ?>" href="education_activities.php">Education</a></li>
                            <li><a class="dropdown-item <?= ($currentPage == 'circular_activities.php') ? 'active' : '' ?>" href="circular_activities.php">Circular</a></li>
                            <li><a class="dropdown-item <?= ($currentPage == 'extra_curricular_activities.php') ? 'active' : '' ?>" href="extra_curricular_activities.php">Extra curricular</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'rules.php') ? 'active' : '' ?>" href="rules.php">Rules</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'request_parents.php') ? 'active' : '' ?>" href="request_parents.php">Request For Parents</a></li>
                    <!-- <li class="nav-item"><a class="nav-link <?= ($currentPage == 'gallery.php') ? 'active' : '' ?>" href="gallery.php">Gallery</a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?=
                            ($currentPage == 'photo.php' ||
                            $currentPage == 'video.php')
                            ? 'active' : '' ?>"
                            href="#" id="activitiesDropdown" data-bs-toggle="dropdown">
                            Gallery
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="activitiesDropdown">
                            <li><a class="dropdown-item <?= ($currentPage == 'photo.php') ? 'active' : '' ?>"
                                href="photo.php">Photo</a></li>

                            <li><a class="dropdown-item <?= ($currentPage == 'video.php') ? 'active' : '' ?>"
                                href="video.php">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
                </ul>

            </div>
        </nav>

    </div>
</header>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
