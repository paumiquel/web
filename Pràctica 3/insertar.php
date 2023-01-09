<?php 
include "databaseCV.php";

$hab1=$_POST["hab1"];
$hab2=$_POST["hab2"];
$hab3=$_POST["hab3"];
$hab4=$_POST["hab4"];
$hab5=$_POST["hab5"];
$per1=$_POST["per1"];
$per2=$_POST["per2"];
$per3=$_POST["per3"];
$per4=$_POST["per4"];
$per5=$_POST["per5"];

$idi1=$_POST["idi1"];
$idi2=$_POST["idi2"];
$idi3=$_POST["idi3"];
$idi4=$_POST["idi4"];

$per11=$_POST["per11"];
$per12=$_POST["per12"];
$per13=$_POST["per13"];
$per14=$_POST["per14"];


$inf1=$_POST["inf1"];
$inf2=$_POST["inf2"];
$inf3=$_POST["inf3"];
$inf4=$_POST["inf4"];
$inf5=$_POST["inf5"];
$per21=$_POST["per21"];
$per22=$_POST["per22"];
$per23=$_POST["per23"];
$per24=$_POST["per24"];
$per25=$_POST["per25"];



$sql="INSERT INTO DB_CV_1 (hab1, per1,  hab2, per2,  hab3, per3,  hab4, per4,  hab5, per5,idi1,idi2,idi3,idi4,per11,per12,per13,per14,inf1,inf2,inf3,inf4,inf5,per21,per22,per23,per24,per25) VALUE('$hab1','$per1' ,'$hab2','$per2' ,'$hab3','$per3' ,'$hab4','$per4' ,'$hab5','$per5','$idi1','$idi2','$idi3','$idi4','$per11','$per12','$per13','$per14','$inf1','$inf2','$inf3','$inf4','$inf5','$per21','$per22','$per23','$per24','$per25')";
echo mysqli_query($conn1, $sql);











?>