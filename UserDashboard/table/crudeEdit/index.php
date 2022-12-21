<!-- ?php
//error_reporting(0);
include('dbconnection.php');

$con = mysqli_connect("localhost","root","","obcsdb");

if(isset($_POST['login'])){

    session_start();
    $mobno=$_POST['mobno'];
    $password=sha1($_POST['password']);


    //check if user is available on tbluser
    $user_query = mysqli_query($con,"select ID from tbluser where MobileNumber='$mobno' && Password='$password'");

    //checks if user is unavailable
    $admin_query = mysqli_query($con,"select ID from tbladmin where MobileNumber='$mobno' && Password='$password'");

     $user_res=mysqli_fetch_array($user_query);

     $admin_res=mysqli_fetch_array($admin_query);


     //check if user was found
    if($user_res>0){
      $_SESSION['obcsuid']=$user_res['ID'];
      $_SESSION['login']=$_POST['mobno'];
      header("location: user/dashboard.php");
    }
    //check if user wasnt found
    else if ($admin_res > 0) {
      $_SESSION['obcsaid']=$admin_res['ID'];
      $_SESSION['login']=$_POST['mobno'];
      header("location: admin/dashboard.php");
    }else{
    $msg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Sorry</strong> Invalid Details.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
  }
  ?> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="csslogin/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="csslogin/style.css">

    <style type="text/css">
      body{
        background-image: url('img/hero-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;

      }
      
    </style>

    <title>Online Birth Certificate System</title>
  </head>
  <body>

  <div>
    <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login</h3>
              <p class="mb-4"></p>
            </div>
            <form action="" method="post">
              <div class="">
                <?php 

                if(!empty($_GET['success'])){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>success</strong> Password changed successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
            </button>
        </div>';
                }

                echo @$msg; ?>

              </div>
              <div class="form-group first">
                <label for="username">Mobile Number</label>
                <input type="text" class="form-control" id="username" name="mobno" maxlength="10" pattern="[0-9]+" title="Only Number from 0-9 are allowed">

              </div>
              <div class="form-group last mb-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required="true">
                
              </div>
              
              <div class="d-flex mb-3 align-items-center">
                
                <span class="ml-auto"><a href="forget-password.php" class="forgot-pass text-primary">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Login" name="login" class="btn btn-block btn-success">              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  </div>
    <script src="jslogin/jquery-3.3.1.min.js"></script>
    <script src="jslogin/popper.min.js"></script>
    <script src="jslogin/bootstrap.min.js"></script>
    <script src="jslogin/main.js"></script>
  </body>
</html>