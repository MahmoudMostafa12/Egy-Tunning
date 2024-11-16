<?php

$conn = mysqli_connect('localhost', 'root', '', 'egytuning');

if (!$conn) {
    die('Erorr' . mysqli_connect_error());
} else {
    echo 'good';
}
