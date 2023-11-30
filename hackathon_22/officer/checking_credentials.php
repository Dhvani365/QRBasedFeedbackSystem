<?php
session_start();
$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con,'hackathon');
$uname = $_REQUEST['uname'];
$passwd = $_REQUEST['passwd'];
$city = $_REQUEST['city'];
$_SESSION['city']="$city";
$qry="Select * from officers1";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $flag=0;
    $uid = $row['User_Name'];
    $pass = $row['Password'];
    if($uname==$uid && $passwd==$pass){
        $flag=1;
        break;
    }
}
if($flag==1){
    header("location: dashboard.php");
}else{
    echo "<h3>Invalid Login Credentials.</h3>";
}
?>