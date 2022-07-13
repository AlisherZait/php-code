<form method="get">
    Введите целое число: <input type="text" name="int"><br>
    <input type="submit">
</form>

<?php
class Validation
{
    public function mess($a)
    {
        if ($a < 0) {
            return 'Вы ввели отрицательное число';
        } elseif ($a > 0) {
            return 'Вы ввели положительное число';
        } elseif (!is_numeric($a)) {
            return 'Вы ввели не число';
        } elseif ($a == 0) {
            return 'Вы ввели ноль';
        } else {
            return 'Вы нажали "Отмена';
        }
    }
}
$i = htmlspecialchars($_GET["int"]);
echo $i. '<br>';
$obj = new Validation();
echo $obj->mess($i);
?>