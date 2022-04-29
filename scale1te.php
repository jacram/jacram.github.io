<?php
    require_once("edbs1.1.php");
    $id = $_REQUEST['truckId'];
    $tCust = $_REQUEST['tCust'];
    $jInfo = $_REQUEST['jInfo'];
    $jContact = $_REQUEST['jContact'];
    $tTruck = $_REQUEST['tTruck'];
    $notes = $_REQUEST['notes'];
    $sql = "UPDATE truckorders SET " .
    "tCust = '" . $tCust . "', " .
    "jInfo = '" . $jInfo . "', " .
    "jContact = '" . $jContact . "', " .
    "tTruck = '" . $tTruck . "', " .
    "notes = '" . $notes . "' WHERE truckId='" . $id . "';";
    $connection -> query($sql);
    print(" Order " . $id . " has been updated. Back to <a href='scale.php'>Main Page</a>");
?>