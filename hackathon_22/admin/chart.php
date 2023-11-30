<?php
$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con,'hackathon');
$qry = "select * from Feedback";
$result=mysqli_query($con,$qry);

?>
