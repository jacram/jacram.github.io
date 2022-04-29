<?php
    $id = $_REQUEST['truckId'];
    require_once("edbs1.1.php");
    $sql = "DELETE FROM truckorders WHERE truckId='" . $id . "';";
    $connection -> query($sql);
    print("Order " . $id . " was deleted from the Order Sheet. ");
    print("<a href='truck.php'> Return</a> to main page.");
?>