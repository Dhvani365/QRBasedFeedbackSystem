<?php  
 $connect = mysqli_connect("localhost", "root", "", "hackathon");  
 $query1 = "SELECT FIR, count(*) as number FROM feedbackn1 GROUP BY FIR";  

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
                          ['FIR', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["FIR"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                         
                     ]);  
                var options = {  
                      title: 'Percentage of how users come',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart1 = new google.visualization.GraphChart(document.getElementById('piechart'));  
                chart1.draw(data1, options);  
           }  
           </script>
      </head>  
      <body>  
           <br /><br />  
           <div style="width:700px;">  
                
                <br />  
                <div id="piechart" style="width: 500px; height: 500px; "></div>  
                
           </div>  
      </body>  
 </html>  