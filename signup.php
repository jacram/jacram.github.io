<?php
session_start();
include("edbs1.1.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    if(!empty($userName) && !empty($password)&& !empty($department) && !is_numeric($userName)){
        $userId = random_num(20);
        $query = "insert into users (userId, userName, password, department) values ('$userId','$userName','$password','$department')";
        mysqli_query($connection, $query);
        header("Location: login.php");
        die;
    }else {
        echo "Please enter valid Information!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="James Matthews">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="https://www.earleco.com">Walter Earle </a> <a href="https://portal.earleco.com/Account/Login?ReturnUrl=%2f"> Employee Portal</a>
    <title>Earle Sign Up For Daily Orders</title>
    <style>
        #a{
            color: #7bdcb5;
        }
        a{
            color: #fcb900;
        }
        p{
            padding: 0px;
            margin: 0px;
        }
        h1{
            font-size: 2.5em;
            text-align: center;
            color: #7bdcb5;
        }
        select{
            font-size: 1.5em;
            border-radius: 5px;
            height: 40px;
            width: 80%;
            margin: 10px;
        }
         #text{
             width: 80%;
             height: 25px;
             border-radius: 5px;
             padding: 5px;
             border: solid thin #aaa;
             margin-bottom: 15px;
         }
         #button{
             font-size: 1.5em;
             height: 35px;
             padding: 5px;
             width: 100%;
             color: azure;
             background-color: #7bdcb5;
             border: none;
             border-radius: 5px;
             margin-bottom: 40px;
         }
         #box{
             background-color: whitesmoke;
             margin: auto;
             height: 670px;
             width: 500px;
             padding: 20px;
         }
         img {
             height: 200px;
             width: 300px;
             margin-left: 90px;
             opacity: .25;
         }
         body{
             background-image: url(american-flag.jpg);
         }
    </style>
</head>
<body>
<div id="box">
<H1>Earle Daily Orders Sign up</H1>
<img src="earle1.png">
    <form method="POST">
        <div style="font-size: 20px; margin: 20px;">Sign Up</div>
        <p>Username</p>
        <input id="text" type="text" name="userName"></br>
        <p>Password</p>
        <input id="text" type="password" name="password"></br>
        <p>Department<br/>
        <select name="department">
            <option value="1">Scale</option>
            <option value="2">EAC</option>
            <option value="3">Trucking</option>
            <option value="4">Puresoil</option>
            <option value="5">Lab</option>
            <option value="6">Earle</option>
        </select></p>
        <input id="button" type="submit" value="Signup"></br>
        <a id="a" href="login.php">Click Here to Login</a>
    </form>
</div>
</body>
</html>