<?php  
 $connect = mysqli_connect("localhost", "root", "", "hackathon");  
 $query1 = "SELECT HOW_COME_PS, count(*) as number FROM tbl_employee GROUP BY HOW_COME_PS";  
 $query2 = "SELECT gender, count(*) as number FROM tbl_employee GROUP BY gender";  
 $result1 = mysqli_query($connect, $query1);  
 $result2 = mysqli_query($connect, $query2);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.load("visualization", "1", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart1);  
           google.charts.setOnLoadCallback(drawChart2);  
           function drawChart1()  
           {  
                var data1 = google.visualization.arrayToDataTable([  
                          ['HOW_COME_PS', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["HOW_COME_PS"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                         
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Employee',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart1.draw(data1, options);  
           }  
           function drawChart2()  
           {  
                var data2 = google.visualization.arrayToDataTable([  
                          ['gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                         
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Employee',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart2 = new google.visualization.PieChart(document.getElementById('BARchart'));  
                chart2.draw(data2, options);  
           }
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px; "></div>  
                <iframe src="thello.php"></iframe>
           </div>  
      </body>  
 </html>  
 