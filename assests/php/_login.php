<?php
$showError = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
include "_dbconnect.php";
$loginemail = $_POST['loginemail'];
$loginPass = $_POST['loginpassword'];
$admin_log = 'admin@admin.com';
$admin_pass = '123';
if($admin_log == $loginemail && $admin_pass == $loginPass){
    session_start();
    $_SESSION['admin'] = true;
    header("Location: /olx/index.php?errorlogin=admin");
    exit();
}
$sql = "SELECT * FROM `users` WHERE users_email ='$loginemail'";

$result = mysqli_query($conn, $sql);
$numRows = mysqli_num_rows($result);
if($numRows==1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($loginPass, $row['users_password'])){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['users_name'];
        $_SESSION['user_id'] = $row['users_id'];
        $_SESSION['useremail'] = $loginemail;
        echo "Logged In". $loginemail;
        header("Location: /olx/index.php?errorlogin=false");
        exit();
    }
    else{
        header("Location: /olx/index.php?errorlogin=truepassword");
    }
}else{
    header("Location: /olx/index.php?errorlogin=trueusername");

}

}
?>