<?php
require_once('edbs1.1.php');
$Work = $_REQUEST['workd'];
$Super = $_REQUEST['super'];
$Forman = $_REQUEST['forman'];
$Job = $_REQUEST['job'];
$Material = $_REQUEST['material'];
$Trucks = $_REQUEST['trucks'];
$Tolls = $_REQUEST['tolls'];
$Shift = $_REQUEST['shift'];
$Rate = $_REQUEST['rate'];
$Stime = $_REQUEST['stime'];
$Location = $_REQUEST['location'];
$Notes = $_REQUEST['notes'];
$sql = "INSERT INTO wretorders VALUE(''," .
"'" . $Work . "'," .
"'" . $Super . "'," .
"'" . $Forman . "'," .
"'" . $Job . "'," .
"'" . $Material . "'," .
"'" . $Trucks . "'," .
"'" . $Tolls . "'," .
"'" . $Shift . "'," .
"'" . $Rate . "'," .
"'" . $Stime . "'," .
"'" . $Location . "'," .
"'" . $Notes . "')";
$connection -> query($sql);
mysqli_close($connection);
echo($Super . " succesfully added to the WRET Orders.");
echo("<br/>Go Back to<a href='eac.php'> Main Page</a>")
?>