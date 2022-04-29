<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to EAC & ERC Orders</title>
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
             margin-left: 15px;
             opacity: .25;
         }
#save{
    margin-top: 3px;
    background-color: #00d084;
    color: #fcb900;
}
        body{
             background-image: url(american-flag.jpg);
         }
        #box{
            width: 24%;
            margin-left: 50px;
             background-color: whitesmoke;
             padding: 20px;
             float: left;
             }
        #box2{
            width: 24%;
             background-color: whitesmoke;
             margin-left: 100px;
             padding: 20px;
             float: left;
            }
        #box3{
            width: 24%;
            margin-left: 100px;
             background-color: whitesmoke;
             padding: 20px;
             float: left;
            }
    </style>
</head>
<body>
    <div id="box">
    <h1>Add Day Order</h1>
        <img src="earle1.png">
    <form action="scale1b.php" method="POST">
        <p>Work Date<br/>
        <input type="text" name="workd"></p>
        <p>Customer<br/>
        <input type="text" name="Cust"></p>
        <p>Job Information<br/>
        <input type="text" name="JobInfo"></p>
        <p>Forman<br/>
        <input type="text" name="Forman"></p>
        <p>Phone #<br/>
        <input type="phone" name="Phone"></p>
        <p>Material<br/>
        <input type="text" name="Material"></p>
        <p>Mix Code<br/>
        <input type="text" name="MixCode"></p>
        <p>Tonnage<br/>
        <input type="text" name="Tonnage"></p>
        <p>Safe #<br/>
        <input type="text" name="safe"></p>
        <p>Tons Out<br/>
        <input type="text" name="tonsOut"></p>
        <p>Load Time<br/>
        <input type="time" name="Time"></p>
        <p>Trucks<br/>
        <input type="text" name="Trucks"></p>
        <p>Plant<br/>
        <input type="text" name="Plant"></p>
        <input id="save" type="submit" value="Save Information">
    </form>
</div>
    <div id="box2">
<h1>Add Night Order</h1>
<img src="earle1.png">
    <form action="eac1bb.php" method="POST">
        <p>Work Date<br/>
        <input type="text" name="workd"></p>
        <p>Customer<br/>
        <input type="text" name="cust"></p>
        <p>Job Information<br/>
        <input type="text" name="jobInfo"></p>
        <p>Forman<br/>
        <input type="text" name="forman"></p>
        <p>Phone #<br/>
        <input type="phone" name="phone"></p>
        <p>Material<br/>
        <input type="text" name="material"></p>
        <p>Mix Code<br/>
        <input type="text" name="mixCode"></p>
        <p>Tonnage<br/>
        <input type="text" name="tonnage"></p>
        <p>Safe #<br/>
        <input type="text" name="Safe"></p>
        <p>Tons Out<br/>
        <input type="text" name="TonsOut"></p>
        <p>Load Time<br/>
        <input type="time" name="time"></p>
        <p>Trucks<br/>
        <input type="text" name="trucks"></p>
        <p>Plant<br/>
        <input type="text" name="plant"></p>
        <input id="save" type="submit" value="Save Information">
    </form>
</div>
<div id="box3">
<h1>Add Trucking Order</h1>
<img src="earle1.png">
    <form action="eacb.php" method="POST">
        <p>Work Date<br/>
        <input type="text" name="workd"></p>
        <p>Super Intendent<br/>
        <input type="text" name="super"></p>
        <p>Forman<br/>
        <input type="text" name="forman"></p>
        <p>Job #<br/>
        <input type="text" name="job"></p>
        <p>Material<br/>
        <input type="text" name="material"></p>
        <p># Of Trucks<br/>
        <input type="text" name="trucks"></p>
        <p>Tolls<br/>
        <input type="text" name="tolls"></p>
        <p>Shift<br/>
        <input type="text" name="shift"></p>
        <p>Rate<br/>
        <input type="text" name="rate"></p>
        <p>Start Time<br/>
        <input type="time" name="stime"></p>
        <p>Location<br/>
        <input type="text" name="location"></p>
        <p>Notes<br/>
        <input type="text" name="notes"></p>
        <input id="save" type="submit" value="Save Information">
    </form>
</div>
</body>
