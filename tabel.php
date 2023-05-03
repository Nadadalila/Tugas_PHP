<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th{
            background-color: blue; 
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td>
                <?php
                for ($a=1; $a<=10; $a++){
                    echo "$a <br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($b=1; $b<=10; $b++){
                    echo "Nama Ke $b <br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($c=10; $c>=1; $c--){
                    echo "Kelas $c <br>";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>