<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Oil Orders</title>
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
    <h1>Add Oil Order</h1>
    <img src="earle1.png">
    <form action="scale1ob.php" method="POST">
        <p>First Day Load<br/>
        <input type="time" name="aload"></p>
        <p>Material<br/>
        <input type="text" name="dMat"></p>
        <p># Of Loads<br/>
        <input type="text" name="dLoad"></p>
        <p>Plant<br/>
        <input type="text" name="dPlant"></p>
        <p>First Night Load<br/>
        <input type="text" name="pLoad"></p>
        <p>Material<br/>
        <input type="text" name="nMat"></p>
        <p># Of Loads<br/>
        <input type="text" name="nLoad"></p>
        <p>Plant<br/>
        <input type="text" name="nPlant"></p>
        <input id="save" type="submit" value="Save Information">
    </form>
    </div>
</body>
</html>