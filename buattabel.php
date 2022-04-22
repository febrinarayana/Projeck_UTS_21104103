<?php
/*
Nama tabel adalah stok yang berisi Jenis baju, Ukuran, Warna, Harga, Jumlah, Waktu restok date

*/
include_once("koneksidb.php");
$sql = "CREATE TABLE stok(
    JENIS_BAJU Varchar(20) PRIMARY KEY,
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
    echo "Pembuatan Tabel Gagal";
}