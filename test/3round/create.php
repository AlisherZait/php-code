<?php

require_once 'connect.php';

$id = $_POST['id'];
$pole_name = $_POST['pole_name'];
$pole_data = $_POST['pole_data'];


mysqli_query($connect, "INSERT INTO `data` (`id`, `pole_name`, `pole_data`) VALUES (NULL, '$pole_name', '$pole_data')");