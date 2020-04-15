<?php

$koneksi = mysqli_connect("localhost" , "root" , "" , "perpustakaan");

$id = $_GET["id"];

$query = mysqli_query($koneksi, "SELECT * FROM datasiswa where id=$id");

$siswa = mysqli_fetch_assoc($query);


if (isset($_POST["submit"]))
{
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $kelas = $_POST["kelas"];
    $jurusan= $_POST["jurusan"];
    $email = $_POST["email"];

    $query =("UPDATE datasiswa SET id = '$id', nama = '$nama', nis = '$nis', kelas = '$kelas', jurusan = '$jurusan', email = '$email' WHERE id=$id");   

    $siswa =  mysqli_query($koneksi,$query);

    var_dump($siswa);

    if ($siswa>0)
         {
             echo 
            "
             <script>
                 alert('Data Berhasil Dirubah');
                 document.location.href='data_siswa.php';
            </script>
             ";
         }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data</title>
</head>
<center>
<body>

<br/>
<br/>
<br/>
<br/>
    <h1>Ubah Data Anda</h1>
    <br/>


    <form action="" method="post">
    <table>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">ID</span>
                </div>
                <input name="id" type="text" value="<?= $siswa["id"] ?>" class="form-control" placeholder="id" aria-label="id" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Nama</span>
                </div>
                <input name="nama" type="text" value="<?= $siswa["nama"] ?>" class="form-control" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">NIS</span>
                </div>
                <input name="nis" type="text" value="<?= $siswa["nis"] ?>" class="form-control" placeholder="nis" aria-label="nis" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Kelas</span>
                </div>
                <input name="kelas" type="text" value="<?= $siswa["kelas"] ?>" class="form-control" placeholder="kelas" aria-label="kelas" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Jurusan</span>
                </div>
                <input name="jurusan" type="text" value="<?= $siswa["jurusan"] ?>" class="form-control" placeholder="jurusan" aria-label="jurusan" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input name="email" type="text" value="<?= $siswa["email"] ?>" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr style="text-align:center">
            <td>
                <button type="submit" name="submit" class="btn btn-primary">Ubah Sekarang
                </button>
            </td>
    </table>
    </form>

    
</body>
</center>
</html>
    
</body>
</html>
