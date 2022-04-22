<?php
    
    include_once("koneksidb.php");
    $jenisbaju = "kemeja";
    $sql = "DELETE FROM stok WHERE jenis_baju='$jenisbaju';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Penghapusan Data Sukses<br>";
    }else{
        echo "Proses Penghapusan Data Sukses";
    }