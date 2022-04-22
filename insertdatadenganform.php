<?php
    if(isset($_POST['txJENIS'])){
    include_once ("koneksidb.php");
    $jenisbaju =$_POST['txJENIS'];
    $ukuran =$_POST['txUKR'];
    $warna = $_POST["txWARNA"];
    $harga = $_POST["txHARGA"];
    $jumlah = $_POST["txJUMLAH"];
    $restok = $_POST["dtWR"];

    $sql = "INSERT INTO stok(JENIS_BAJU,UKURAN,WARNA,HARGA,JUMLAH,WAKTU_RESTOK) Values('$jenisbaju','$ukuran','$warna','$harga','$jumlah','$restok');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel Stok Berhasil<br>";
    }else{
        echo "Insert Data Pada Tabel Stok Gagal<br>";
    }
}else{
    header("location : insertdatastok.php");
}

