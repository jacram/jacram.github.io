<?php
    require_once("edbs1.1.php");
    $id= $_REQUEST['oilId'];
    $sql = "SELECT * FROM oilorders WHERE oilId='" . $id . "';";
    $result = $connection -> query($sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Oil Orders</title>
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
        <h1>Update Oil Order</h1>
        <img src="earle1.png">
    <form action="lab1oe.php" method="POST">
        <input type="hidden" name="oilId" value="<?php print($id); ?>">
        <p>First Day Load<br/>
        <input type="text" value="<?php print($row['aload']) ?>" name="aload"></p>
        <p>Material<br/>
        <input type="text" value="<?php print($row['dMat']) ?>" name="dMat"></p>
        <p># Of Loads<br/>
        <input type="text" value="<?php print($row['dLoad']) ?>" name="dLoad"></p>
        <p>Plant<br/>
        <input type="text" value="<?php print($row['dPlant']) ?>" name="dPlant"></p>
        <p>First Night Load<br/>
        <input type="text" value="<?php print($row['pLoad']) ?>" name="pLoad"></p>
        <p>Material<br/>
        <input type="text" value="<?php print($row['nMat']) ?>" name="nMat"></p>
        <p># Of Loads<br/>
        <input type="text" value="<?php print($row['nLoad']) ?>" name="nLoad"></p>
        <p>Plant<br/>
        <input type="text" value="<?php print($row['nPlant']) ?>" name="nPlant"></p>
        <input id="save" type="submit" value="Update Order">
    </form>
    </div>
</body>
</html>