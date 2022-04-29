<?php
require_once('edbs1.1.php');
$tCust = $_REQUEST['tCust'];
$jInfo = $_REQUEST['jInfo'];
$jContact = $_REQUEST['jContact'];
$tTruck = $_REQUEST['tTruck'];
$notes = $_REQUEST['notes'];
$sql = "INSERT INTO truckorders VALUE(''," .
"'" . $tCust . "'," .
"'" . $jInfo . "'," .
"'" . $jContact . "'," .
"'" . $tTruck . "'," .
"'" . $notes . "')";
$connection -> query($sql);
mysqli_close($connection);
echo($tCust . " Was succesfully added to the Trucking Orders.");
echo("<br/>Go Back to<a href='truck.php'> Main Page</a>")
?>