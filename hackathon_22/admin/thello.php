<?php  
 $connect = mysqli_connect("localhost", "root", "", "hackathon");  
 $query1 = "SELECT rating, count(*) as number FROM feedbackn GROUP BY rating";  

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
                          ['rating', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["rating"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                         
                     ]);  
                var options = {  
                      title: 'Rating Chart',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart1 = new google.visualization.BarChart(document.getElementById('piechart'));  
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
 