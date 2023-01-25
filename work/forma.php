<?php
    include 'block/header.php';
    if($_SESSION['user']['status'] == 1){
?>

<body>
    <!-- Страница с формой обратной связи -->
    <main>
        <p class="title">ФОРМА ЗАЯВКИ</p>
        <form class="forma" action="php/forma.php" method="POST" enctype="multipart/form-data">
            <input class="input_tema" type="text" name="tema" placeholder="тема">
            <textarea class="input_text" name="text" placeholder="текст"></textarea>
            <input class="input_file" id="file" type="file" name="file">
            <label class="input_file_button" for="file">выбрать фаил</label>
            <button class="input_button">отправить</button>
        </form>
        <p class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </p>
    </main>
</body>
</html>

<?php
    }
    else{
        header('Location:../work/error.php');
    }
?>