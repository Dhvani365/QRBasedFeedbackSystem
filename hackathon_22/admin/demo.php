<?php
                      $con = mysqli_connect('localhost', 'root', '');
                      $db = mysqli_select_db($con, 'hackathon');
                      $qry = "Select * from Feedbackn where RATING='BAD'";
                      $result = mysqli_query($con, $qry);
                      print_r($result);
                      static $count=0;
                      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $count = $count + 1;
                      }
                      echo "<p class='fs-30 mb-2'>$count</p>";
                      ?>