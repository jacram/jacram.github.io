<?php
    require_once("edbs1.1.php");
    $id = $_REQUEST['CustId'];
    $workd = $_REQUEST['workd'];
    $Cust = $_REQUEST['Cust'];
    $JobInfo = $_REQUEST['JobInfo'];
    $Forman = $_REQUEST['Forman'];
    $Phone = $_REQUEST['Phone'];
    $Material = $_REQUEST['Material'];
    $MixCode = $_REQUEST['MixCode'];
    $Tonnage = $_REQUEST['Tonnage'];
    $safe = $_REQUEST['safe'];
    $tonsOut = $_REQUEST['tonsOut'];
    $Time = $_REQUEST['Time'];
    $Trucks = $_REQUEST['Trucks'];
    $Plant = $_REQUEST['Plant'];
    $sql = "UPDATE dayorders SET " .
    "workd = '" . $workd . "', " .
    "Cust = '" . $Cust . "', " .
    "JobInfo = '" . $JobInfo . "', " .
    "Forman = '" . $Forman . "', " .
    "Phone = '" . $Phone . "', " .
    "Material = '" . $Material . "', " .
    "MixCode = '" . $MixCode . "', " .
    "Tonnage = '" . $Tonnage . "', " .
    "safe = '" . $safe . "', " .
    "tonsOut = '" . $tonsOut . "', " .
    "Time = '" . $Time . "', " .
    "Trucks = '" . $Trucks . "', " .
    "Plant = '" . $Plant . "' WHERE CustId='" . $id . "';";
    $connection -> query($sql);
    print(" Order " . $id . " has been updated. Back to <a href='eac.php'>Main Page</a>");
?>
