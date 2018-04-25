<?php

$conn = new mysqli("127.0.0.1", "root", "", "spk_yaya");

if(isset($_POST['aksi'])&&$_POST['aksi']==="tambah"){
    $query = "INSERT INTO siswa (nama_siswa)VALUES('$_POST[nama_siswa]')";
    $result = $conn->query($query);

    if ($result === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
    
}
if(isset($_POST['aksi'])&&$_POST['aksi']==="edit"){
    $query = "UPDATE penjualan SET kd_barang='$_POST[kd_barang]', tanggal_penjualan='$_POST[tanggal]', jumlah='$_POST[total_penjualan]' WHERE id_penjualan='$_POST[id]'";
    $result = $conn->query($query);

    if ($result === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }

   
    
}
echo "
<script>alert ('Penyimpanan Berhasil')</script>
";

header("Location:/yaya?page=siswa_data");


?>