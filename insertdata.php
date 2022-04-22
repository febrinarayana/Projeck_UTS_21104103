<?php
    include_once ("koneksidb.php");
    $jenisbaju ="lengan panjang";
    $ukuran = "l";
    $warna = "hitam";
    $harga = "125.000";
    $jumlah = "45";
    $restok = "20022-04-20";

    $sql = "INSERT INTO stok(JENIS_BAJU,UKURAN,WARNA,HARGA,JUMLAH,WAKTU_RESTOK) Values('$jenisbaju','$ukuran','$warna','$harga','$jumlah','$restok');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel stok Berhasil<br>";
    }else{
        echo "inser Data Pada Tabel stok Gagal<br>";
    }
