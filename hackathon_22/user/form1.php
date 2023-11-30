<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Feedback Form</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="feather.css">
  <link rel="stylesheet" href="themify-icons.css">
  <link rel="stylesheet" href="vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="select2.min.css">
  <link rel="stylesheet" href="select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>
    .card {

      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid #e3e3e3;
      border-radius: 20px;
      align-content: center;
    }
    .option{
      font-size: 150%;
    }
    /* #khushi{
      font-size: 100px;
    } */
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->

    <!-- partial -->

    <div class="row justify-content-center">
      <div class="main-panel">
        <div class="content-wrapper">


          <div class="card">
            <div class="card-body">
              <center><img src="GP_logo.png" alt="logo" height="15%" width="15%"></center><br><br>
              <center><h2><font style="font-family:Cambria"><b>Feedback Form</b></h2></font></center>
                <form class="forms-sample" action="form2.php" method="POST">
                  <div class="form-group">
                    <label for="SUB_DIV_ID" style="font-size: 100%"><b>Select City</b></label>
                    <select class="form-control" name="SDID" style="color: black; font-size: 100%">
                      <option id="sel" style="font-size: 120%" NAME="CITY">Select</option>
                      <option style="font-size: 120%" NAME="CITY">AHEMDABAD</option>
                      <option style="font-size: 120%" NAME="CITY">AMRELI</option>
                      <option style="font-size: 120%" NAME="CITY">ANAND</option>
                      <option style="font-size: 120%" NAME="CITY">BHARUCH</option>
                      <option style="font-size: 120%" NAME="CITY">BHAVNAGAR</option>
                      <!-- <option style="font-size: 120%" NAME="CITY">CHHOTA UDEPUR</option> -->
                      <option style="font-size: 120%" NAME="CITY">DAHOD</option>
                      <option style="font-size: 120%" NAME="CITY">DWARKA</option>
                      <option style="font-size: 120%" NAME="CITY">GANDHINAGAR</option>
                      <option style="font-size: 120%" NAME="CITY">JAMNAGAR</option>
                      <option style="font-size: 120%" NAME="CITY">JUNAGADH</option>
                      <option style="font-size: 120%" NAME="CITY">KACHCHH</option>
                      <option style="font-size: 120%" NAME="CITY">MEHSANA</option>
                      <option style="font-size: 120%" NAME="CITY">MORBI</option>
                      <option style="font-size: 120%" NAME="CITY">NAVSARI</option>
                      <option style="font-size: 120%" NAME="CITY">PATAN</option>
                      <option style="font-size: 120%" NAME="CITY">RAJKOT</option>
                      <option style="font-size: 120%" NAME="CITY">SURAT</option>
                      <option style="font-size: 120%" NAME="CITY">SURENDRANAGAR</option>
                      <option style="font-size: 120%" NAME="CITY">TAPI</option>
                      <option style="font-size: 120%" NAME="CITY">VADODARA</option>
                      <option style="font-size: 120%" NAME="CITY">VALSAD</option>
                    </select>
                  </div>
                  <input type="Submit" class="btn btn-primary mr-2" value="Next">
</form>
</body>
</html>
