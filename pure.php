<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="James Matthews">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Earle.css"/>
    <a href="https://www.earleco.com"> Walter Earle /</a><a href="https://portal.earleco.com"> Employee Portal /</a><a href="login.php"> Log Out</a>
    <title>Puresoil Daily Orders</title>
    <H1>Earle Daily Orders</H1>
        <p><em>Manufacturers Of Bituminous Concrete</br>
          P.O. Box 757 Farmingdale NJ 07727</em></p>
    <style>
        body{
           background-image: url(american-flag.jpg);
           background-blend-mode: soft-light;
        }
    </style>
</head>
<body>

</body>
</html>
<?php
require_once('edbs1.1.php');/*
$sql = "SELECT CustId, Cust, JobInfo, Forman, Phone, Material, MixCode, Tonnage, safe, tonsOut, Time, Trucks, Plant FROM dayorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRE Jackson Day Shift Orders</legend>");
    echo("<table>");
    echo("<tr><th>Customer</th><th>Job Information</th><th>Forman</th><th>Phone</th><th>Material</th><th>Mix Code</th><th>Tonnage</th><th>Safe #</th><th>Tons Out</th><th>Load Time</th><th>Trucks</th><th>Plant</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Cust'] . "</td>" .
    "<td>" . $row['JobInfo'] . "</td>" . 
    "<td>" . $row['Forman'] . "</td>" .
    "<td>" . $row['Phone'] . "</td>" .
    "<td>" . $row['Material'] . "</td>" .
    "<td>" . $row['MixCode'] . "</td>" .
    "<td>" . $row['Tonnage'] . "</td>" .
    "<td>" . $row['safe'] . "</td>" .
    "<td>" . $row['tonsOut'] . "</td>" .
    "<td>" . $row['Time'] . "</td>" .
    "<td>" . $row['Trucks'] . "</td>" .
    "<td>" . $row['Plant'] . "</td>" ;
    //"<td><a href='edb1.1c.php?CustId=" . $row['CustId'] . "'>Delete</a></td>" . 
    //"<td><a href='edb1.1d.php?CustId=" . $row['CustId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
//print("<a href='edb1.1a.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");
$sql = "SELECT custId, cust, jobInfo, forman, phone, material, mixCode, tonnage, Safe, TonsOut, time, trucks, plant FROM nightorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRE Jackson Night Shift Orders</legend>");
    echo("<table>");
    echo("<tr><th>Customer</th><th>Job Information</th><th>Forman</th><th>Phone</th><th>Material</th><th>Mix Code</th><th>Tonnage</th><th>Safe #</th><th>Tons Out</th><th>Load Time</th><th>Trucks</th><th>Plant</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['cust'] . "</td>" .
    "<td>" . $row['jobInfo'] . "</td>" . 
    "<td>" . $row['forman'] . "</td>" .
    "<td>" . $row['phone'] . "</td>" .
    "<td>" . $row['material'] . "</td>" .
    "<td>" . $row['mixCode'] . "</td>" .
    "<td>" . $row['tonnage'] . "</td>" . 
    "<td>" . $row['Safe'] . "</td>" .
    "<td>" . $row['TonsOut'] . "</td>" . 
    "<td>" . $row['time'] . "</td>" .
    "<td>" . $row['trucks'] . "</td>" .
    "<td>" . $row['plant'] . "</td>" ;
    //"<td><a href='edb1.1cc.php?custId=" . $row['custId'] . "'>Delete</a></td>" . 
    //"<td><a href='edb1.1dd.php?custId=" . $row['custId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
//print("<a href='edb1.1aa.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");*/
$sql = "SELECT pureId, workd, pure, job, psample, facility, estload, truck, trurou, stime, acc, notes FROM pureorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>Puresoil Daily Disatch & Incoming Log</legend>");
    echo("<table>");
    echo("<tr><th>Work Date</th><th>Customer / Job Name</th><th>Job #</th><th>Samples</th><th>Facility</th><th>Estimated Loads</th><th>Trucking Company</th><th># Of Trucks/Rounds</th><th>Time Schedule</th><th>Acc. Status</th><th>Notes</th><th>Delete</th><th>Update</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['workd'] . "</td>" .
    "<td>" . $row['pure'] . "</td>" . 
    "<td>" . $row['job'] . "</td>" .
    "<td>" . $row['psample'] . "</td>" .
    "<td>" . $row['facility'] . "</td>" .
    "<td>" . $row['estload'] . "</td>" .
    "<td>" . $row['truck'] . "</td>" .
    "<td>" . $row['trurou'] . "</td>" .
    "<td>" . $row['stime'] . "</td>" .
    "<td>" . $row['acc'] . "</td>" .
    "<td>" . $row['notes'] . "</td>" .
    "<td><a href='pure1pc.php?pureId=" . $row['pureId'] . "'>Delete</a></td>" . 
    "<td><a href='pure1pd.php?pureId=" . $row['pureId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
print("<a href='pure1pa.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");
$sql = "SELECT truckId, tCust, jInfo, jContact, tTruck, notes FROM truckorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRET Trucking Orders</legend>");
    echo("<table>");
    echo("<tr><th>Customer</th><th>Job Information</th><th>Truck Dispatcher</th><th># Of Trucks</th><th>Notes</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['tCust'] . "</td>" . 
    "<td>" . $row['jInfo'] . "</td>" .
    "<td>" . $row['jContact'] . "</td>" .
    "<td>" . $row['tTruck'] . "</td>" .
    "<td>" . $row['notes'] . "</td>" ;
    //"<td><a href='edb1.1tc.php?truckId=" . $row['truckId'] . "'>Delete</a></td>" . 
    //"<td><a href='edb1.1td.php?truckId=" . $row['truckId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
//print("<a href='edb1.1ta.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");/*
$sql = "SELECT oilId, aload, dMat, dLoad, dPlant, pLoad, nMat, nLoad, nPlant FROM oilorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRE Jackson Day & Night Oil Orders</legend>");
    echo("<table>");
    echo("<tr><th>First Day Load</th><th>Material</th><th># Of Loads</th><th>Plant</th><th>First Night Load</th><th>Material</th><th># Of Loads</th><th>Plant</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['aload'] . "</td>" .
    "<td>" . $row['dMat'] . "</td>" .
    "<td>" . $row['dLoad'] . "</td>" .
    "<td>" . $row['dPlant'] . "</td>" .
    "<td>" . $row['pLoad'] . "</td>" . 
    "<td>" . $row['nMat'] . "</td>" .
    "<td>" . $row['nLoad'] . "</td>" .
    "<td>" . $row['nPlant'] . "</td>" ;
    //"<td><a href='edb1.1oc.php?oilId=" . $row['oilId'] . "'>Delete</a></td>" . 
    //"<td><a href='edb1.1od.php?oilId=" . $row['oilId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
//print("<a href='edb1.1oa.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");*/
?>
<body>
    <audio controls "controls">
        <source src="Inside My Cargos.mp3">
    </audio>
</body>