<?php
    require_once("edbs1.1.php");
    $id= $_REQUEST['pureId'];
    $sql = "SELECT * FROM pureorders WHERE pureId='" . $id . "';";
    $result = $connection -> query($sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Puresoil Orders</title>
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
    <h1>Update Puresoil Order</h1>
    <img src="earle1.png">
    <form action="scale1pe.php" method="POST">
        <input type="hidden" name="pureId" value="<?php print($id); ?>">
        <p>Work Date<br/>
        <input type="text" value="<?php print($row['workd']) ?>" name="workd"></p>
        <p>Customer / Job Name<br/>
        <input type="text" value="<?php print($row['pure']) ?>" name="pure"></p>
        <p>Job #<br/>
        <input type="text" value="<?php print($row['job']) ?>" name="job"></p>
        <p>Samples<br/>
        <input type="text" value="<?php print($row['psample']) ?>" name="psample"></p>
        <p>Facility<br/>
        <input type="text" value="<?php print($row['facility']) ?>" name="facility"></p>
        <p>Estimated Loads<br/>
        <input type="text" value="<?php print($row['estload']) ?>" name="estload"></p>
        <p>Trucking Company<br/>
        <input type="text" value="<?php print($row['truck']) ?>" name="truck"></p>
        <p># Of Trucks & Rounds<br/>
        <input type="text" value="<?php print($row['trurou']) ?>" name="trurou"></p>
        <p>Schedule Time<br/>
        <input type="text" value="<?php print($row['stime']) ?>" name="stime"></p>
        <p>Account Status<br/>
        <input type="text" value="<?php print($row['acc']) ?>" name="acc"></p>
        <p>Notess<br/>
        <input type="text" value="<?php print($row['notes']) ?>" name="notes"></p>
        <input id="save" type="submit" value="Update Order">
    </form>
    </div>
</body>
</html>