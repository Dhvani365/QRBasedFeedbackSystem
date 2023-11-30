<?php  
 session_start();
 $connect = mysqli_connect("localhost", "root", "", "hackathon");  
 $ct=$_SESSION['city'];
 $query1 = "SELECT BEHAVIOR_PI, count(*) as number FROM feedbackn1 where SUB_DIV_ID='$ct' GROUP BY BEHAVIOR_PI";  

 $result1 = mysqli_query($connect, $query1);  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  

           <title></title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.load("visualization", "1", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart1);  
            
           function drawChart1()  
           {  
                var data1 = google.visualization.arrayToDataTable([  
                          ['BEHAVIOR_PI', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["BEHAVIOR_PI"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                         
                     ]);  
                var options = {  
                     title: 'BEHAVIOR OF POLICE OFFICERS', 
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart1.draw(data1, options);  
           }  
           </script>
      </head>  
      <body>  
           <br /><br />  
           <div style="width: 100px;">  
                
                <br />  
                <div id="piechart" style="width: 450px; height: 400px; "></div>  
                
           </div>  
      </body>  
 </html>  
 