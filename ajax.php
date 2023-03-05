<?php
$conn = mysqli_connect('localhost:3307','root','','country_state_city');

if(isset($_POST['id'])){
    $id-$_POST['id'];
    $query = mysqli_query($conn, "select * from state where country_id=1 ");
    while($row=mysqli_fetch_array($query)){
$id = $row['id'];
$state = $row['state'];
echo "<option value = '$id'>$state</option>";    
}
}

if(isset($_POST['stateId'])){
    $id=$_POST['stateId'];
    $query = mysqli_query($conn, "select * from city where state_id=1 ");
    
    while($row=mysqli_fetch_array($query)){
$id = $row['id'];
$city = $row['city'];
echo "<option value'$id'>$city</option>";    
}
}
?>