<?php

    require_once "class_kasus.php";

    // objek 
    $kedongdong = new kedongdong('kedongdong','Asem','Hijau');
    $Kelengkeng = new Kelengkeng('Kelengkeng','Manis','Kuning');
    $Jambu = new Jambu('Jambu','Manis Sepat','Hijau / kuning');

    // echo
    echo '<br>';
    echo '<hr>';
    echo "Info Buah : <br>";
    echo '<hr>';
    $kedongdong->getInfokedongdong();
    echo '<hr>';
    echo "Info Buah : <br>";
    echo '<hr>';
    $Kelengkeng->getInfoKelengkeng();
    echo '<hr>';
    echo "Info Buah : <br>";
    echo '<hr>';
    $Jambu->getInfoJambu();
    echo '<hr>';

?>

