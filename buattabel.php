<?php
/*
Nama tabel adalah stok yang berisi Jenis baju, Ukuran, Warna, Harga, Jumlah, Waktu restok.

*/
include_once("koneksidb.php");
$sql = "CREATE TABLE stok(
    KODE_BAJU Varchar (5) PRIMARY KEY,
    JENIS_BAJU Varchar(20),
    UKURAN Varchar(5),
    WARNA Varchar(20),
    HARGA Varchar (20),
    JUMLAH Integer (5),
    WAKTU_RESTOK Varchar(10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan Tabel Sukses";
}else{
    echo "Pembuatan Tabel Bermasalah";
}