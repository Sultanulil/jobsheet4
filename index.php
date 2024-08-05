<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>FAKTORIAL</h2>

<form method="post">
     <input type="number" name="faktorial" required>
     <button type="submit" name="hitung">hitung</button>
</form>

<?php

if(isset($_POST['hitung'])){
    $x = $_POST['faktorialial'];
    echo 'Hasilnya adalah '. faktorialial($x);
}

function faktorialial($x){
$angka = 1;
$faktorial = 1;
while($angka <= $x){
$faktorial = $faktorialial * $angka;
$angka = $angka + 1;
}

return $faktorial;

}



?>












</body>
</html>