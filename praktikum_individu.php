<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header, h1{
        text-align: center;
        color: black;
        padding-top: 3px;
        padding-bottom: 5px;
        
    }
    .header {
        background-color : yellow;
        height : 50px;
        margin-bottom : 20px;
    }
    table{
        text-align: center;
        border-collapse: collapse;
        width: 100%;
    }
    
</style>
<body>
    <div class="header">
        <h3>DAFTAR NILAI</h3>
    </div>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>

        <?php
        $json_string = file_get_contents('data.json');
        $json = json_decode($json_string, true);

        foreach($json as $data){
            $tanggal_lahir = new DateTime($data['tanggal_lahir']);
            $today = new DateTime();
            $umur = $tanggal_lahir->diff($today);
            $umur_str = $umur->format('%y tahun %m bulan %d hari');
            $umur_str = str_replace('tahun', 'thn', $umur_str);
            $umur_str = str_replace('bulan', 'bln', $umur_str);
            $umur_str = str_replace('hari', 'hr', $umur_str);
            $nilai = $data['nilai'];

            if ($nilai >= 85) {
                $hasil = 'A';
            } elseif ($nilai >= 70) {
                $hasil = 'B';
            } elseif ($nilai >= 60) {
                $hasil = 'C';
            } else {
                $hasil = 'D';
            }
        ?>
        <tr>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["tanggal_lahir"]; ?></td>
            <td><?php echo $umur_str ?></td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["kelas"]; ?></td>
            <td><?php echo $data["nilai"]; ?></td>
            <td><?php echo $hasil?></td>

        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>