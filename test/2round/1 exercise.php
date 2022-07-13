<form method="get">
    Секунд: <input type="text" name="w"><br>
    <input type="submit">
</form>
<?php
$w = htmlspecialchars($_GET["w"]);
echo $w. '<br>';

function num_word($value, $words, $show = true)
{
    $num = $value % 100;
    if ($num > 19) {
        $num = $num % 10;
    }

    $out = ($show) ?  $value . ' ' : '';
    switch ($num) {
        case 1:  $out .= $words[0]; break;
        case 2:
        case 3:
        case 4:  $out .= $words[1]; break;
        default: $out .= $words[2]; break;
    }

    return $out;
}
error_reporting(0);
if ($w >= 3600) {
    $res = '';

    $hours = floor($w / 3600);
    $w = $w % 3600;
    $res .= num_word($hours, array('час', 'часа', 'часов')) . ', ';

    echo 'Осталось' .$res;
}

elseif(!is_numeric($w)){
    echo 'Введите число секунд:';
}
else{
    echo 'Осталось менее часа';
}
?>