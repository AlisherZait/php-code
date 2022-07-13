<?php
$array = ['milk', 'beer', 'beer', 'milk', 'milk'];
//echo '<pre>';
//print_r($array);die;
for($i = 0; $i < 5; $i++){

        if ($array[$i] == 'milk'){
            echo '<pre>';
            print_r('good');
        }
        else{
            echo '<pre>';
            print_r('bad');
        }
}

