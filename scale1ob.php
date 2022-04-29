<?php
require_once('edbs1.1.php');
$aload = $_REQUEST['aload'];
$dMat = $_REQUEST['dMat'];
$dLoad = $_REQUEST['dLoad'];
$dPlant = $_REQUEST['dPlant'];
$pLoad = $_REQUEST['pLoad'];
$nMat = $_REQUEST['nMat'];
$nLoad = $_REQUEST['nLoad'];
$nPlant = $_REQUEST['nPlant'];
$sql = "INSERT INTO oilorders VALUE(''," .
"'" . $aload . "'," .
"'" . $dMat . "'," .
"'" . $dLoad . "'," .
"'" . $dPlant . "'," .
"'" . $pLoad . "'," .
"'" . $nMat . "'," .
"'" . $nLoad . "'," .
"'" . $nPlant . "')";
$connection -> query($sql);
mysqli_close($connection);
echo($aload . " succesfully added to the Day Shift Orders.");
echo("<br/>Go Back to<a href='scale.php'> Main Page</a>")
?>