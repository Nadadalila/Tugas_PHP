<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>MENGHITUNG KATEGORI NILAI</title>
</head>
<body>
<div class="container d-flex justify-content-center">
        <div class="card mt-4" style="width:18rem">
            <div class="card-header" >Kalalkulator Nilai </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="" class="form-control form-control-sm" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="number" class="form-control form-control-sm" name="Nilai" required>
                    </div> <br>
                    <button type="submit" name="proses" class="btn btn-primary btn-sm">Hitung</button>
                </form>
            </div>
            <?php
            if(isset($_POST['proses'])){ 
                $nama = $_POST ['nama'];
                $nilai = $_POST['Nilai'];

                switch($nilai){
                    case (($nilai >= 91) && ($nilai <=100));
                    echo'
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hallo '.$nama.' <br>
                        Kategori nilai anda adalah A
                    </div>
                    ';
                    break;
                    case (($nilai >= 81) && ($nilai <=90));
                    echo'
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hallo '.$nama.' <br>
                        Kategori nilai anda adalah B
                    </div>
                    ';
                    break;
                    case (($nilai >= 71) && ($nilai <=80));
                    echo'
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hallo '.$nama.' <br>
                        Kategori nilai anda adalah C
                    </div>
                    ';
                    break;
                    case (($nilai <= 70) && ($nilai >=0));
                    echo'
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hallo '.$nama.' <br>
                        Kategori nilai anda adalah D
                    </div>
                    ';
                    break;
                }
            }
        ?>
    </div>
</div>
</body>
</html>