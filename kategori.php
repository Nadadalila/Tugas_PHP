<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>PERHITUNGAN BMI</title>
</head>
<body>
    <!--MEMBUAT FORM INPUT -->
<div class="container d-flex justify-content-center">
        <div class="card mt-4" style="width:18rem">
            <div class="card-header" >Kalkulator BMI </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="" class="form-control form-control-sm" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan (Cm)</label>
                        <input type="number" class="form-control form-control-sm" name="tb" required>
                    </div>
                    <div class="form-group">
                        <label>Berat Badan (Kg)</label>
                        <input type="number" class="form-control form-control-sm" name="bb" required>
                    </div> <br>
                    <button type="submit" name="proses" class="btn btn-primary btn-sm">Hitung</button>
                </form>
            </div>

            <?php 
            /** MEMBUAT INISIALISASI FUNGSI */
                if(isset($_GET['proses'])){
                    $tbp = $_GET['tb'];
                    $bb = $_GET['bb'];
                    $nama = $_GET['nama'];

                    $tb = $tbp/100;
                    /** MENGHITUNG TINGGI BADAN DENGAN SATUAN METER */
                    $hitung = $bb / ($tb * $tb);
                    /** MENGHITUNG NILAI BMI */
                    if($hitung <= 18.4){
                        echo'
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Hallo '.$nama.' <br>
                            Tinggi Badan: '.$tbp.' Cm<br>
                            Berat Badan : '.$bb.' Kg<br>
                            Nilai BMI anda adalah '.number_format($hitung,1).'<br>
                            Anda termasuk Kurus
                        </div>
                        ';
                    }elseif($hitung <= 25){
                        echo'
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Hallo '.$nama.' <br>
                            Tinggi Badan: '.$tbp.' Cm<br>
                            Berat Badan : '.$bb.' Kg<br>
                            Nilai BMI anda adalah '.number_format($hitung,1).'<br>
                            Anda termasuk Normal
                        </div>
                        ';
                    }elseif($hitung <= 27){
                        echo'
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Hallo '.$nama.' <br>
                            Tinggi Badan: '.$tbp.' Cm<br>
                            Berat Badan : '.$bb.' Kg<br>
                            Nilai BMI anda adalah '.number_format($hitung,1).'<br>
                            Anda termasuk Gemuk
                        </div>
                        ';
                    }elseif($hitung > 27 ){
                        echo'
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Hallo '.$nama.' <br>
                            Tinggi Badan: '.$tbp.' Cm<br>
                            Berat Badan : '.$bb.' Kg<br>
                            Nilai BMI anda adalah '.number_format($hitung,1).'<br>
                            Anda termasuk Obesitas
                        </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>