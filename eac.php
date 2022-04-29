<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="James Matthews">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Earle.css"/>
    <a href="https://www.earleco.com"> Walter Earle / </a><a href="https://portal.earleco.com"> Employee Portal / </a><a href="login.php"> Log Out</a>
    <title>EAC Daily Orders</title>
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
require_once('edbs1.1.php');
$sql = "SELECT CustId, workd, Cust, JobInfo, Forman, Phone, Material, MixCode, Tonnage, safe, tonsOut, Time, Trucks, Plant FROM dayorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRE Jackson Day Shift Orders</legend>");
    echo("<table>");
    echo("<tr><th>Work Date</th><th>Customer</th><th>Job Information</th><th>Forman</th><th>Phone</th><th>Material</th><th>Mix Code</th><th>Tonnage</th><th>Safe #</th><th>Tons Out</th><th>Load Time</th><th>Trucks</th><th>Plant</th><th>Delete</th><th>Update</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['workd'] . "</td>" .
    "<td>" . $row['Cust'] . "</td>" . 
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
    "<td>" . $row['Plant'] . "</td>" .
    "<td><a href='eac1c.php?CustId=" . $row['CustId'] . "'>Delete</a></td>" . 
    "<td><a href='eac1d.php?CustId=" . $row['CustId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
print("<a href='eac1a.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");
$sql = "SELECT custId, workd, cust, jobInfo, forman, phone, material, mixCode, tonnage, Safe, TonsOut, time, trucks, plant FROM nightorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRE Jackson Night Shift Orders</legend>");
    echo("<table>");
    echo("<tr><th>Work Date</th><th>Customer</th><th>Job Information</th><th>Forman</th><th>Phone</th><th>Material</th><th>Mix Code</th><th>Tonnage</th><th>Safe #</th><th>Tons Out</th><th>Load Time</th><th>Trucks</th><th>Plant</th><th>Delete</th><th>Update</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['workd'] . "</td>" .
    "<td>" . $row['cust'] . "</td>" . 
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
    "<td>" . $row['plant'] . "</td>" .
    "<td><a href='eac1cc.php?custId=" . $row['custId'] . "'>Delete</a></td>" . 
    "<td><a href='eac1dd.php?custId=" . $row['custId'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
print("<a href='eac1aa.php'>Add Order</a>");
echo("</fieldset>");
print("<br/>");
$sql = "SELECT wretid, workd, super, forman, job, material, trucks, tolls, shift, rate, stime, location, notes FROM wretorders";
    $result = $connection -> query($sql);
    echo("<fieldset>");
    echo("<legend>WRET Trucking Orders</legend>");
    echo("<table>");
    echo("<tr><th>Work Date</th><th>Super Intendent</th><th>Forman</th><th>Job #</th><th>Material</th><th># Of Trucks</th><th>Tolls</th><th>Shift</th><th>Rate</th><th>Start Time</th><th>Location</th><th>Notes</th><th>Delete</th><th>Update</th></tr>");
    $row = mysqli_fetch_array($result);
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['workd'] . "</td>" .
    "<td>" . $row['super'] . "</td>" . 
    "<td>" . $row['forman'] . "</td>" .
    "<td>" . $row['job'] . "</td>" .
    "<td>" . $row['material'] . "</td>" .
    "<td>" . $row['trucks'] . "</td>" .
    "<td>" . $row['tolls'] . "</td>" .
    "<td>" . $row['shift'] . "</td>" .
    "<td>" . $row['rate'] . "</td>" .
    "<td>" . $row['stime'] . "</td>" .
    "<td>" . $row['location'] . "</td>" .
    "<td>" . $row['notes'] . "</td>" .
    "<td><a href='eacc.php?wretid=" . $row['wretid'] . "'>Delete</a></td>" . 
    "<td><a href='eacd.php?wretid=" . $row['wretid'] . "'>Update</a></td>";
    echo "</tr>";
}
echo("</table>");
print("<a href='eaca.php'>Add Order</a>");
echo("</fieldset>");
?>
<body>
    <audio controls "controls">
        <source src="Inside My Cargos.mp3">
    </audio>
</body>