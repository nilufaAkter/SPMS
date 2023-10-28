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

  <link rel="stylesheet" href="questionform.css">


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
            <h3 class="text-dark mb-0">Add Exam</h3>
          </div>
          <hr>


          <form action="addExamConfig.php" method="POST">
            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-primary py-2">
                  <div class="card-body d-xl-flex">
                    <div class="row d-xl-flex align-items-center no-gutters">
                      <div class="col d-xl-flex me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center fw-bold h5 mb-0">
                          <input class="form-control d-xl-flex" type="text" name="examName" placeholder="EXAM NAME" name="examName">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div></div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-success py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-4">
                            <select name="courseID" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">COURSE</option>
                                <option value="CSC101" class="dropdown-item">CSC101</option>
                                <option value="EEE131" class="dropdown-item">EEE131</option>
                                <option value="ENG101" class="dropdown-item">ENG101</option>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div></div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-3">
                            <select name="sectionNum" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">SECTION</a>
                                <option value="1" class="dropdown-item">SECTION-1</option>
                                <option value="2" class="dropdown-item">SECTION-2</option>
                                <option value="3" class="dropdown-item">SECTION-3</option>
                                <option value="4" class="dropdown-item">SECTION-4</option>
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
            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-primary py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-2">
                            <select name="questionCount" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                              <div class="dropdown-menu">
                                <option disabled selected class="dropdown-item disabled">NO. OF QUESTIONS</a>
                                <option value="1" class="dropdown-item">1</option>
                                <option value="2" class="dropdown-item">2</option>
                                <option value="3" class="dropdown-item">3</option>
                                <option value="4" class="dropdown-item">4</option>
                                <option value="5" class="dropdown-item">5</option>
                                <option value="6" class="dropdown-item">6</option>
                                <option value="7" class="dropdown-item">7</option>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div></div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-success py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-xl-center fw-bold h5 mb-0">
                          <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-center" id="dropdownUserType-1">
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
              <div class="col">
                <div></div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div class="text-dark d-flex d-xl-flex justify-content-center justify-content-xl-center fw-bold h5 mb-0">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="text-primary fw-bold m-0">Question Info</h6>
                  </div>


                  <div class="card-body">
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col"><input class="form-control" type="text" name="questionNum1" placeholder="Question Number 1"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails1" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark1" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum1"></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col"><input class="form-control" type="text" name="questionNum2" placeholder="Question Number 2"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails2" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark2" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum2"></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col"><input class="form-control" type="text" name="questionNum3" placeholder="Question Number 3"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails3" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark3" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum3"></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col"><input class="form-control" type="text" name="questionNum4" placeholder="Question Number 4"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails4" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark4" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum4"></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col"><input class="form-control" type="text" name="questionNum5" placeholder="Question Number 5"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails5" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark5" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum5"></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col"><input class="form-control" type="text" name="questionNum6" placeholder="Question Number 6"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails6" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark6" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum6"></div>
                    </div>
                    <div class="row">
                      <div class="col"><input class="form-control" type="text" name="questionNum7" placeholder="Question Number 7"></div>
                      <div class="col"><input class="form-control" type="text" name="questionDetails7" placeholder="Question Details"></div>
                      <div class="col"><input class="form-control" type="text" name="mark7" placeholder="Mark"></div>
                      <div class="col"><input class="form-control" type="text" placeholder="CO Number" name="coNum7"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-bottom: 50px;">
              <div class="col">
                <div class="d-flex d-xl-flex justify-content-center justify-content-xl-center"><button class="btn btn-primary" type="submit" name="submit" value="Submit">SUBMIT</button></div>
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

</html>