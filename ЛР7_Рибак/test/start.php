<html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Reg-Log</title>
</head>
<body>
<header class="head">
    <div class="header-section">
        <div class="header-item header-button"><a href="start.php">Авторизація</a></div>
        <div class="header-item header-button"><a href="math.php">Завдання</a></div>
    </div>
</header>
<main>
    <div class="fon">
        <div class="dd">
            <form class="form1" action="reg.php" method="post" name="registration" id="registration">
                <h2 align="center">Вхід у систему</h2>
                <p>Введіть ПІБ<br> <input type="text" placeholder="ПІБ" name="name" id="name"></p>
                <p>Введіть пароль <br><input type="password" name="pass" id="pass" placeholder="Password"></p>
                <input type="submit" name="submit_in" id="signup" value="Вхід">
                <input type="submit" name="submit_reg" id="signin" value="Реєстрація">
            </form>
        </div>
    </div>
</main>
</body></html>