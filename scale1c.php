<?php
    $id = $_REQUEST['CustId'];
    require_once("edbs1.1.php");
    $sql = "DELETE FROM dayorders WHERE CustId='" . $id . "';";
    $connection -> query($sql);
    print("User " . $id . " deleted from the Order Sheet. ");
    print("<a href='scale.php'> Return </a> to main page.");
?>