<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <title>Document</title>

</head>
<style>
    .header, h3{
        text-align: center;
        color: black;
        
    }
    .header {
        background-color : yellow;
        height : 40px;
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <h3 style="text-align:center" class="mt-5">DATA PELANGGAN TOKO KUE</h3> <br> <br>
        </div>

        <a href="create.php" class="btn btn-primary lg mb-4" >Create</a>

        <table cellpadding ="10" cellspacing="0" class= "table table-striped" id="example">
            <thead>
                <tr>
                    <th width="50px" class="text-center">id_pembeli</th>
                    <th width="200px" class="text-center">nama_pembeli</th>
                    <th width="200px" class="text-center">alamat</th>
                    <th width="200px" class="text-center">jenis_kelamin</th>
                    <th width="200px" class="text-center">no_telepon</th>
                    <th width="200px" class="text-center">aksi</th>
                </tr>
            </thead>

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
                    <a class="btn btn-primary btn-lg" href="edit.php?id_pembeli=<?php echo $pembeli['id_pembeli'] ?>">edit</a>
                    <a class="btn btn-danger btn-lg" href="delete.php?id_pembeli=<?php echo $pembeli['id_pembeli'] ?>" >delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
   
</body>

</html>