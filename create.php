<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form id="form_pembeli" action="process.php" method="post">
    <table cellpadding ="10" cellspacing="0" class= "table table-striped">
        <tr>
            <td>ID Pembeli</td>
            <td><input id="input_id" type="text" name="id_pembeli"><p id="text-error-name"></p> </td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td><input id="input_nama"  type="text" name="nama_pembeli"><p id="text-error-name"></p></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input id="input_alamat" type="text" name="alamat"><p id="text-error-name"></p></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin" id="input_kelamin">
                    <option value="Laki-Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td><input id="input_telepon" type="number" name="no_telepon"><p id="text-error-name"></p></td>
        </tr>
        <tr>
            <td></td>
            <td><button id="my-button" type="button" class="btn btn-primary">Save</button></td>
        </tr>
    </table>
    </form>
</body>
</html>

<script>
    $('#my-button').click(function(){
		if ($('#input_id').val().length == 0 || $('#input_nama').val().length == 0 || $('#input_alamat').val().length == 0 ||  $('#input_telepon').val().length == 0){
			$('#input_id, #input_nama, #input_alamat, #input_telepon').css({"backgroundColor" : "red"});
			$('#text-error-id, #text-error-name, #text-error-alamat, #text-error-telepon').text('Silahkan isi terlebih dahulu');
		} else{
            $('#form_pembeli').submit();
        }
    });
</script>