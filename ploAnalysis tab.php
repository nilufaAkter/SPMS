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
    <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->


    <div id="wrapper">
      <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
          <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-text mx-3">
              <img class="img-fluid" src="assets/img/IUB%20logo%20white.png" width="50%" height="50%" loading="auto">
            </div>
          </a>
          <hr class="sidebar-divider my-0">
          <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item">
              <a class="nav-link" href="employee_dashboard.php">
                <i class="fas fa-tachometer-alt"></i>
                <span>
                  Dashboard
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="ploAnalysis.php">
                <i class="fa fa-line-chart"></i>
                <span>
                  PLO Analysis
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ploAchieveStats.php">
                <i class="fa fa-trophy"></i>
                <span>
                  PLO Achievement Stats
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="spiderChart.php">
                <i class="fa fa-pie-chart"></i>
                <span>
                  Spider Chart Analysis
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dataEntry.php">
                <i class="fa fa-edit"></i>
                <span>
                  Data Entry
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewCourseOutline.php">
                <i class="fa fa-book"></i>
                <span>
                  View Course Outline
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="enrollmentStatistics.php">
                <i class="fa fa-user-plus"></i>
                <span>
                  Enrollment Stats
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="performanceStats.php">
                <i class="fa fa-bar-chart"></i>
                <span>
                  GPA Analysis
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="fa fa-sign-out"></i>
                <span>
                  Logout
                </span>
              </a>
            </li>
          </ul>
          <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
          </div>
        </div>
      </nav>

      <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid">
              <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                <i class="fas fa-bars"></i>
              </button>
            </div>
          </nav>
            <div class="container-fluid">
              <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">
                  PLO Analysis
                </h3>
              </div>
            </div>
            <hr>







            <div>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">
                    School/Department/Program Average
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">
                    Overall, CO wise, Course wise
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                  <form method="POST" style="margin: 50px;" id="preventRefresh1">
                    <div class="row" style="margin-bottom: 50px;">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-md-end justify-content-xl-end justify-content-xxl-end fw-bold h5 mb-0">
                          <input class="form-control d-xl-flex" type="text" name="studentID" placeholder="Enter Student ID" style="width: 146px;">
                        </div>
                      </div>
                      <div class="col">
                        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                          <button class="btn btn-primary" type="submit" name="submit" value="Submit">
                            Submit
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>

<!--

                  <script>
                      var form = document.getElementById("preventRefresh1");
                      function submitForm(event) {
                        event.preventDefault();
                      }
                      form.addEventListener('submit', submitForm);
                  </script>
-->

                  <div class="row" style="margin-bottom: 50px;">
                    <div class="col">
                      <div class="d-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-lg-end justify-content-xl-end justify-content-xxl-end">
                        <button onclick="ploAnalysisWithSchoolAverage()" class="btn btn-primary" type="button">
                          School Average
                        </button>
                      </div>
                    </div>
                    <div class="col">
                      <div class="d-flex d-xl-flex d-xxl-flex justify-content-center justify-content-xl-center justify-content-xxl-center">
                        <button onclick="ploAnalysisWithDepartmentAverage()" class="btn btn-primary" type="button">
                          Department Average
                        </button>
                      </div>
                    </div>
                    <div class="col">
                      <div class="d-flex justify-content-center justify-content-sm-center justify-content-lg-start">
                        <button onclick="ploAnalysisWithProgramAverage()" class="btn btn-primary" type="button">
                          Program Average
                        </button>
                      </div>
                    </div>
                  </div>



                  <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
                    <div class="col-lg-7 col-xl-8">
                      <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                          <h6 class="text-primary fw-bold m-0">
                            PLO Analysis
                          </h6>



                          
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                              <p id="demo"></p>
                              <canvas>
                              
                              <div id="canvas1" style="width: 65%; height: 500px; display:inline-block;margin-top:23px;"></div>

                              </canvas>


                              <!--

                              <canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;PLO1&quot;,&quot;PLO2&quot;,&quot;PLO3&quot;,&quot;PLO4&quot;,&quot;PLO5&quot;,&quot;PLO6&quot;,&quot;PLO7&quot;,&quot;PLO9&quot;,&quot;PLO11&quot;,&quot;PLO12&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Number&quot;,&quot;backgroundColor&quot;:&quot;rgb(78,115,223)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;,&quot;data&quot;:[&quot;70&quot;,&quot;72.5&quot;,&quot;76.7&quot;,&quot;70&quot;,&quot;70&quot;,&quot;70&quot;,&quot;76.7&quot;,&quot;70&quot;,&quot;90&quot;,&quot;70&quot;,&quot;0&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;display&quot;:true,&quot;text&quot;:&quot;PLO Analysis&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}">

                              </canvas>

                              -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>







<?php
if(isset($_POST['submit'])){
  $studentID=$_POST['studentID'];
}
?>




<!-- Analysis with School Average -->
<script>


