<?php
    require_once("edbs1.1.php");
    $id= $_REQUEST['wretid'];
    $sql = "SELECT * FROM wretorders WHERE wretid='" . $id . "';";
    $result = $connection -> query($sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Day Orders</title>
    
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
    <H1>Update WRET Orders</H1>
    <img src="earle1.png">
    <form action="eace.php" method="POST">
        <input type="hidden" name="wretid" value="<?php print($id); ?>">
        <p>Work Date<br/>
        <input type="text" value="<?php print($row['workd']) ?>" name="workd"></p>
        <p>Super Intendent<br/>
        <input type="text" value="<?php print($row['super']) ?>" name="super"></p>
        <p>Forman<br/>
        <input type="text" value="<?php print($row['forman']) ?>" name="forman"></p>
        <p>Job #<br/>
        <input type="text" value="<?php print($row['job']) ?>" name="job"></p>
        <p>Material<br/>
        <input type="text" value="<?php print($row['material']) ?>" name="material"></p>
        <p># Of Trucks<br/>
        <input type="text" value="<?php print($row['trucks']) ?>" name="trucks"></p>
        <p>Tolls<br/>
        <input type="text" value="<?php print($row['tolls']) ?>" name="tolls"></p>
        <p>Shift #<br/>
        <input type="text" value="<?php print($row['shift']) ?>" name="shift"></p>
        <p>Rate<br/>
        <input type="text" value="<?php print($row['rate']) ?>" name="rate"></p>
        <p>Start Time<br/>
        <input type="time" value="<?php print($row['stime']) ?>" name="stime"></p>
        <p>Location<br/>
        <input type="text" value="<?php print($row['location']) ?>" name="location"></p>
        <p>Notes<br/>
        <input type="text" value="<?php print($row['notes']) ?>" name="notes"></p>
        <input id="save" type="submit" value="Update Order">
    </form>
    </div>
</body>
</html>