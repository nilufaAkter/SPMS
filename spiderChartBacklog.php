<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Starlings</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">



    <!-- JS Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3"><img class="img-fluid" src="assets/img/IUB%20logo%20white.png" width="50%" height="50%" loading="auto"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="employee_dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ploAnalysis.php"><i class="fa fa-line-chart"></i><span>PLO Analysis</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ploAchieveStats.php"><i class="fa fa-trophy"></i><span>PLO Achievement Stats</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="spiderChart.php"><i class="fa fa-pie-chart"></i><span>Spider Chart Analysis</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="dataEntry.php"><i class="fa fa-edit"></i><span>Data
                                Entry</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="viewCourseOutline.php"><i class="fa fa-book"></i><span>View Course Outline</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="enrollmentStatistics.php"><i class="fa fa-user-plus"></i><span>Enrollment Stats</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="performanceStats.php"><i class="fa fa-bar-chart"></i><span>GPA Analysis</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Spider Chart</h3>
                    </div>
                </div>
                <hr>


                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item"><a class="nav-link" href="spiderChart.php">Current</a></li>
                            <li class="nav-item"><a class="nav-link active" href="spiderChartBacklog.php">Backlog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form method="POST" style="margin: 50px;">
                            <div class="row" style="margin-bottom: 50px;">
                                <div class="col me-2">
                                    <div class="text-dark d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-end justify-content-md-end justify-content-xl-end justify-content-xxl-end fw-bold h5 mb-0">
                                        <input class="form-control d-xl-flex" type="text" name="studentID" placeholder="Enter Student ID" style="width: 146px;">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                                        <input class="form-control d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex" type="text" name="courseID" placeholder="Enter Course ID" style="width: 146px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 50px;">
                                <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">
                                    <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center">
                                        <button class="btn btn-primary" type="submit" name="submit" value="Enter">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row" style="margin-bottom: 50px;">
                            <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">
                                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center">
                                    <button onclick="coView()" class="btn btn-primary d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" type="button">View CO Analysis</button>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
                            <div class="col-lg-7 col-xl-8">
                                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center">
                                    <div class="chart-area" style="height:fit-content">
                                        
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php
            if (isset($_POST['submit'])) {
                $studentID = $_POST['studentID'];
                $courseID = $_POST['courseID'];
            } ?>


            <script>
                function coView() {
                    <?php

                    $gradeMap = array(
                        'A' => 90,
                        'A-' => 85,
                        'B+' => 80,
                        'B' => 75,
                        'B-' => 70,
                        'C+' => 65,
                        'C' => 60,
                        'C-' => 55,
                        'D+' => 50,
                        'D' => 45,
                        'F' => 0
                    );
                    // Retrieve the grade for the course
                    $sql2 = "SELECT DISTINCT obtainedGrade FROM backlog_data_t WHERE studentID='$studentID' AND courseID='$courseID'";
                    $result2 = mysqli_query($con, $sql2);
                    $row = mysqli_fetch_assoc($result2);
                    $grade = $row['obtainedGrade'];

                    $sql = "SELECT DISTINCT coNum FROM co_t WHERE courseID='$courseID'";
                    $result = mysqli_query($con, $sql);

                    $co = array();
                    $percent = array();

                    while ($data = mysqli_fetch_array($result)) {

                        array_push($co, "CO " . $data['coNum']);
                        array_push($percent, $gradeMap[$grade]);
                    }

                    ?>


                    var co = <?php echo json_encode($co); ?>;
                    var percent = <?php echo json_encode($percent); ?>;

                    for (var i = 0; i < percent.length; i++) {
                        percent[i] = parseFloat(percent[i]);
                    }

                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                        type: 'radar',
                        data: {
                            labels: co,
                            datasets: [{
                                label: 'CO Achieved',
                                data: percent,
                                fill: true,
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgb(54, 162, 235)',
                                pointBackgroundColor: 'rgb(54, 162, 235)',
                                pointBorderColor: '#fff',
                                pointHoverBackgroundColor: '#fff',
                                pointHoverBorderColor: 'rgb(54, 162, 235)'
                            }]
                        },
                        options: {
                            elements: {
                                line: {
                                    borderWidth: 3
                                }
                            }
                        }
                    });

                }
            </script>




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