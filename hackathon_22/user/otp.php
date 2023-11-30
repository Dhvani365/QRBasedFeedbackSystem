<?php
session_start();
$otp = $_POST['otp'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'hackathon');
if(isset($_SESSION['email'])){
    $mail=$_SESSION['email'];
}
//echo $mail;
$qry="select OTP from user_otp1 where email='$mail'";

$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $db_otp=$row['OTP'];
}
//echo $db_otp;
if($otp==$db_otp){
  //  $a=$_POST["otp"];
  // $qry1 = "insert ";
  // $qry2 = "select * from otp_expire where otp='$otp' AND is_expire !=1 AND now() <= DATE_ADD(create_at,INTERNAL 24 HOUR)";
  // $result = mysqli_query($con,$qry2);

  // $count = mysqli_num_rows($result);

  // if(!empty($count)){
  //   $result = mysqli_query($con,"UPDATE otp_expire SET is_expired = 1 WHERE otp = '$otp'");
  // }

    header("location:form1.php");
    echo "OTP Matched.";
}
else{
   // echo "Error!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Verification</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="feather.css">
  <link rel="stylesheet" href="themify-icons.css">
  <link rel="stylesheet" href="vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../../images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo"> -->
                <center><img src="GP_logo.png" alt="logo" height="46.5%" width="46.5%"></center><br><br>
              <!-- </div> -->
              <h4><b>Verify with OTP</b></h4>
              <h6 class="font-weight-light">Sent via Email</h6>
              <!-- <?php session_start(); ?> -->
              <form class="pt-3" action="otp.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter OTP" name="otp" required>
                <br><h6><font color="red">Incorrect OTP</font></h6>

                <br><h6>Did not receive OTP ? <font color="navy"><a href="remail.php"><b>Resed OTP</b></a></font></h6>
                </div>
                <!-- <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div> -->
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Submit">
                </div>            
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script> 
  <!-- endinject -->
</body>

</html>
<?php
}
?>