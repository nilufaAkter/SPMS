<?php

?>


<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>SPMS - Starlings</title>


    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3">
                        <img class="img-fluid" src="assets\img\IUB logo white.png" width="50%" height="50%" loading="auto" />
                    </div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul id="accordionSidebar" class="navbar-nav text-light">
                    <li class="nav-item">
                        <a class="nav-link active" href="employee_dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ploAnalysis.php">
                            <i class="fa fa-line-chart"></i>
                            <span>PLO Analysis</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ploAchieveStats.php">
                            <i class="fa fa-trophy"></i>
                            <span>PLO Achievement Stats</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="spiderChart.php">
                            <i class="fa fa-pie-chart"></i>
                            <span>Spider Chart Analysis</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataEntry.php">
                            <i class="fa fa-edit"></i>
                            <span>Data Entry</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewCourseOutline.php">
                            <i class="fa fa-book"></i>
                            <span>View Course Outline</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="enrollmentStatistics.php">
                            <i class="fa fa-user-plus"></i>
                            <span>Enrollment Stats</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="performanceStats.php">
                            <i class="fa fa-bar-chart"></i>
                            <span>GPA Analysis</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button id="sidebarToggle" class="btn rounded-circle border-0" type="button">
                    </button>
                </div>
            </div>
        </nav>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">
                            Dashboard
                        </h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col d-flex d-xxl-flex justify-content-center justify-content-xxl-center mb-4">
                            <div class="card shadow mb-4" style="width: 50%;">
                                <div class="card-header py-3"></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="padding-right: 0px;padding-left: 0px;">
                                        <div class="row align-items-center no-gutters" style="margin-right: 0px;margin-left: 0px;">
                                            <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center" style="padding-right: 0px;padding-left: 0px;">
                                                <img class="img-fluid" src="assets\img\background.png" loading="auto" />
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright">
                        <span>
                            Copyright © Starlings 2023
                        </span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>