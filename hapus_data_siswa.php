<?php

$koneksi = mysqli_connect("localhost" , "root" , "" , "perpustakaan");

$id = $_GET["id"];

$query = mysqli_query($koneksi, "DELETE FROM datasiswa where id=$id");

//var_dump($query);7

if($query > 0)
{
    echo
    "
    <script>
        alert('Data Berhasil Dihapus, Kapok!');
        document.location.href = 'data_siswa.php';
    </script>
    ";
}





?>