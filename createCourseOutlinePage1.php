<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>SPMS - Starlings</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">


  <link rel="stylesheet" href="courseOutline.css">



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
          <li class="nav-item"><a class="nav-link" href="spiderChart.php"><i class="fa fa-pie-chart"></i><span>Spider Chart Analysis</span></a></li>
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
            <h3 class="text-dark mb-0">Create Course Outline</h3>
          </div>
          <hr>


          <form method="post">
            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-success py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-1">
                            <select name="courseID" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">COURSE</option>
                                <option value="CSC101" class="dropdown-item">CSC101</option>
                                <option value="CSC303" class="dropdown-item">CSC303</option>
                                <option value="MIS430" class="dropdown-item">MIS430</option>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-2">
                            <select name="sectionNum" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">SECTION</option>
                                <option value="1" class="dropdown-item">SECTION-1</option>
                                <option value="2" class="dropdown-item">SECTION-2</option>
                                <option value="3" class="dropdown-item">SECTION-3</option>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-primary py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-4">
                            <select name="semester" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">SEMESTER</option>
                                <option value="spring" class="dropdown-item">SPRING</option>
                                <option value="summer" class="dropdown-item">SUMMER</option>
                                <option value="autumn" class="dropdown-item">AUTUMN</option>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-3">
                            <select name="year" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">YEAR</a>
                                <option value="2020" class="dropdown-item">2020</a>
                                <option value="2021" class="dropdown-item">2021</a>
                                <option value="2022" class="dropdown-item">2022</a>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
              <div class="col">
                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                  <button class="btn btn-primary" type="submit" name="submit" value="Submit">SUBMIT</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>





      <?php

      if (isset($_POST['submit'])) {

        session_start();
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $sectionNum = $_POST['sectionNum'];
        $courseID = $_POST['courseID'];

        //Getting section ID from database
        $result = mysqli_query($con, "SELECT sec.sectionID AS sectionID
  FROM section_t AS sec
  WHERE sec.sectionNum='$sectionNum' AND sec.courseID='$courseID' 
  AND sec.semester='$semester' AND sec.year='$year'");
        $row = mysqli_fetch_assoc($result);
        $_SESSION['sectionID'] = $row['sectionID'];

        header('location:createCourseOutline.php');
      } ?>


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