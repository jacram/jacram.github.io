<?php
require_once('edbs1.1.php');
$workd = $_REQUEST['workd'];
$cust = $_REQUEST['cust'];
$jobInfo = $_REQUEST['jobInfo'];
$forman = $_REQUEST['forman'];
$phone = $_REQUEST['phone'];
$material = $_REQUEST['material'];
$mixCode = $_REQUEST['mixCode'];
$tonnage = $_REQUEST['tonnage'];
$Safe = $_REQUEST['Safe'];
$TonsOut = $_REQUEST['TonsOut'];
$time = $_REQUEST['time'];
$trucks = $_REQUEST['trucks'];
$plant = $_REQUEST['plant'];
$sql = "INSERT INTO nightorders VALUE(''," .
"'" . $workd . "'," .
"'" . $cust . "'," .
"'" . $jobInfo . "'," .
"'" . $forman . "'," .
"'" . $phone . "'," .
"'" . $material . "'," .
"'" . $mixCode . "'," .
"'" . $tonnage . "'," .
"'" . $Safe . "'," .
"'" . $TonsOut . "'," .
"'" . $time . "'," .
"'" . $trucks . "'," .
"'" . $plant . "')";
$connection -> query($sql);
mysqli_close($connection);
echo($cust . " succesfully added to the Night Shift Orders.");
echo("<br/>Go Back to<a href='scale.php'> Main Page</a>")
?>