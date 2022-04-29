<?php
    require_once("edbs1.1.php");
    $id= $_REQUEST['truckId'];
    $sql = "SELECT * FROM truckorders WHERE truckId='" . $id . "';";
    $result = $connection -> query($sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trucking Orders</title>
    <style>
        p {
            margin: 0;
            border: 0;
        }
        h1{    
    font-family: Roboto, Helvetica, Arial, Lucida, sans-serif;
    color: #00d084;
    text-align: center;
    font-size: 2em;
    font-variant: small-caps;
    width: 100%;
    padding-bottom: 0;
    padding-top: 0;
    margin-bottom: 0;
    margin-top: 0;
}
img {
             height: 200px;
             width: 300px;
             margin-left: 75px;
             opacity: .25;
         }
#save{
    margin-top: 3px;
    background-color: #00d084;
    color: #fcb900;
}
#box{
    background-color: whitesmoke;
             margin: auto;
             height: 750px;
             width: 450px;
             padding: 20px;
}
body{
             background-image: url(american-flag.jpg);
         }
    </style>
</head>
<body>
    <div id="box">
    <h1>Update Trucking Order</h1>
    <img src="earle1.png">
    <form action="truck1te.php" method="POST">
        <input type="hidden" name="truckId" value="<?php print($id); ?>">
        <p>Customer<br/>
        <input type="text" value="<?php print($row['tCust']) ?>" name="tCust"></p>
        <p>Job Information<br/>
        <input type="text" value="<?php print($row['jInfo']) ?>" name="jInfo"></p>
        <p>Truck Dispatcher<br/>
        <input type="text" value="<?php print($row['jContact']) ?>" name="jContact"></p>
        <p># Of Trucks<br/>
        <input type="text" value="<?php print($row['tTruck']) ?>" name="tTruck"></p>
        <p>Notes<br/>
        <input type="text" value="<?php print($row['notes']) ?>" name="notes"></p>
        <input id="save" type="submit" value="Update Order">
    </form>
    </div>
</body>
</html>