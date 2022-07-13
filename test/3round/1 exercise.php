<?php
class arMid
{
    public function ariMid($data)
    {
        $average = array_sum($data) / count($data);
        return $average;
    }
}
$southData = [13, 15, 19, 26, 21, 22, 23];
$westData = [15, 14, 16, 18, 17, 24, 25];
$eastData = [20, 17, 19, 15, 24, 25, 26];
$northData = [19, 18, 23, 20, 23, 19, 31];

$obj = new arMid();
echo 'south '.$obj->ariMid($southData).'<br>';
//die;
echo 'west '.$obj->ariMid($westData).'<br>';
echo 'east '.$obj->ariMid($eastData).'<br>';
echo 'north '.$obj->ariMid($northData).'<br>';

