<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
            <h3 class="text-dark mb-0">PLO Analysis</h3>
          </div>
        </div>
        <hr>

        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item"><a class="nav-link active" href="ploAnalysisDepartmentProgramSchoolAverage.php" target="_self">School/Department/Program
                  Average<br></a></li>
              <li class="nav-item"><a class="nav-link" href="ploAnalysisOverall.php" target="_self">Overall, CO wise,
                  Course wise<br></a></li>
            </ul>
          </div>
          <div class="card-body">
            <form method="POST" style="margin: 50px;">
              <div class="row" style="margin-bottom: 50px;">
                <div class="col me-2">
                  <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-md-end justify-content-xl-end justify-content-xxl-end fw-bold h5 mb-0">
                    <input class="form-control d-xl-flex" type="text" name="studentID" placeholder="Enter Student ID" style="width: 146px;">
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
                <div class="d-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-lg-end justify-content-xl-end justify-content-xxl-end">
                  <button onclick="ploAnalysisWithSchoolAverage()" class="btn btn-primary" type="button">School Average</button>
                </div>
              </div>
              <div class="col">
                <div class="d-flex d-xl-flex d-xxl-flex justify-content-center justify-content-xl-center justify-content-xxl-center">
                  <button onclick="ploAnalysisWithDepartmentAverage()" class="btn btn-primary" type="button">Department Average</button>
                </div>
              </div>
              <div class="col">
                <div class="d-flex justify-content-center justify-content-sm-center justify-content-lg-start">
                  <button onclick="ploAnalysisWithProgramAverage()" class="btn btn-primary" type="button">Program Average</button>
                </div>
              </div>
            </div>


            <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
              <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">PLO Analysis With Average</h6>
                  </div>

                  <div class="card-body">
                    <div class="chart-area">
                      <div style="display:flex;justify-content:center;" class="row3" style="margin-top:20px;">
                        <div id="Autumn" style="width: 85%; height: 250px; display:inline-block;margin-top:23px;">
                        </div>
                      </div>
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
        $studentID = $_POST['studentID'];
      }
      ?>

      <!-- Analysis with Department Average -->
      <script>
        function ploAnalysisWithDepartmentAverage() {
          <?php

          $sql = "SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

          $result = mysqli_query($con, $sql);

          $sql2 = "SELECT plo.ploNum AS ploNum, AVG((ans.markObtained/q.markPerQuestion)*100) 
    AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo, student_t AS s WHERE r.studentID=s.studentID 
    AND r.registrationID=ans.registrationID AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum 
    AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID
    AND s.departmentID=(SELECT s.departmentID FROM student_t AS s 
    WHERE s.studentID='$studentID')
    GROUP BY plo.ploNum";

          $result2 = mysqli_query($con, $sql2);

          ?>

          google.charts.load('current', {
            'packages': ['bar']
          });
          google.charts.setOnLoadCallback(drawAutumnChart);

          function drawAutumnChart() {
            var data = google.visualization.arrayToDataTable([
              ['ploNum', 'Individual', 'Dept Average'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $data2 = mysqli_fetch_array($result2);
                $ploNum = "PLO" . $data['ploNum'];
                $percent = $data['percent'];
                $percent2 = $data2['percent'];
              ?>

                ['<?php echo $ploNum; ?>', <?php echo $percent; ?>, <?php echo $percent2; ?>],
              <?php
              }
              ?>
            ]);

            var options = {
              chart: {
                title: 'PLO Analysis with Department Average',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('Autumn'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      </script>


      <!-- Analysis with Program Average -->
      <script>
        function ploAnalysisWithProgramAverage() {
          <?php

          $sql = "SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

          $result = mysqli_query($con, $sql);

          $sql2 = "SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo, student_t AS s, program_t AS p
    WHERE r.studentID=s.studentID 
    AND r.registrationID=ans.registrationID AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum  
    AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND s.programID=p.programID
    AND s.programID=(SELECT s.programID FROM student_t AS s WHERE s.studentID='$studentID')
    GROUP BY plo.ploNum";

          $result2 = mysqli_query($con, $sql2);

          ?>

          google.charts.load('current', {
            'packages': ['bar']
          });
          google.charts.setOnLoadCallback(drawAutumnChart);

          function drawAutumnChart() {
            var data = google.visualization.arrayToDataTable([
              ['ploNum', 'Individual', 'Program Average'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $data2 = mysqli_fetch_array($result2);
                $ploNum = "PLO" . $data['ploNum'];
                $percent = $data['percent'];
                $percent2 = $data2['percent'];
              ?>

                ['<?php echo $ploNum; ?>', <?php echo $percent; ?>, <?php echo $percent2; ?>],
              <?php
              }
              ?>
            ]);

            var options = {
              chart: {
                title: 'PLO Analysis with Program Average',
              },
              bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('Autumn'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      </script>

      <!-- Analysis with School Average -->
      <script>
        function ploAnalysisWithSchoolAverage() {

          <?php

          $sql = "SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM registration_t AS r, answer_t AS ans, question_t AS q, 
co_t AS co, plo_t AS plo
WHERE r.registrationID=ans.registrationID 
AND ans.examID=q.examID
AND ans.answerNum=q.questionNum  AND q.coNum=co.coNum 
AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND r.studentID='$studentID'
GROUP BY plo.ploNum,r.studentID";

          $result = mysqli_query($con, $sql);

          $sql2 = "SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM registration_t AS r, answer_t AS ans, question_t AS q, 
co_t AS co, plo_t AS plo, student_t AS s, program_t AS p, department_t AS d
WHERE r.studentID=s.studentID 
AND r.registrationID=ans.registrationID AND ans.examID=q.examID
AND ans.answerNum=q.questionNum  
AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND s.departmentID=d.departmentID
AND d.schoolID=(SELECT d.schoolID FROM student_t AS s, 
department_t AS d WHERE s.studentID='$studentID' 
AND s.departmentID=d.departmentID)
GROUP BY plo.ploNum";

          $result2 = mysqli_query($con, $sql2);

          ?>

          google.charts.load('current', {
            'packages': ['bar']
          });
          google.charts.setOnLoadCallback(drawAutumnChart);

          function drawAutumnChart() {
            var data = google.visualization.arrayToDataTable([
              ['ploNum', 'Individual', 'School Average'],

              <?php
              while ($data = mysqli_fetch_array($result)) {
                $data2 = mysqli_fetch_array($result2);
                $ploNum = "PLO" . $data['ploNum'];
                $percent = $data['percent'];
                $percent2 = $data2['percent'];
              ?>

                ['<?php echo $ploNum; ?>', <?php echo $percent; ?>, <?php echo $percent2; ?>],
              <?php
              }
              ?>
            ]);

            var options = {
              chart: {
                title: 'PLO Analysis with School Average',
              },
              bars: 'vertical',
            };

            var chart = new google.charts.Bar(document.getElementById('Autumn'));
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