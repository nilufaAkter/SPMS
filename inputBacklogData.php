<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html>

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
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i
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
                        <h3 class="text-dark mb-0">Backlog Data Entry</h3>
                    </div>
                    <hr><span style="font-size: 25px;">Manual Input</span>
                    <form method="POST" style="margin: 50px;" id="manualForm">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="text-primary fw-bold m-0">Student Info</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input class="form-control" type="text" name="studentID"
                                                    placeholder="Enter Student ID" id="studentID"></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input class="form-control" type="text" name="year"
                                                    placeholder="Enter Education Year" id="year"></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input class="form-control" type="text" name="semester"
                                                    placeholder="Enter Education Semester" id="semester"></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input class="form-control" type="text" name="courseID"
                                                    placeholder="Enter Enrolled Course" id="courseID"></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input class="form-control" type="text" name="section"
                                                    placeholder="Enter Enrolled Section" id="section"></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input class="form-control" type="text" name="grade"
                                                    placeholder="Enter Obtained Grade" id="grade"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 50px;">
                            <div class="col">
                                <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center"><button
                                        class="btn btn-primary" type="submit" name="submit" value="Submit"
                                        form="manualForm">SUBMIT</button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid">
                    <hr><span style="font-size: 25px;">File Input</span>
                    <form method="POST" enctype="multipart/form-data" style="margin: 50px;" id="fileForm">
                        <div class="row" style="margin-bottom: 50px;">
                            <div class="col">
                                <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center">
                                    <input
                                        class="form-control d-flex justify-content-center" type="file" accept=".csv" name="csv_file"
                                        multiple="">
                                        <button class="btn btn-primary d-flex justify-content-center"
                                        type="submit" name="submit2" value="Submit" form="fileForm">SUBMIT CSV FILE</button></div>
                            </div>
                        </div>
                    </form>
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



<?php

if (isset($_POST['submit'])) {
    $studentID = $_POST['studentID'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $courseID = $_POST['courseID'];
    $section = $_POST['section'];
    $grade = $_POST['grade'];
    $facultyID = $_SESSION['ID'];

    $query1 = "INSERT INTO `section_t` (`sectionID`, `sectionNum`, `semester`, `courseID`, `facultyID`, `year`)
    VALUES (NULL, '$section',  '$semester', '$courseID',  '$facultyID', '$year')";

     // Execute the query
    mysqli_query($con, $query1);


    
    // Get section ID
    $sql = "SELECT sectionID 
            FROM section_t as s 
            WHERE s.courseID='$courseID' AND s.year='$year' AND s.semester='$semester' AND s.facultyID='$facultyID' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $sectionID = $row['sectionID'];

    // Get list of CO IDs for the given course
    $sql2 = "SELECT coID 
             FROM co_t
             WHERE courseID='$courseID'";
    $result2 = mysqli_query($con, $sql2);
    $coIDs = array();
    while ($row = mysqli_fetch_assoc($result2)) {
        $coIDs[] = $row['coID'];
    }

    // Insert the values into backlog_data_t table for each CO ID
    foreach ($coIDs as $coID) {
        $query = "INSERT INTO `backlog_data_t` (`backlogdataID`, `studentID`, `year`, `semester`, `courseID`, `sectionNum`, `obtainedGrade`, `facultyID`, `sectionID`, `coID`)
                  VALUES (NULL, '$studentID', '$year', '$semester', '$courseID', '$section', '$grade', '$facultyID', '$sectionID', '$coID')";

        // Execute the query
        mysqli_query($con, $query);
    }
}


elseif(isset($_POST['submit2'])) {
    $file = $_FILES['csv_file']['tmp_name'];
    $handle = fopen($file, "r");
    $counter = 0; // Initialize the counter variable
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
      $counter++; // Increment the counter variable
  
      // Skip the header row
      if($counter == 1) {
        continue;
      }
  
      $studentID = $data[0];
      $year = $data[1];
      $semester = $data[2];
      $courseID = $data[3];
      $section = $data[4];
      $grade = $data[5];
      $facultyID = $_SESSION['ID'];
  
      // Get the sectionID
      $sql = "SELECT sectionID FROM section_t WHERE courseID='$courseID' AND year='$year' AND semester='$semester' AND facultyID='$facultyID'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      $sectionID = $row['sectionID'];
  
      // Get the list of coID for the course
      $coID_list = array();
      $sql2 = "SELECT coID FROM co_t WHERE courseID='$courseID'";
      $result2 = mysqli_query($con, $sql2);
      while ($row2 = mysqli_fetch_assoc($result2)) {
        $coID_list[] = $row2['coID'];
      }
      $coID = implode(",", $coID_list);
  
      // Insert the values into backlog_data_t table
      $query = "INSERT INTO `backlog_data_t` (`backlogdataID`, `studentID`, `year`, `semester`, `courseID`, `sectionNum`, `obtainedGrade`, `facultyID`, `sectionID`, `coID`)
                VALUES (NULL, '$studentID', '$year', '$semester', '$courseID', '$section', '$grade', '$facultyID', '$sectionID', '$coID')";
      mysqli_query($con, $query);
    }
    fclose($handle);
  }





?>

</html>