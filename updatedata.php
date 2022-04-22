<?php

    include_once("koneksidb.php");
    $jenisbaju = "kaos";
    $ukuranbaru = "M";
    $sql = "UPDATE stok SET UKURAN='$ukuranbaru' WHERE jenis_baju='$jenisbaju';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Pembaruan Data Sukses<br>";
    }else{
        echo "Proses Pembaruan Data Sukses";
    }