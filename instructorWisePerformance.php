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
            <h3 class="text-dark mb-0">Performance Stats</h3>
          </div>
        </div>
        <hr>


        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item"><a class="nav-link" href="school_department_program_stats.php">School/
                  Department/Program wise<br></a></li>
              <li class="nav-item"><a class="nav-link" href="courseWisePerformance.php">Course
                  wise<br></a></li>
              <li class="nav-item"><a class="nav-link active" href="instructorWisePerformance.php">Instructor wise<br></a></li>
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
                    <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-2">
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
                  <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                    <button class="btn btn-primary" type="submit" name="submitInstructorName" value="Submit">Submit</button>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 50px;">
                <div class="col">
                  <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-end justify-content-xxl-end">
                    <div class="dropdown">
                      <select name="courseInstructor1" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                        <div class="dropdown-menu">
                          <option disabled selected class="dropdown-item disabled">Course Instructor</option>
                          <option value="4275" class="dropdown-item">Tahsin F.Ara Nayna</option>
                          <option value="4361" class="dropdown-item">Shovasis Kumar Biswas</option>
                          <option value="4351" class="dropdown-item">Nabila Rahman Nodi</option>
                          <option value="2518" class="dropdown-item">Mubash-Shera Karishma Mobarok</option>
                          <option value="2344" class="dropdown-item">Nadira Sultana Mirza</option>
                          <option value="2259" class="dropdown-item">Mainuddin Chowdhury</option>
                          <option value="2483" class="dropdown-item">Kazi Mubinul Hasan Shanto</option>
                          <option value="4449" class="dropdown-item">Sheikh Abujar</option>
                          <option value="3329" class="dropdown-item">Abul Khair Jyote</option>
                        </div>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">
                    <div class="dropdown">
                      <select name="courseInstructor2" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                        <div class="dropdown-menu">
                          <option disabled selected class="dropdown-item disabled">Course Instructor</option>
                          <option value="4275" class="dropdown-item">Tahsin F.Ara Nayna</option>
                          <option value="4361" class="dropdown-item">Shovasis Kumar Biswas</option>
                          <option value="4351" class="dropdown-item">Nabila Rahman Nodi</option>
                          <option value="2518" class="dropdown-item">Mubash-Shera Karishma Mobarok</option>
                          <option value="2344" class="dropdown-item">Nadira Sultana Mirza</option>
                          <option value="2259" class="dropdown-item">Mainuddin Chowdhury</option>
                          <option value="2483" class="dropdown-item">Kazi Mubinul Hasan Shanto</option>
                          <option value="4449" class="dropdown-item">Sheikh Abujar</option>
                          <option value="3329" class="dropdown-item">Abul Khair Jyote</option>
                        </div>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="d-flex justify-content-center justify-content-xl-start justify-content-xxl-start">
                    <div class="dropdown d-lg-flex justify-content-lg-center">
                      <select name="courseInstructor3" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                        <div class="dropdown-menu">
                          <option disabled selected class="dropdown-item disabled">Course Instructor</option>
                          <option value="4275" class="dropdown-item">Tahsin F.Ara Nayna</option>
                          <option value="4361" class="dropdown-item">Shovasis Kumar Biswas</option>
                          <option value="4351" class="dropdown-item">Nabila Rahman Nodi</option>
                          <option value="2518" class="dropdown-item">Mubash-Shera Karishma Mobarok</option>
                          <option value="2344" class="dropdown-item">Nadira Sultana Mirza</option>
                          <option value="2259" class="dropdown-item">Mainuddin Chowdhury</option>
                          <option value="2483" class="dropdown-item">Kazi Mubinul Hasan Shanto</option>
                          <option value="4449" class="dropdown-item">Sheikh Abujar</option>
                          <option value="3329" class="dropdown-item">Abul Khair Jyote</option>
                        </div>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <div class="row" style="margin-bottom: 50px;">
              <div class="col">
                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                  <button onclick="viewInstructorWise()" class="btn btn-primary" type="button">View</button>
                </div>
              </div>
            </div>
            <div class="row d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-lg-center justify-content-xl-center">
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
      if (isset($_POST['submitInstructorName'])) {
        $year = $_POST['year'];
        $instructor1 = $_POST['courseInstructor1'];
        $instructor2 = $_POST['courseInstructor2'];
        $instructor3 = $_POST['courseInstructor3'];
      } ?>


      <!-- chosen instructor wise function -->

      <script>
        function viewInstructorWise() {

          <?php
          $sql = "SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
    FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
    employee_t AS e
    WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
    AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='autumn'
    AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
    GROUP BY sec.facultyID";
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
              ['Course Instructor', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $courseInstructor = $data['firstName'] . " " . $data['lastName'];
                $GPA = $data['GPA'];
              ?>['<?php echo $courseInstructor; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
employee_t AS e
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='summer'
AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
GROUP BY sec.facultyID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSummerChart() {
            var data = google.visualization.arrayToDataTable([
              ['Course Instructor', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $courseInstructor = $data['firstName'] . " " . $data['lastName'];
                $GPA = $data['GPA'];
              ?>['<?php echo $courseInstructor; ?>', <?php echo $GPA; ?>],
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
          $sql = "SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
employee_t AS e
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='spring'
AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
GROUP BY sec.facultyID";
          $result = mysqli_query($con, $sql);
          ?>

          function drawSpringChart() {
            var data = google.visualization.arrayToDataTable([
              ['Course Instructor', 'GPA'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $courseInstructor = $data['firstName'] . " " . $data['lastName'];
                $GPA = $data['GPA'];
              ?>['<?php echo $courseInstructor; ?>', <?php echo $GPA; ?>],
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