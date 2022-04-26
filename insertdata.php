<?php
    include_once ("koneksidb.php");
    $kodebaju ="A1";
    $jenisbaju ="lengan panjang";
    $ukuran = "l";
    $warna = "hitam";
    $harga = "125.000";
    $jumlah = "45";
    $restok = "20022-04-20";

    $sql = "INSERT INTO stok(KODE_BAJU,JENIS_BAJU,UKURAN,WARNA,HARGA,JUMLAH,WAKTU_RESTOK) Values('$kodebaju','$jenisbaju','$ukuran','$warna','$harga','$jumlah','$restok');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel Stok Sukses";
    }else{
        echo "Inser Data Pada Tabel Stok Bermasalah";
    }
