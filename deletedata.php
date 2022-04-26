<?php
    
    include_once("koneksidb.php");
    $kodebaju = "A1";
    $sql = "DELETE FROM stok WHERE KODE_BAJU='$kodebaju';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Penghapusan Data Sukses";
    }else{
        echo "Proses Penghapusan Data Bermasalah";
    }