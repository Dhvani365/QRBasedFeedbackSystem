<html>
    <head>
        <title> Admin Panel </title>
    
    <style>
       
    </style>
    </head>
<body>
<table border="2%" class="table">
<tr>
<th class="border-top-0">DISTRICT_ID</th>
<th class="border-top-0">SUB_DIV_ID</th>
<th class="border-top-0">PS_ID</th>
<th class="border-top-0">HOW_COME_PS</th>
<th class="border-top-0">WAIT_TIME</th>
<th class="border-top-0">BEHAVIOR_PI</th>
<th class="border-top-0">FIR</th>
<th class="border-top-0">COPY_OF_FIR</th>
<th class="border-top-0">RATING</th>
<th class="border-top-0">TIME_TO_SOLVE</th>
<th class="border-top-0">PO_NAME</th>
<th class="border-top-0">PO_DESG</th>
<th class="border-top-0">SUMMARY</th>
</tr>                                    
    <?php
    $con = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($con,'hackathon');
    $qry = "Select * from Feedback";
    $result = mysqli_query($con,$qry);
             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
             {
                      echo "<tr>";
                      echo "<td>".$row['DISTRICT_ID']."</td>";
                      echo "<td>".$row['SUB_DIV_ID']."</td>";
                      echo "<td>".$row['PS_ID']."</td>";
                      echo "<td>".$row['HOW_COME_PS']."</td>";
                      echo "<td>".$row['WAIT_TIME']."</td>";
                      echo "<td>".$row['BEHAVIOR_PI']."</td>";
                      echo "<td>".$row['FIR']."</td>";
                      echo "<td>".$row['COPY_OF_FIR']."</td>";
                      echo "<td>".$row['RATING']."</td>";
                      echo "<td>".$row['TIME_TO_SOLVE']."</td>";
                      echo "<td>".$row['PO_NAME']."</td>";
                      echo "<td>".$row['PO_DESG']."</td>";
                      echo "<td>".$row['SUMMARY']."</td>";
                      echo "</tr>";
             }
    ?>
</table>
</body>
</html>