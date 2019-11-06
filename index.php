<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <form action="">
    <p>
    <div>NIM :
        <label><input type="text" name="nim" placeholder="Masukan Nim"> </label>
    </div>
    </p>
    <p>
    <div>Nama :
        <label><input type="text" name="nama" placeholder="Masukan Nama"> </label>
    </div>
    </p>
    <p>
    <div>Alamat :
        <label><input type="textare" name="alamat"> </label>
    </div>
    </p>
    <p>
    <label><input type="submit" name="submit" value="Simpan"></label>
    </form>
    </fieldset>
</body>
</html>

<?php

    // Array Index
    $mhs = array();
    $mhs[0] = [123,124,125];
    $mhs[1] = ['Udin', 'Joko', 'Tatang'];
    $mhs[2] = ['Indramayu', 'Lohbener', 'Jatibarang'];

    for ($i=0; $i < 3 ; $i++) { 
        for ($j=0; $j < 3 ; $j++) { 
            echo $mhs[$j][$i]. ' ';
        }
        echo " <br> ";
    }

    // // Array Associative
    $mhsx = array();
    $mhsx['nim'] = [123, 124, 125];
    $mhsx['nama'] = ['Udin', 'Joko', 'Tatang'];
    $mhsx['alamat'] = ['Indramayu', 'Lohbener', 'Jatibarang'];

    echo'<p> Panjang aray adalah ' .$j=sizeof($mhsx).'</p>';

    for ($i=0; $i < sizeof($mhsx) ; $i++) { 
        echo $mhsx['nim'][$i]. ' ';
        echo $mhsx['nama'][$i]. ' ';
        echo $mhsx['alamat'][$i].'<br>';
    }
    // foreach ($mhsx as $m ) {
    //     foreach ($m as $mi ) {
    //         echo "$mi<br>";
    //     }
    //     echo " <br> ";
    // }
?>