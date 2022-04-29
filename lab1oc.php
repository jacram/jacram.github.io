<?php
    $id = $_REQUEST['oilId'];
    require_once("edbs1.1.php");
    $sql = "DELETE FROM oilorders WHERE oilId='" . $id . "';";
    $connection -> query($sql);
    print("Order " . $id . " was deleted from the Order Sheet. ");
    print("<a href='lab.php'> Return</a> to main page.");
?>