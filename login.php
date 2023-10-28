<?php

$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    include 'connect.php';
    
    $userType=$_POST['userType'];
    $ID=$_POST['ID'];
    $password=$_POST['password'];

  if($userType!='student'){
    $sql="SELECT * from employee_t where employeeID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:employee_dashboard.php');
        }
     }
  }    

  elseif($userType=='student'){
    $sql="SELECT * from student_t where studentID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:employee_dashboard.php');
        }
     }
  }    

        else{
            $invalid=1;
        }
  }
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

</head>


<body class="bg-gradient-primary">
<?php
 if($invalid==1){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong></strong> Invalid credentials!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="box-shadow: 0px 0px 100px 15px rgb(0,0,0);height: 484px;padding-right: 0px;padding-left: 0px;">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex" style="padding-right: 0px;padding-left: 0px;">
                                <div class="flex-grow-1 bg-login-image" style="background: url(&quot;assets/img/background.png&quot;) center / contain no-repeat, #32abf1;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome!</h4>
                                    </div>
                                    <form class="user" action="login.php" method="post">
                                        <div class="row" style="margin-bottom: 16px;">
                                            <div class="col">
                                                <label class="col-form-label d-xl-flex justify-content-xl-start" for="dropdownUserType">
                                                    User Type:
                                                </label>
                                            </div>
                                            <div class="col">
                                                <div class="dropdown d-flex d-print-flex float-end d-sm-flex float-sm-end d-md-flex float-md-end d-lg-flex float-lg-end d-xl-flex float-xl-end d-xxl-flex float-xxl-end justify-content-xl-end" id="dropdownUserType">
                                                    <select name="userType" class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                                                        <div class="dropdown-menu">
                                                            <option disabled selected class="dropdown-item disabled">User Type</option>
                                                            <option value="student" class="dropdown-item">Student</option>
                                                            <option value="faculty" class="dropdown-item">Faculty</option>
                                                            <option value="department head" class="dropdown-item">Department Head</option>
                                                            <option value="dean" class="dropdown-item">Dean</option>
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="textHelp" placeholder="Enter Your ID..." name="ID">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit" name="submit" value="Login">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>