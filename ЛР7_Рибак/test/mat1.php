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

    <form class="form2" action="mat1.php" method="post">
        <p4>Завдання 1</p4><br>
        <p4>Обчислити кількість повторів у введеному числі</p4><br><br>
        <input type="text" name="data">
        <input type="submit" name="submit_in" id="signup" value="Рахувати"><br><br>
        <p4>Кількість повторів = </p4>
<?php
if(isset($_POST['data'])){
    $data=$_POST['data'];
    $kl=0;
    $ar=array();
    foreach(str_split($data) as $char){

        if(!in_array($char, $ar) ){
            $co=substr_count($data, $char) - 1;

            $kl+=$co;
            array_push($ar, $char);
        }
    }
    echo $kl;

}
?>
    </form>
</div>
