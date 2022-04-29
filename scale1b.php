<?php
require_once('edbs1.1.php');
$workd = $_REQUEST['workd'];
$Cust = $_REQUEST['Cust'];
$JobInfo = $_REQUEST['JobInfo'];
$Forman = $_REQUEST['Forman'];
$Phone = $_REQUEST['Phone'];
$Material = $_REQUEST['Material'];
$MixCode = $_REQUEST['MixCode'];
$Tonnage = $_REQUEST['Tonnage'];
$safe = $_REQUEST['safe'];
$tonsOut = $_REQUEST['tonsOut'];
$Time = $_REQUEST['Time'];
$Trucks = $_REQUEST['Trucks'];
$Plant = $_REQUEST['Plant'];
$sql = "INSERT INTO dayorders VALUE(''," .
"'" . $workd . "'," .
"'" . $Cust . "'," .
"'" . $JobInfo . "'," .
"'" . $Forman . "'," .
"'" . $Phone . "'," .
"'" . $Material . "'," .
"'" . $MixCode . "'," .
"'" . $Tonnage . "'," .
"'" . $safe . "'," .
"'" . $tonsOut . "'," .
"'" . $Time . "'," .
"'" . $Trucks . "'," .
"'" . $Plant . "')";
$connection -> query($sql);
mysqli_close($connection);
echo($Cust . " succesfully added to the Day Shift Orders.");
echo("<br/>Go Back to<a href='scale.php'> Main Page</a>")
?>