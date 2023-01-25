<?php
    include 'block/header.php';
    if($_SESSION['user']['status'] == 0){
?>

<body>
    <!-- Страница со списком заявок на обратную связь -->
    <main>
        <div class="name_table">
            <p>Id:</p>
            <p>Время создание<br> клиента:</p>
            <p>Время отправки<br> сообщения:</p>
            <p>Имя клиента:</p>
            <p>Почта:</p>
            <p>Тема сообщения:</p>
            <p>Текст сообщения:</p>
            <p>Ссылка на фаил:</p>
        </div>
        <?php
            $check = mysqli_query($mysql, "SELECT * FROM `forma`");
            $check = mysqli_fetch_all($check);

            foreach($check as $name){
        ?>
        <dib class="table_box">
            <div class="table_line">
                <p class="info_id"><?php echo $name[1]; ?></p>
                <p class="info_time_user"><?php echo $name[2]; ?></p>
                <p class="info_time_msg"><?php echo $name[3]; ?></p>
                <p class="info_user_name"><?php echo $name[4]; ?></p>
                <p class="info_email"><?php echo $name[5]; ?></p>
                <p class="info_tema"><?php echo $name[6]; ?></p>
                <p class="info_text"><?php echo $name[7]; ?></p>
                <p class="info_file"><a href="<?php echo $name[8]; ?>"><?php echo $name[8]; ?></a></p>
            </div>     
        </dib>
        <?php
            }
        ?>
        <a class="ext" href="input.php">
            выйти
        </a>
    </main>
</body>
</html>

<?php
    }
    else{
        header('Location:../work/error.php');
    }
?>