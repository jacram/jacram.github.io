<?php
    require_once("edbs1.1.php");
    $id = $_REQUEST['oilId'];
    $aload = $_REQUEST['aload'];
    $dMat = $_REQUEST['dMat'];
    $dLoad = $_REQUEST['dLoad'];
    $dPlant = $_REQUEST['dPlant'];
    $pLoad = $_REQUEST['pLoad'];
    $nMat = $_REQUEST['nMat'];
    $nLoad = $_REQUEST['nLoad'];
    $nPlant = $_REQUEST['nPlant'];
    $sql = "UPDATE oilorders SET " .
    "aload = '" . $aload . "', " .
    "dMat = '" . $dMat . "', " .
    "dLoad = '" . $dLoad . "', " .
    "dPlant = '" . $dPlant . "', " .
    "pLoad = '" . $pLoad . "', " .
    "nMat = '" . $nMat . "', " .
    "nLoad = '" . $nLoad . "', " .
    "nPlant = '" . $nPlant . "' WHERE oilId='" . $id . "';";
    $connection -> query($sql);
    print(" Order " . $id . " has been updated. Back to <a href='lab.php'>Main Page</a>");
?>