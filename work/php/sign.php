<?php
    session_start();
    include 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $status = "1";
    $time = date("d,m,Y H:i:s");

    if(mb_strlen($name) != 0 && mb_strlen($email) != 0 && mb_strlen($password) != 0){
        mysqli_query($mysql, "INSERT INTO `users` (`status`, `name`, `email`, `password`, `time`) VALUES ('$status', '$name', '$email', '$password', '$time')");
        unset($_SESSION['user']);
        header('Location:../input.php');
    }
    else{
        $_SESSION['msg'] = "заполните все поля";
        header('Location:../index.php');
    }
?>