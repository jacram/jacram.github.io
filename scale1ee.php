<?php
    require_once("edbs1.1.php");
    $id = $_REQUEST['custId'];
    $workd = $_REQUEST['workd'];
    $cust = $_REQUEST['cust'];
    $jobInfo = $_REQUEST['jobInfo'];
    $forman = $_REQUEST['forman'];
    $phone = $_REQUEST['phone'];
    $material = $_REQUEST['material'];
    $mixCode = $_REQUEST['mixCode'];
    $tonnage = $_REQUEST['tonnage'];
    $Safe = $_REQUEST['Safe'];
    $TonsOut = $_REQUEST['TonsOut'];
    $time = $_REQUEST['time'];
    $trucks = $_REQUEST['trucks'];
    $plant = $_REQUEST['plant'];
    $sql = "UPDATE nightorders SET " .
    "workd = '" . $workd . "', " .
    "cust = '" . $cust . "', " .
    "jobInfo = '" . $jobInfo . "', " .
    "forman = '" . $forman . "', " .
    "phone = '" . $phone . "', " .
    "material = '" . $material . "', " .
    "mixCode = '" . $mixCode . "', " .
    "tonnage = '" . $tonnage . "', " .
    "Safe = '" . $Safe . "', " .
    "TonsOut = '" . $TonsOut . "', " .
    "time = '" . $time . "', " .
    "trucks = '" . $trucks . "', " .
    "plant = '" . $plant . "' WHERE custId='" . $id . "';";
    $connection -> query($sql);
    print(" Order " . $id . " has been updated. Back to <a href='scale.php'>Main Page</a>");
?>
