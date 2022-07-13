<form method="get">
    string: <input type="text" name="str"><br>
    <input type="submit">
</form>
<?php
$str = htmlspecialchars($_GET["str"]);
if (strlen($str)>=1) {
    $len = strlen($str) + 2;
    echo str_repeat("*", $len);'<br>';
    echo '<br>';
    echo '*'.$str .'*<br>';
    echo str_repeat("*", $len);'<br>';
}
else
    echo 'Введите строку:';