<?php 
session_start();
if(!isset($_SESSION["usernameSession"])) {
    header("Location: login.php");
}
if(isset($_POST["submitBtn"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $_SESSION["num1Session"] = $num1;
    $_SESSION["num2Session"] = $num2;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>