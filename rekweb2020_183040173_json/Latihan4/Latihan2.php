<?php

$data = file_get_contents('../Latihan3/coba.json');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);
?>