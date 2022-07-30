<?php
$showError = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'];
$user_email = $_POST['email'];
$pass = $_POST['password'];
$status = 0;
include "_dbconnect.php";

$existsql = "SELECT * FROM `users` WHERE users_email= '$user_email'";

$result = mysqli_query($conn, $existsql);
$numRows = mysqli_fetch_assoc($result);

if($numRows>0){
    $showError = "Username Exists OR Email Exists";
    header('http://localhost/olx/index.php');
}else{

        $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` (`users_name`, `users_email`, `users_password`, `status`) VALUES ('$name', '$user_email', '$hash', '$status');";
    $myresult = mysqli_query($conn,$sql);
        if($myresult){
            session_start();
            $_SESSION['loggedin'] == true;
            $showAlert = true;
            header("Location: /olx/index.php?signupsuccess=true");
            exit;
        }
        else {
            echo "Failed: $sql <br> $conn->error";
        }
 }

}
header("Location: /olx/index.php?signupsuccess=false&error=$showError");

?>