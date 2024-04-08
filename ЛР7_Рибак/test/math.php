<?php
session_start();
if ( !isset($_SESSION['pass'])or !isset($_SESSION['name'])or ($_SESSION['name'])=="" or ($_SESSION['pass'])=="" ){
    header('Location: start.php');
}
else{
    echo '
    <link rel="stylesheet" href="style.css">
    <div class="fon"><br><br><br>
    
        <form class="form2" action="reg.php" method="post" name="registration" id="registration">
            <a href="mat1.php">Завадання 1</a><br>
            <a href="mat2.php">Завадання 2</a><br>
            <a href="mat3.php">Завадання 3</a><br>
        </form>
    
    </div>
';
}
