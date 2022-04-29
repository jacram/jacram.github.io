<?php
    $id = $_REQUEST['pureId'];
    require_once("edbs1.1.php");
    $sql = "DELETE FROM pureorders WHERE pureId='" . $id . "';";
    $connection -> query($sql);
    print("Order " . $id . " was deleted from the Order Sheet. ");
    print("<a href='pure.php'> Return</a> to main page.");
?>