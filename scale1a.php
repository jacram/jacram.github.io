<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Day Orders</title>
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
    <h1>Adding Day Order</h1>
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
        <input type="text" name="Time"></p>
        <p>Trucks<br/>
        <input type="text" name="Trucks"></p>
        <p>Plant<br/>
        <input type="text" name="Plant"></p>
        <input id="save" type="submit" value="Save Information">
    </form>
    </div>
</body>
</html>