<?php
    $id = $_REQUEST['wretid'];
    require_once("edbs1.1.php");
    $sql = "DELETE FROM wretorders WHERE wretid='" . $id . "';";
    $connection -> query($sql);
    print("User " . $id . " deleted from the Order Sheet. ");
    print("<a href='eac.php'> Return </a> to main page.");
?>