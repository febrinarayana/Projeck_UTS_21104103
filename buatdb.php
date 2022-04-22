<?php
/*
Nama database adalah stok_baju
*/
include_once("koneksidb.php");
$sql = "CREATE DATABASE stok_baju;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan database sukses";
}else{
    echo "Pembuatan database bermasalah";
}
mysqli_close($cnn);