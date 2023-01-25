<?php
    include 'block/header.php';
?>
<body>
    <!-- Страница авторизации пользователя -->
    <main>
        <p class="title">АВТОРИЗАЦИЯ</p>
        <form class="input" action="php/input.php" method="POST">
            <input type="mail" name="email" placeholder="почта">
            <input type="password" name="password" placeholder="пароль">
            <button class="input_button">войти</button>
        </form>
        <a class="next_input" href="index.php">зарегистрируйтесь</a>
        <p class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </p>
    </main>
</body>
</html>