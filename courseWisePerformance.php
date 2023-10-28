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

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript"></script>

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
          <li class="nav-item"><a class="nav-link active" href="performanceStats.php"><i class="fa fa-bar-chart"></i><span>GPA Analysis</span></a></li>
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
            <h3 class="text-dark mb-0">Performance Stats</h3>
          </div>
        </div>
        <hr>


        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item"><a class="nav-link" href="school_department_program_stats.php">School/
                  Department/Program wise<br></a></li>
              <li class="nav-item"><a class="nav-link active" href="courseWisePerformance.php">Course
                  wise<br></a></li>
              <li class="nav-item"><a class="nav-link" href="instructorWisePerformance.php">Instructor
                  wise<br></a></li>
              <li class="nav-item"><a class="nav-link" href="instructorWiseChosenCourse.php">Instructor
                  wise (Chosen Course)<br></a></li>
              <li class="nav-item"><a class="nav-link" href="#">VC/Head/Dean wise<br></a></li>
            </ul>
          </div>



          <div class="card-body">
            <form method="POST" style="margin: 50px;">
              <div class="row" style="margin-bottom: 50px;">
                <div class="col me-2">
                  <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-md-end justify-content-xl-end justify-content-xxl-end fw-bold h5 mb-0">
                    <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-1">
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
                <div class="col d-flex justify-content-center justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                  <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <button class="btn btn-primary" type="submit" name="submitCourseCode" value="Submit">Submit</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-start-primary py-2">
                    <div class="card-body d-xl-flex">
                      <div class="row d-xl-flex align-items-center no-gutters">
                        <div class="col d-xl-flex me-2">
                          <div class="text-dark d-xl-flex fw-bold h5 mb-0"><input class="form-control d-xl-flex" type="text" name="course1" placeholder="Enter Course ID"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div></div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-start-primary py-2">
                    <div class="card-body d-xl-flex">
                      <div class="row d-xl-flex align-items-center no-gutters">
                        <div class="col d-xl-flex me-2">
                          <div class="text-dark d-xl-flex fw-bold h5 mb-0"><input class="form-control d-xl-flex" type="text" name="course2" placeholder="Enter Course ID"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div></div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-start-primary py-2">
                    <div class="card-body d-xl-flex">
                      <div class="row d-xl-flex align-items-center no-gutters">
                        <div class="col d-xl-flex me-2">
                          <div class="text-dark d-xl-flex fw-bold h5 mb-0"><input class="form-control d-xl-flex" type="text" name="course3" placeholder="Enter Course ID"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <div class="row" style="margin-bottom: 50px;">
              <div class="col">
                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                  <button onclick="viewCourseWise()" class="btn btn-primary" type="button">View</button>
                </div>
              </div>
            </div>


            <div class="row d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
              <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Performance of Student in Spring</h6>
                  </div>

                  <div class="card-body">
                    <div class="chart-area">

                      <div id="Spring" style="width: 500px; height: 100%; display:inline-block;"></div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Performance of Student in Summer</h6>
                  </div>

                  <div class="card-body">
                    <div class="chart-area">

                      <div id="Summer" style="width: 500px; height: 100%; display:inline-block;"></div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Performance of Student in Autumn</h6>
                  </div>

                  <div class="card-body">
                    <div class="chart-area">

                      <div id="Autumn" style="width: 500px; height: 100%; display:inline-block;"></div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>






      <?php
      if (isset($_POST['submitCourseCode'])) {
        $year = $_POST['year'];
        $course1 = $_POST['course1'];
        $course2 = $_POST['course2'];
        $course3 = $_POST['course3'];
      } ?>


      <!-- course wise function -->

      <script>
        function viewCourseWise() {

          <?php
          $sql = "SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
    FROM student_course_performance_t AS scp,registration_t AS r,section_t AS sec
    WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND 
    sec.courseID IN ('$course1','$course2','$course3') AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY sec.courseID";
          $result = mysqli_query($con, $sql);
          ?>

          google.charts.load('current', {
            'packages': ['bar']
          });
          google.charts.setOnLoadCallback(drawAutumnChart);
          google.charts.setOnLoadCallback(drawSummerChart);
          google.charts.setOnLoadCallback(drawSpringChart);

          function drawAutumnChart() {
            var data = google.visualization.arrayToDataTable([
              ['course', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $course = $data['course'];
                $GPA = $data['GPA'];
              ?>['<?php echo $course; ?>', <?php echo $GPA; ?>],
              <?php
              }
              ?>
            ]);

            var options = {
              chart: {
                title: 'Autumn',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('Autumn'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }


          <?php
          $sql = "SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
FROM student_course_performance_t AS scp,registration_t AS r,section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND sec.courseID IN ('$course1','$course2','$course3') AND sec.semester='summer' AND sec.year='$year'
GROUP BY sec.courseID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSummerChart() {
            var data = google.visualization.arrayToDataTable([
              ['course', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $course = $data['course'];
                $GPA = $data['GPA'];
              ?>['<?php echo $course; ?>', <?php echo $GPA; ?>],
              <?php
              }
              ?>
            ]);

            var options = {
              chart: {
                title: 'Summer',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('Summer'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
          <?php
          $sql = "SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
FROM student_course_performance_t AS scp,registration_t AS r,section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND sec.courseID IN ('$course1','$course2','$course3') AND sec.semester='spring' AND sec.year='$year'
GROUP BY sec.courseID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSpringChart() {
            var data = google.visualization.arrayToDataTable([
              ['course', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $course = $data['course'];
                $GPA = $data['GPA'];
              ?>['<?php echo $course; ?>', <?php echo $GPA; ?>],
              <?php
              }
              ?>
            ]);

            var options = {
              chart: {
                title: 'Spring',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('Spring'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>