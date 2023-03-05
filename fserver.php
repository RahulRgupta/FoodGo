<?php
session_start();
$servername = "localhost:3307";
$usernamedb = "root";
$passworddb = "";
$dbname1 = "registration";
$errors = array();

$db1 = mysqli_connect($servername,$usernamedb,$passworddb,$dbname1);

if (isset($_POST['IB1'])) {
    $user_id = mysqli_real_escape_string($db,$_POST["user_id"]);
    $dish_detail_id = mysqli_real_escape_string($db,$_POST["dish_detail_id"]);
    $qty = mysqli_real_escape_string($db,$_POST["qty"]);

    if(count($errors) == 0) {
        
        $sql = "INSERT INTO cart (user_id, dish_detail_id, qty) VALUES ('$user_id', '$dish_detail_id', '$qty')";
        mysqli_query($db1, $sql);
       

    }

    
}
?>