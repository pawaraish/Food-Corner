<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Conenction successful";
    }else{
        echo "No connection";
    }

mysqli_select_db($con, 'feedbackdata');

$Ourfoodquality = $_POST['Ourfoodquality'];
$ourservice = $_POST["ourservice"];
$overallexperiecewithus = $_POST["overallexperiecewithus"];
$anysuggestionforus = $_POST["anysuggestionforus"];

$query = " insert into customerdata (Ourfoodquality, ourservice, overallexperiecewithus, anysuggestionforus) 
values ('$Ourfoodquality', '$ourservice', '$overallexperiecewithus', '$anysuggestionforus') ";

echo "$query";

mysqli_query($con,$query);



?>