<?php
    session_start();
    $name=($_POST['name']);
    $pass=($_POST['pass']);
    if(array_key_exists("submit_in",$_POST)){
        if(   !isset($_COOKIE['name']) or !isset($_COOKIE['pass']) or  $name!=($_COOKIE['name']) or $pass!=($_COOKIE['pass']) or $name==""){
            echo '
            <link rel="stylesheet" href="style.css">
            <div class="fon">
                <form class="form2" action="reg.php" method="post" name="registration" id="registration">
                    <H4>Введено некоректні значення пароля або ПІБ</H4><br>
                    <a href="start.php">Назад</a>
                </form>
            </div>
            ';
        }
        else{
            $_SESSION['name']=$name;
            $_SESSION['pass']=$pass;
            header('Location: math.php');
        }
    }
    else if(array_key_exists("submit_reg",$_POST)) {
        if(  $pass=="" or $name==""){
            echo '
            <link rel="stylesheet" href="style.css">
            <div class="fon">
                <form class="form2" action="reg.php" method="post" name="registration" id="registration">
                    <H4>Не залишайте пусті колонки!!!</H4><br>
                    <a href="start.php">Назад</a>
                </form>
            </div>
            ';
            
        }
        else {
            setcookie('name', $name);
            setcookie('pass', $pass);
            echo '
            <link rel="stylesheet" href="style.css">
            <div class="fon">
                <form class="form2" action="reg.php" method="post" name="registration" id="registration">
                    <H4>Акаунт успішно створено !)</H4><br>
                    <a href="start.php">Назад</a>
                </form>
            </div>
            ';
        }
    }
?>
