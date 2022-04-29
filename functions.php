<?php
function check_login($connection){
    if(isset($_SESSION['userId'])){
        $id = $_SESSION['userId'];
        $query ="SELECT * FROM users WHERE userId = '$id' limit 1";
        $result = mysqli_query($connection, $query);
        if($result && mysqli_num_rows($result) > 0){
            $userData = mysqli_fetch_assoc($result);
            return $userData;
        }
    }
    header("Location: login.php");
    die;
}
function random_num($lenth){
    $text = "";
    if($lenth < 5){
        $lenth = 5;
    }
    $len = rand(4,$lenth);
    for ($i=0; $i < $len; $i++){
        # code...
        $text .= rand(0,20);
    }
    return $text;
}
?>