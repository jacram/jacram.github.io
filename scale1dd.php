<?php
    require_once("edbs1.1.php");
    $id= $_REQUEST['custId'];
    $sql = "SELECT * FROM nightorders WHERE custId='" . $id . "';";
    $result = $connection -> query($sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Night Orders</title>
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
             height: 775px;
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
        <h1>Update Night Order</h1>
        <img src="earle1.png">
    <form action="scale1ee.php" method="POST">
        <input type="hidden" name="custId" value="<?php print($id); ?>">
        <p>Work Date<br/>
        <input type="text" value="<?php print($row['workd']) ?>" name="workd"></p>
        <p>Customer<br/>
        <input type="text" value="<?php print($row['cust']) ?>" name="cust"></p>
        <p>Job Information<br/>
        <input type="text" value="<?php print($row['jobInfo']) ?>" name="jobInfo"></p>
        <p>Forman<br/>
        <input type="text" value="<?php print($row['forman']) ?>" name="forman"></p>
        <p>Phone<br/>
        <input type="text" value="<?php print($row['phone']) ?>" name="phone"></p>
        <p>Material<br/>
        <input type="text" value="<?php print($row['material']) ?>" name="material"></p>
        <p>Mix Code<br/>
        <input type="text" value="<?php print($row['mixCode']) ?>" name="mixCode"></p>
        <p>Tonnage<br/>
        <input type="text" value="<?php print($row['tonnage']) ?>" name="tonnage"></p>
        <p>Safe #<br/>
        <input type="text" value="<?php print($row['Safe']) ?>" name="Safe"></p>
        <p>Tons Out<br/>
        <input type="text" value="<?php print($row['TonsOut']) ?>" name="TonsOut"></p>
        <p>Time<br/>
        <input type="text" value="<?php print($row['time']) ?>" name="time"></p>
        <p>Trucks<br/>
        <input type="text" value="<?php print($row['trucks']) ?>" name="trucks"></p>
        <p>Plant<br/>
        <input type="text" value="<?php print($row['plant']) ?>" name="plant"></p>
        <input id="save" type="submit" value="Update Order">
    </form>
    </div>
</body>
</html>