<?php

    include_once("koneksidb.php");
    $kodebaju = "A1";
    $ukuranbaru = "M";
    $sql = "UPDATE stok SET UKURAN='$ukuranbaru' WHERE KODE_BAJU='$kodebaju';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Pembaruan Data Sukses";
    }else{
        echo "Proses Pembaruan Data Bermasalah";
    }