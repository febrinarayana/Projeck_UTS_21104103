<?php
    if(isset($_POST['txKODE'])){
    include_once ("koneksidb.php");
    $kodebaju =$_POST['txKODE'];
    $jenisbaju =$_POST["txJENIS"];
    $ukuran =$_POST["txUKR"];
    $warna = $_POST["txWARNA"];
    $harga = $_POST["txHARGA"];
    $jumlah = $_POST["txJUMLAH"];
    $restok = $_POST["dtWR"];

    $sql = "INSERT INTO stok(KODE_BAJU,JENIS_BAJU,UKURAN,WARNA,HARGA,JUMLAH,WAKTU_RESTOK) Values('$kodebaju','$jenisbaju','$ukuran','$warna','$harga','$jumlah','$restok');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel Stok Sukses";
    }else{
        echo "Insert Data Pada Tabel Stok Bermasalah";
    }
}else{
    header("location:insertdatastok.php");
}

