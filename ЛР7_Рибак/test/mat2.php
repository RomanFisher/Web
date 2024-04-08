<?php
session_start();
if ( !isset($_SESSION['pass'])or !isset($_SESSION['name'])or ($_SESSION['name'])=="" or ($_SESSION['pass'])=="" ){
    header('Location: start.php');
}
else{
    echo '<header class="head">
<link rel="stylesheet" href="style.css">
    <div class="header-section">
        <div class="header-item header-logo">
            Лабораторна робота 7
        </div>
        <div class="header-item header-button"><a href="start.php">Авторизація</a></div>
        <div class="header-item header-button"><a href="math.php">Завдання</a></div>
    </div>
</header>';
}
?>
<link rel="stylesheet" href="style.css">
<div class="fon"><br><br><br>
<form class="form2" action="mat2.php" method="post">
    <img src="2.jpg" alt="Ой, здається не вдалося підгрузити медіафайл"><br><br>
    Введіть ліву межу для обчислень<br><br>
    <input type="text" name="N">
    <input type="submit" name="submit_in" id="signup" value="Рахувати" >
<br>
<?php
    if(isset($_POST['N'])){
        $N=$_POST['N'];
        $a=1;
        $b=4;
        $h=($b-$a)/$N;

        $miny=1;
        $maxy=1;

        for($x=$a;$x<$b;$x+=$h){
            $y=pow((2-$x),4)/$x*$x;
            if($y>$maxy)
            {
                $maxy=$y;
            }
            if($y<$miny)
            {
                $miny=$y;
            }
            echo "<p>x={$x} y={$y}</p>";
        }

        echo"<br>ymin = {$miny} ymax = {$maxy} <br> Площа отриманого прямокутника буде дорівнювати S = ".$miny*$maxy;

    }
?>
    </form>
</div>
