<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memasukan Data ke Tabel Stok  </title>
</head>
<body>
    
    <form method="POST" action="insertdatadenganform.php">
        KODE BAJU <br>
        <input type="text" name="txKODE"><br>
        JENIS BAJU <br>
        <input type="text" name="txJENIS"><br>
        UKURAN<br>
        <select name="txUKR">
            <option value="S"> S </option>
            <option value="M"> M </option>
            <option value="L"> L </option>
            <option value="XL"> XL </option>
            <option value="XXL"> XXL </option>
            <option value="XXXL"> XXXL </option>
        </select><br>
        WARNA<br>
        <input type="text" name="txWARNA"><br>
        HARGA<br>
        <input type="text" name="txHARGA"><br>
        JUMLAH<br>
        <input type="text" name="txJUMLAH"><br>
        WAKTU RESTOK<br>
        <input type="date" name="dtWR"><br>
        <br><br>
        <button type=submit> Simpan Data </button>
    </form>
</body>
</html>