<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3 style="text-align:center" class="mt-5">DATA PELANGGAN</h3> <br> <br>
        <table cellpadding ="10" cellspacing="0" class= "table table-striped">
            <tr>
                <th width="50px" class="text-center">id_pembeli</th>
                <th width="200px" class="text-center">nama_pembeli</th>
                <th width="200px" class="text-center">alamat</th>
                <th width="200px" class="text-center">jenis_kelamin</th>
                <th width="200px" class="text-center">nomor_hp</th>
                <th width="200px" class="text-center">aksi</th>
            </tr>

            <?php
                include('connect.php');

                $data_pembeli = mysqli_query($conn, "SELECT * FROM pembeli");

                while($pembeli = mysqli_fetch_array($data_pembeli)){

            ?>

            <tr>
                <td class="text-center"> <?php echo $pembeli['id_pembeli'] ?></td>
                <td class="text-center"> <?php echo $pembeli['nama_pembeli'] ?></td>
                <td class="text-center"> <?php echo $pembeli['alamat'] ?></td>
                <td class="text-center"> <?php echo $pembeli['jenis_kelamin'] ?></td>
                <td class="text-center"> <?php echo $pembeli['no_telepon'] ?></td>
                <td>
                    <button class="btn btn-primary btn-lg"  >edit</button>
                    <button class="btn btn-danger btn-lg" text-center >delete</button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
   
</body>

</html>