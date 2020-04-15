<?php

$koneksi = mysqli_connect("localhost" , "root" , "" , "perpustakaan");

$id = $_GET["id"];

$query = mysqli_query($koneksi, "SELECT * FROM databuku where id=$id");

$buku = mysqli_fetch_assoc($query);


if (isset($_POST["submit"]))
{
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $kategori= $_POST["kategori"];

    $query =("UPDATE databuku SET id = '$id', judul = '$judul', pengarang = '$pengarang', kategori = '$kategori' WHERE id=$id");

    $buku =  mysqli_query($koneksi,$query);

    var_dump($buku);

    if ($buku>0)
         {
             echo 
            "
             <script>
                 alert('Data Berhasil Dirubah');
                 document.location.href='data_buku.php';
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
                <input name="id" type="text" value="<?= $buku["id"] ?>" class="form-control" placeholder="id" aria-label="id" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>
            </tr>

            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Judul</span>
                </div>
                <input name="judul" type="text" value="<?= $buku["judul"] ?>" class="form-control" placeholder="judul" aria-label="judul" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Pengarang</span>
                </div>
                <input name="pengarang" type="text" value="<?= $buku["pengarang"] ?>" class="form-control" placeholder="pengarang" aria-label="pengarang" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Kategori</span>
                </div>
                <input name="kategori" type="text" value="<?= $buku["kategori"] ?>" class="form-control" placeholder="kategori" aria-label="kategori" aria-describedby="basic-addon1" required>
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
