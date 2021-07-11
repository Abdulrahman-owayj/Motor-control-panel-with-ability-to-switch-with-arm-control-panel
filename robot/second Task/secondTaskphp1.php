<?php
$server = "localhost";
$username = "root";
$password = "";
$DB = "secondtask";
$Con = new mysqli($server,$username,$password,$DB);

try {
    if (isset($_POST['Forward'])) {
        $b1 = $_POST['Forward'];
    }else
    $b1=0;

    if (isset($_POST['Left'])) {
        $b2 = $_POST['Left'];
    }else
    $b2=0;
    
    if (isset($_POST['Stop'])) {
        $b3 = $_POST['Stop'];
    }else
    $b3=0;
    if (isset($_POST['Right'])) {
        $b4 = $_POST['Right'];
    }else
    $b4=0;
    if (isset($_POST['Backward'])) {
        $b5 = $_POST['Backward'];
    }else
    $b5=0;
    $query = "INSERT INTO `robot Directions`(`Forward`,`Backward`,`Right`, `Left`, `Stop` ) VALUES ($b1,$b5,$b4,$b2,$b3);";
    $Con->query($query);
    header("Location:/robot/second Task/secondTask.html");
} catch (\Throwable $th) {
    echo $th;
}

?>