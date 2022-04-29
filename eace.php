<?php
    require_once("edbs1.1.php");
    $id = $_REQUEST['wretid'];
    $Work = $_REQUEST['workd'];
    $Super = $_REQUEST['super'];
    $Forman = $_REQUEST['forman'];
    $Job = $_REQUEST['job'];
    $Material = $_REQUEST['material'];
    $Trucks = $_REQUEST['trucks'];
    $Tolls = $_REQUEST['tolls'];
    $Shift = $_REQUEST['shift'];
    $Rate = $_REQUEST['rate'];
    $Stime = $_REQUEST['stime'];
    $Location = $_REQUEST['location'];
    $Notes = $_REQUEST['notes'];
    $sql = "UPDATE wretorders SET " .
    "workd = '" . $Work . "', " .
    "super = '" . $Super . "', " .
    "forman = '" . $Forman . "', " .
    "job = '" . $Job . "', " .
    "material = '" . $Material . "', " .
    "trucks = '" . $Trucks . "', " .
    "tolls = '" . $Tolls . "', " .
    "shift = '" . $Shift . "', " .
    "rate = '" . $Rate . "', " .
    "stime = '" . $Stime . "', " .
    "location = '" . $Location . "', " .
    "notes = '" . $Notes . "' WHERE wretid='" . $id . "';";
    $connection -> query($sql);
    print(" Order " . $id . " has been updated. Back to <a href='eac.php'>Main Page</a>");
?>
