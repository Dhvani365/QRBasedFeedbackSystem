<?php
session_start();
$city=$_REQUEST['SDID'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'hackathon');
$_SESSION['city']="$city";
$ct= $_SESSION['city'];
$qry="insert into feedbackn1 (SUB_DIV_ID) values ('$ct')";
mysqli_query($con,$qry);
?>
<html>
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
              <!-- <form class="forms-sample" action="insert_data.php" method="POST"> -->
                <!-- <div class="form-group">
                  <label for="DISTRICT_ID" style="font-size: 120%">Select District </label>
                  <select class="form-control" name="DID" style="color: black" style="font-size: 150%">
                    
                  </select>
                </div> -->  
                <form class="forms-sample" action="form.php" method="POST">
                  <div class="form-group">
                      <label for="PS_ID" style="font-size: 100%"><b>Select Police Station</b></label>
                      <select class="form-control" name="PSID" style="color: black; font-size: 100%">
                          
                            <option> SELECT </option>
                        <?php
                        session_start();
                        $con = mysqli_connect('localhost','root','');
                        $db = mysqli_select_db($con,'hackathon');
                        $CT=$_SESSION['city'];
                        $qry = "select * from city_ps1 where CITY='$CT'";
                        $result = mysqli_query($con,$qry);
                        
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        ?>
                            <option> <?php echo $row['PS_NAME'] ?> </option>
                        <?php                      
                        }
                        ?> 
                      </select>

                    </div>
                    <input type="Submit" class="btn btn-primary mr-2" value="Next">
</head>
</html>

