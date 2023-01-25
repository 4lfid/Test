<?php
    include 'block/header.php';
?>
    <!-- Страница регистрации пользователя -->
    <main>
        <p class="title">РЕГИСТРАЦИЯ</p>
        <form class="input" action="php/sign.php" method="POST">
            <input type="text" name="name" placeholder="имя">
            <input type="email" name="email" placeholder="почта">
            <input type="password" name="password" placeholder="пароль">
            <button class="input_button">продолжить</button>
        </form>
        <a class="next_input" href="input.php">либо войдите</a>
        <p class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </p>
    </main>
</body>
</html>