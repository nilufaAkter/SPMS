<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Dashboard - Starlings</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript"></script>


</head>

<body id="page-top">
  <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->

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
              <li class="nav-item"><a class="nav-link active" href="school_department_program_stats.php">School/ Department/Program wise<br></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="courseWisePerformance.php">Course
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
                    <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType">
                      <select name="year" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                        <div class="dropdown-menu">
                          <option disabled selected class="dropdown-item disabled">YEAR</option>
                          <option value="2020" class="dropdown-item">2020</option>
                          <option value="2021" class="dropdown-item">2021</option>
                          <option value="2022" class="dropdown-item">2022</option>
                        </div>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <button class="btn btn-primary" type="submit" name="submit" value="Submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>



            <div class="row" style="margin-bottom: 50px;">
              <div class="col">
                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-end justify-content-xxl-end">
                  <button onclick="schoolWiseGpa()" class="btn btn-primary" type="button">School wise GPA Trend</button>
                </div>
              </div>
              <div class="col">
                <div class="d-flex d-xl-flex d-xxl-flex justify-content-center justify-content-xl-center justify-content-xxl-center">
                  <button onclick="departmentWiseGpa()" class="btn btn-primary" type="button">Department wise GPA Trend</button>
                </div>
              </div>
              <div class="col">
                <div class="d-flex d-lg-flex d-xxl-flex justify-content-center justify-content-lg-center justify-content-xxl-start">
                  <button onclick="programWiseGpa()" class="btn btn-primary" type="button">Program wise GPA Trend</button>
                </div>
              </div>
            </div>



            <div class="row d-flex d-lg-flex d-xl-flex justify-content-center justify-content-lg-center justify-content-xl-center">
              <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Performance of Student in Spring</h6>
                  </div>

                  <div class="card-body">
                    <div class="chart-area">

                      <div id="Spring" style="width: 500px; height: 100%; display:inline-block;">

                      </div>

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
      if (isset($_POST['submit'])) {
        $year = $_POST['year'];
      }
      ?>

      <!-- department wise function -->
      <script>
        function departmentWiseGpa() {
          <?php
          $sql = "SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
    FROM student_t AS s,student_course_performance_t AS scp, 
    registration_t AS r, section_t AS sec
    WHERE r.registrationID=scp.registrationID 
    AND r.studentID=s.studentID AND r.sectionID=sec.sectionID 
    AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY s.departmentID";
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
              ['Department', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $department = $data['department'];
                $GPA = $data['GPA'];
              ?>['<?php echo $department; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
FROM student_t AS s,student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE r.registrationID=scp.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND sec.semester='summer' AND sec.year='$year'
GROUP BY s.departmentID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSummerChart() {
            var data = google.visualization.arrayToDataTable([
              ['Department', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $department = $data['department'];
                $GPA = $data['GPA'];
              ?>['<?php echo $department; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT s.departmentID AS department,AVG(scp.gradePoint) as GPA
FROM student_t AS s,student_course_performance_t AS scp, registration_t AS r, section_t AS sec
WHERE r.registrationID=scp.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID 
AND sec.semester='spring' AND sec.year='$year'
GROUP BY s.departmentID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSpringChart() {
            var data = google.visualization.arrayToDataTable([
              ['Department', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $department = $data['department'];
                $GPA = $data['GPA'];
              ?>['<?php echo $department; ?>', <?php echo $GPA; ?>],
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


      <!-- program wise function -->
      <script>
        function programWiseGpa() {
          <?php
          $sql = "SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
    FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
    WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY p.programID";
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
              ['Program', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $programName = $data['program'];
                $GPA = $data['GPA'];
              ?>['<?php echo $programName; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='summer' AND sec.year='$year'
GROUP BY p.programID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSummerChart() {
            var data = google.visualization.arrayToDataTable([
              ['Program', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $programName = $data['program'];
                $GPA = $data['GPA'];
              ?>['<?php echo $programName; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT p.programName AS program, AVG(scp.gradePoint) AS GPA
FROM registration_t AS r, student_t AS s, student_course_performance_t AS scp, program_t AS p, section_t AS sec
WHERE r.studentID=s.studentID AND scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND s.programID=p.programID AND sec.semester='spring' AND sec.year='$year'
GROUP BY p.programID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSpringChart() {
            var data = google.visualization.arrayToDataTable([
              ['Program', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $programName = $data['program'];
                $GPA = $data['GPA'];
              ?>['<?php echo $programName; ?>', <?php echo $GPA; ?>],
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

      <!-- school wise function -->
      <script>
        function schoolWiseGpa() {
          <?php
          $sql = "SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
    FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
    WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY sch.schoolID";
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
              ['School', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $school = $data['school'];
                $GPA = $data['GPA'];
              ?>['<?php echo $school; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='summer' AND sec.year='$year'
GROUP BY sch.schoolID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSummerChart() {
            var data = google.visualization.arrayToDataTable([
              ['School', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $school = $data['school'];
                $GPA = $data['GPA'];
              ?>['<?php echo $school; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT sch.schoolID AS school,AVG(scp.gradePoint) AS GPA
FROM student_t AS s, registration_t AS r,department_t AS d,school_t AS sch,student_course_performance_t AS scp, section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.studentID=s.studentID AND r.sectionID=sec.sectionID AND s.departmentID=d.departmentID AND d.schoolID=sch.schoolID AND sec.semester='spring' AND sec.year='$year'
GROUP BY sch.schoolID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSpringChart() {
            var data = google.visualization.arrayToDataTable([
              ['School', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $school = $data['school'];
                $GPA = $data['GPA'];
              ?>['<?php echo $school; ?>', <?php echo $GPA; ?>],
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