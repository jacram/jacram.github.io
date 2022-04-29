<?php
    $id = $_REQUEST['custId'];
    require_once("edbs1.1.php");
    $sql = "DELETE FROM nightorders WHERE custId='" . $id . "';";
    $connection -> query($sql);
    print("User " . $id . " deleted from the Order Sheet. ");
    print("<a href='scale.php'> Return</a> to main page.");
?>