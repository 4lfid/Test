<?php
    session_start();
    include 'connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $chek_login = mysqli_query($mysql, "SELECT * FROM `users` WHERE `email` = '$email'");
    $chek_password = mysqli_query($mysql, "SELECT * FROM `users` WHERE `password` = '$password'");

    if(mysqli_num_rows($chek_login) > 0 && mysqli_num_rows($chek_password) > 0){
        $chek = mysqli_query($mysql, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
        unset($_SESSION['user']);
        if(mysqli_num_rows($chek) > 0){
            $user = mysqli_fetch_assoc($chek);
            $_SESSION['user'] = [
                "status" => $user['status'],
                "id" => $user['id'],
                "name" => $user['name'],
                "email" => $user['email'],
                "time" => $user['time']
            ];
        }
        if($_SESSION['user']['status'] == 0){
            header('Location:../table.php');
        }
        else{
            header('Location:../forma.php');
        }
    }
    else{
        $_SESSION['msg'] = "пользователь не найден";
        header('Location:../input.php');
    }
?>