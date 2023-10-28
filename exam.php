<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPMS - Starlings</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3"><img class="img-fluid" src="assets/img/IUB%20logo%20white.png"
                            width="50%" height="50%" loading="auto"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="employee_dashboard.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ploAnalysis.php"><i
                                class="fa fa-line-chart"></i><span>PLO Analysis</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ploAchieveStats.php"><i
                                class="fa fa-trophy"></i><span>PLO Achievement Stats</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="spiderChart.php"><i
                                class="fa fa-pie-chart"></i><span>Spider Chart Analysis</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="dataEntry.php"><i class="fa fa-edit"></i><span>Data
                                Entry</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="viewCourseOutline.php"><i
                                class="fa fa-book"></i><span>View Course Outline</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="enrollmentStatistics.php"><i
                                class="fa fa-user-plus"></i><span>Enrollment Stats</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="performanceStats.php"><i
                                class="fa fa-bar-chart"></i><span>GPA Analysis</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><i
                                class="fa fa-sign-out"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Exam</h3>
                    </div>
                    <hr>
                    <div class="row justify-content-evenly">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                  <a href="addExam.php" class="stretched-link"></a>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-dark fw-bold h5 mb-0"><span style="color: #4e73df;">Add
                                                    Exam</span></div>
                                        </div>
                                        <div class="col-auto"><i class="far fa-edit fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                  <a href="viewExam.php" class="stretched-link"></a>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-dark fw-bold h5 mb-0"><span
                                                    style="color: rgb(28,200,138);">View Exam</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-book-open fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                  <a href="viewStudentAnswerScript.php" class="stretched-link"></a>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span
                                                            style="color: rgb(54,185,204);">Evaluate Answer
                                                            Script</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Starlings 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>