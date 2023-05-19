<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<?php
include('connect.php');

$id_pembeli = $_GET['id_pembeli'];

$data_pembeli = mysqli_query($conn, "SELECT * FROM pembeli WHERE id_pembeli = '$id_pembeli'");

while($pembeli = mysqli_fetch_array($data_pembeli)){
    $nama_pembeli = $pembeli ['nama_pembeli'];
    $alamat = $pembeli ['alamat'];
    $jenis_kelamin = $pembeli ['jenis_kelamin'];
    $no_telepon = $pembeli ['no_telepon'];
}
?>
<body>
    <form action="process_edit.php? id_pembeli=<?php echo $id_pembeli?>" method="post">
    <table cellpadding ="10" cellspacing="0" class= "table table-striped">
        <tr>
            <td>ID Pembeli</td>
            <td><input type="text" name="id_pembeli" value="<?php echo $id_pembeli?>"></td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td><input type="text" name="nama_pembeli" value="<?php echo $nama_pembeli?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td><input type="number" name="no_telepon" value="<?php echo $no_telepon?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="Submit" name="Submit" class="btn btn-primary"  value="edit"></td>
        </tr>
    </table>
    </form>
</body>
</html>