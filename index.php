<?php
session_start();

if( ! isset($_SESSION['username']))
{
    header("location:\belajar-login\index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>


    <title>Data</title>
</head>
<center>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"  style="margin:auto">
             <img src="logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
                 <h3> PERPUSTAKAAN SMK TELKOM MALANG</h3>
        </a>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin:auto">
            <li class="nav-item active">
                <a class="nav-link" href="data_buku.php">Data Buku<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="data_siswa.php">Data Siswa<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="data_peminjaman.php">Data Peminjaman<span class="sr-only">(current)</span></a>
            </li>
            <li>
                <button type="button" class="btn btn-outline-danger " ><a href="\belajar-login\"  style="color:    #d60000"> Back To Home</a></button>
            </li>
            </ul>
            

        </div>
        </nav>
    
</body>
</center>
</html>