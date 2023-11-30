[04:05, 08/10/2022] Dhvani:
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel</title> -->
  <!-- plugins:css -->
  <!-- <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css"> -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css"> -->
  <!-- End plugin css for this page…
[04:07, 08/10/2022] Dhvani: <!DOCTYPE html>
<html lang="en">-->

<!-- <head> -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="logo.png" class="mr-2" alt="logo" height="200%" width="200%" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="logo.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="admin.png" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

              <a class="dropdown-item" href="index.html">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <!-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button> -->
      </div>
    </nav>
    partial
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial
      partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>

                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <!-- <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Select City
                    </button> -->
                      <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="http://localhost/hackathon_22/admin/dashboard.php">All</a>
                      <a class="dropdown-item" href="dashboard.php">Surat</a>
                      <a class="dropdown-item" href="navsari.php">Navsari</a>
                      <a class="dropdown-item" href="bardoli.php">Bardoli</a>
                    </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <!-- <img src="images/dashboard/people.svg" alt="people"> -->
                  <!-- <div class="ml-2"> -->
                  <h4 class="location font-weight-normal" style="color:black;">&nbsp;&nbsp;Gujarat, India</h4>
                  <!-- <h6 class="font-weight-normal">India</h6> -->
                  <!-- </div> -->
                  <img src="police.jpg" height="100%" width="60%" style="padding-top:0;">
                  <div class="weather-info">
                    <div class="d-flex">
                      <!-- <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
 -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-12 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4"><B>Total feedbacks</B></p>
                      <p class="mb-4">Total number of feedbacks</p>
                      <?php
                      $con = mysqli_connect('localhost', 'root', '');
                      $db = mysqli_select_db($con, 'hackathon');
                      $qry = "Select * from Feedbackn1";
                      $result = mysqli_query($con, $qry);
                      $count = 0;
                      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $count = $count + 1;
                      }
                      echo "<p class='fs-30 mb-2'>$count</p>";
                      ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4"><B>Excellent Feedbacks</B></p>
                      <p class="mb-4">Total Number of Excellent Feedbacks</p>
                      <?php
                      $con = mysqli_connect('localhost', 'root', '');
                      $db = mysqli_select_db($con, 'hackathon');
                      $qry = "Select * from Feedbackn1 where RATING='Excellent'";
                      $result = mysqli_query($con, $qry);
                      static $sum = 0;
                      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $sum = $sum + 1;
                      }
                      echo "<p class='fs-30 mb-2'>$sum</p>";
                      ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4"><B>Poor Feedbacks</B></p>
                      <p class="mb-4">Total Number of Poor Feedbacks</p>
                      <?php
                      $con = mysqli_connect('localhost', 'root', '');
                      $db = mysqli_select_db($con, 'hackathon');
                      $qry = "Select * from Feedbackn1 where RATING='Very Bad'";
                      $result = mysqli_query($con, $qry);
                      static $count = 0;
                      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $count = $count + 1;
                      }
                      echo "<p class='fs-30 mb-2'>$count</p>";
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Overall Ratings</p>
                  <p class="font-weight-500">Ratings chart</p>
                  
                  <iframe src="ratingchart.php" width="500" height="500"></iframe> 
                </div>
              </div>
            </div>
          
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Wait time</p>
                 
                 </div>
                  <p class="font-weight-500">Average time the user has to wait</p>
                  <iframe src="wait_time_chart.php" width="500" height="500"></iframe> 
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Way of arrival</p>
                  <p class="font-weight-500">The refrence through which user arrived</p>
                  <br>
                  <iframe src="how_come_ps_chart.php" width="500" height="500"></iframe> 
                </div>
              </div>
            </div>
          
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">behaviour chart</p>
                      <br>
                 </div>
                  <p class="font-weight-500">The behaviour of police officer</p>
                  <iframe src="behaviour_chart.php" width="500" height="500"></iframe> 
                </div>
              </div>
            </div>
          
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">FIR chart</p>
                  <p class="font-weight-500">Was a FIR registered</p>
                  <br>
                  <iframe src="FIR_CHART.php" width="500" height="500"></iframe>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Time to solve</p>
                  <p class="font-weight-500">time needed to solve case</p>
                  <br>
                  <iframe src="TIME_TO_SOLVE_CHART.php" width="500" height="500"></iframe>
                </div>
              </div>
            </div>
          

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Feedback Summery Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%; padding-right:0px;" border="2%">
                          <tr>
                            <th>SUB_DIV</th>
                            <th>POLICE STATION</th>
                            <th>HOW_COME_PS</th>
                            <th>WAIT_TIME</th>
                            <th>BEHAVIOR_PI</th>
                            <th>FIR</th>
                            <th>COPY_OF_FIR</th>
                            <th>RATING</th>
                            <th>TIME_TO_SOLVE</th>
                            <th>PO_NAME</th>
                            <th>PO_DESG</th>
                            <th>SUMMARY</th>
                          </tr>
                          <?php
                          $con = mysqli_connect('localhost', 'root', '');
                          $db = mysqli_select_db($con, 'hackathon');
                          $qry = "Select * from Feedbackn1";
                          $result = mysqli_query($con, $qry);
                          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo "<tr>";
                            // echo "<td>".$row['DISTRICT_ID']."</td>";
                            echo "<td>" . $row['SUB_DIV_ID'] . "</td>";
                            echo "<td>" . $row['PS_ID'] . "</td>";
                            echo "<td>" . $row['HOW_COME_PS'] . "</td>";
                            echo "<td>" . $row['WAIT_TIME'] . "</td>";
                            echo "<td>" . $row['BEHAVIOR_PI'] . "</td>";
                            echo "<td>" . $row['FIR'] . "</td>";
                            echo "<td>" . $row['COPY_OF_FIR'] . "</td>";
                            echo "<td>" . $row['RATING'] . "</td>";
                            echo "<td>" . $row['TIME_TO_SOLVE'] . "</td>";
                            echo "<td>" . $row['PO_NAME'] . "</td>";
                            echo "<td>" . $row['PO_DESG'] . "</td>";
                            echo "<td>" . $row['SUMMARY'] . "</td>";
                            echo "</tr>";
                          }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Police Officers Details Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%" border="2%">
                          <tr>
                            <th>PID</th>
                            <th>User_Name</th>
                            <th>Password</th>
                            <th>DISTRICT_ID</th>
                          </tr>
                          <?php
                          $con = mysqli_connect('localhost', 'root', '');
                          $db = mysqli_select_db($con, 'hackathon');
                          $qry = "Select * from Officers1";
                          $result = mysqli_query($con, $qry);
                          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['PID'] . "</td>";
                            echo "<td>" . $row['User_Name'] . "</td>";
                            echo "<td>" . $row['Password'] . "</td>";
                            echo "<td>" . $row['DISTRICT_ID'] . "</td>";
                            echo "</tr>";
                          }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                          

        </div>
      
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>