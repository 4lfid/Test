<?php
    session_start();
    include 'connect.php';

    $form_tema = $_POST['tema'];
    $form_text = $_POST['text'];

    $form_file = 'files/' . time() . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $form_file);

    $form_time = date("d,m,Y H:i:s");

    $id_user = $_SESSION['user']['id'];
    $user_name = $_SESSION['user']['name'];
    $user_time = $_SESSION['user']['time'];
    $user_email = $_SESSION['user']['email'];

    if(mb_strlen($form_tema) != 0 && mb_strlen($form_text) != 0){
        mysqli_query($mysql, "INSERT INTO `forma` (`id_user`, `user_time`, `form_time`, `user_name`, `user_email`, `form_tema`, `form_text`, `form_file`) VALUES ('$id_user', '$user_time', '$form_time', '$user_name', '$user_email', '$form_tema', '$form_text', '$form_file')");
        unset($_SESSION['user']);
        header('Location:../good.php');
    }
    else{
        $_SESSION['msg'] = "Заполните все поля";
        header('Location:../forma.php');
    }
?>