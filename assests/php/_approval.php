

<?php

if(isset($_GET['status'])){
    $status = $_GET['status'];

    include "_dbconnect.php";
    
    $sql = "SELECT * FROM users WHERE users_id = '$status'";

    $result = mysqli_query($conn,$sql);
if($result){
    $update = "UPDATE users set status = 1 WHERE users_id = $status";
    $res = mysqli_query($conn,$update);
    if($res){
    header("Location: _admin.php");
    }
}
}
?>