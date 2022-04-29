<?php
    require_once("edbs1.1.php");
    $id = $_REQUEST['pureId'];
    $workd = $_REQUEST['workd'];
    $pure = $_REQUEST['pure'];
    $job = $_REQUEST['job'];
    $psample = $_REQUEST['psample'];
    $facility = $_REQUEST['facility'];
    $estload = $_REQUEST['estload'];
    $truck = $_REQUEST['truck'];
    $trurou = $_REQUEST['trurou'];
    $stime = $_REQUEST['stime'];
    $acc = $_REQUEST['acc'];
    $notes = $_REQUEST['notes'];
    $sql = "UPDATE pureorders SET " .
    "workd = '" . $workd . "', " .
    "pure = '" . $pure . "', " .
    "job = '" . $job . "', " .
    "psample = '" . $psample . "', " .
    "facility = '" . $facility . "', " .
    "estload = '" . $estload . "', " .
    "truck = '" . $truck . "', " .
    "trurou = '" . $trurou . "', " .
    "stime = '" . $stime . "', " .
    "acc = '" . $acc . "', " .
    "notes = '" . $notes . "' WHERE pureId='" . $id . "';";
    $connection -> query($sql);
    print(" Order " . $id . " has been updated. Back to <a href='scale.php'>Main Page</a>");
?>