function ploAnalysisWithSchoolAverage(){

    <?php

$sql="SELECT plo.ploNum AS ploNum, 
AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
FROM registration_t AS r, answer_t AS ans, question_t AS q, 
co_t AS co, plo_t AS plo
WHERE r.registrationID=ans.registrationID 
AND ans.examID=q.examID
AND ans.answerNum=q.questionNum  AND q.coNum=co.coNum 
AND q.courseID=co.courseID AND co.ploID=plo.ploID 
AND r.studentID='$studentID'
GROUP BY plo.ploNum,r.studentID";

$result=mysqli_query($con,$sql);

$sql2="SELECT plo.ploNum AS ploNum, 
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

$result2=mysqli_query($con,$sql2);

?>

google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawcanvas1Chart);

  function drawcanvas1Chart() {
    var data = google.visualization.arrayToDataTable([
      ['ploNum','Individual','School Average'],
      
      <?php
        while($data=mysqli_fetch_array($result)){
          $data2=mysqli_fetch_array($result2);
          $ploNum="PLO".$data['ploNum'];
          $percent=$data['percent'];
          $percent2=$data2['percent'];
       ?>

       ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo $percent2;?>],   
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

    var chart = new google.charts.Bar(document.getElementById("canvas1"));

    //document.getElementById("canvas1").innerHTML = "Hello World";
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }

    }
</script>




<!-- Analysis with Department Average -->
<script>
    function ploAnalysisWithDepartmentAverage(){
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

    $result=mysqli_query($con,$sql);

    $sql2="SELECT plo.ploNum AS ploNum, AVG((ans.markObtained/q.markPerQuestion)*100) 
    AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo, student_t AS s WHERE r.studentID=s.studentID 
    AND r.registrationID=ans.registrationID AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum 
    AND q.coNum=co.coNum AND q.courseID=co.courseID AND co.ploID=plo.ploID
    AND s.departmentID=(SELECT s.departmentID FROM student_t AS s 
    WHERE s.studentID='$studentID')
    GROUP BY plo.ploNum";

    $result2=mysqli_query($con,$sql2);

    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawcanvas1Chart);

      function drawcanvas1Chart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','Individual','Dept Average'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $data2=mysqli_fetch_array($result2);
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              $percent2=$data2['percent'];
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo $percent2;?>],   
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

        var chart = new google.charts.Bar(document.getElementById("canvas1"));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
}
</script> 





<!-- Analysis with Program Average -->
<script>
function ploAnalysisWithProgramAverage(){
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

    $result=mysqli_query($con,$sql);

    $sql2="SELECT plo.ploNum AS ploNum, 
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

    $result2=mysqli_query($con,$sql2);

    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawcanvas1Chart);

      function drawcanvas1Chart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','Individual','Program Average'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $data2=mysqli_fetch_array($result2);
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              $percent2=$data2['percent'];
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>,<?php echo $percent2;?>],   
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

        var chart = new google.charts.Bar(document.getElementById("canvas1"));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    }
</script>







                  <div class="tab-pane" role="tabpanel" id="tab-2">
                    <form method="POST" style="margin: 50px;" id="preventRefresh2">
                      <div class="row" style="margin-bottom: 50px;">
                        <div class="col me-2">
                          <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xl-end justify-content-xxl-end fw-bold h5 mb-0">
                            <input class="form-control d-xl-flex" type="text" name="studentID" placeholder="Enter Student ID" style="width: 146px;">
                          </div>
                        </div>
                        <div class="col">
                          <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                            <button class="btn btn-primary" type="submit">
                              Submit
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>



                  <script>
                      var form = document.getElementById("preventRefresh2");
                      function submitForm(event) {
                        event.preventDefault();
                      }
                      form.addEventListener('submit', submitForm);
                  </script>

                    


                    <div class="row" style="margin-bottom: 50px;margin-right: 0px;margin-left: 0px;">
                      <div class="col">
                        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end">
                          <button class="btn btn-primary" type="button">
                            Overall
                          </button>
                        </div>
                      </div>
                      <div class="col">
                        <div class="d-flex d-xl-flex d-xxl-flex justify-content-center justify-content-xl-center justify-content-xxl-center">
                          <button class="btn btn-primary" type="button">
                            CO wise
                          </button>
                        </div>
                      </div>
                      <div class="col">
                        <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start">
                          <button class="btn btn-primary" type="button">
                            Course wise
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center" style="margin-right: 0px;margin-left: 0px;">
                      <div class="col-lg-7 col-xl-8">
                        <div class="card shadow mb-4">
                          <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="text-primary fw-bold m-0">
                              PLO Analysis
                            </h6>





                          </div>
                          <div class="card-body">
                              <div class="chart-area">
                                <canvas>

                                  <div id="canvas2" style="width: 65%; height: 500px; display:inline-block;margin-top:23px;"></div>

                                </canvas>


                                <!--

                                <canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;PLO1&quot;,&quot;PLO2&quot;,&quot;PLO3&quot;,&quot;PLO4&quot;,&quot;PLO5&quot;,&quot;PLO6&quot;,&quot;PLO7&quot;,&quot;PLO9&quot;,&quot;PLO11&quot;,&quot;PLO12&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Number&quot;,&quot;backgroundColor&quot;:&quot;rgb(78,115,223)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;,&quot;data&quot;:[&quot;70&quot;,&quot;72.5&quot;,&quot;76.7&quot;,&quot;70&quot;,&quot;70&quot;,&quot;70&quot;,&quot;76.7&quot;,&quot;70&quot;,&quot;90&quot;,&quot;70&quot;,&quot;0&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;display&quot;:true,&quot;text&quot;:&quot;PLO Analysis&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:true,&quot;drawTicks&quot;:true,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}">

                                </canvas>
                              
                              -->


                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>









<?php
if(isset($_POST['submit'])){
  $studentID=$_POST['studentID'];
}
?>

<!-- Overall plo -->
<script>
    function overallPlo(){
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawcanvas2Chart);

      function drawcanvas2Chart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','PLO Percentage'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
             
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Overall PLO Analysis',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById("canvas2"));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
}
</script> 


<!-- Co wise plo -->
<script>
function coWisePlo(){
   
    }
</script>

<!-- course wise plo -->

<script>
function courseWisePlo(){


    }
</script>









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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
  </body>
</html>