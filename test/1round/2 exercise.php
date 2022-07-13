<form method="get">
     w = <input type="text" name="w"><br>
     h = <input type="text" name="h"><br>
     <input type="submit">
</form>
<?php
 $w = htmlspecialchars($_GET["w"]);
 $h = htmlspecialchars($_GET["h"]);

for ($i = 0; $i < $h; $i++)
{
    for ($j=0; $j <$w; $j++)
    {
        $arr[$i][$j] = '&';
        echo $arr[$i][$j];
    }
    echo '<br />';
}