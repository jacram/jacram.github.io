<?php
require_once('edbs1.1.php');
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
$sql = "INSERT INTO pureorders VALUE(''," .
"'" . $workd . "'," .
"'" . $pure . "'," .
"'" . $job . "'," .
"'" . $psample . "'," .
"'" . $facility . "'," .
"'" . $estload . "'," .
"'" . $truck . "'," .
"'" . $trurou . "'," .
"'" . $stime . "'," .
"'" . $acc . "'," .
"'" . $notes . "')";
$connection -> query($sql);
mysqli_close($connection);
echo($pure . " Was succesfully added to the Puresoil Orders.");
echo("<br/>Go Back to<a href='scale.php'> Main Page</a>")
?>