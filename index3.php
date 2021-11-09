<?php
    require_once 'No 3.php';
?>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="hai.css">
    <title>Praktikum 4</title>
</head>
<body>
<h2>Soal No 3</h2>
<table align="center">
<!-- itu "yellow" warna tabelnya yg bagian atas, ganti sesuka hati dan jangan lupa kalau udah diganti hapus text ini! -->
<tr align="cemtar" bgcolor="2979ff">
    <td>Objek</td>
    <td>Umur</td>  
    <td>Nama</td>  
    <td>Panjang Ekor</td>  
    <td>Cara Bergerak</td>      
</tr>

<tr>
    <td>01</td>
    <td><?=$katak->getUmur() ?> </td>  
    <td><?=$katak->getnama() ?> </td>  
    <td>-</td>  
    <td><?=$katak->carabergerak() ?> </td>      
</tr>

<tr>
    <td>02</td>
    <td><?=$kecebong->getUmur() ?></td>  
    <td><?=$kecebong->getNama() ?></td>  
    <td><?=$kecebong->getpanjangekor() ?></td>  
    <td><?=$kecebong->carabergerak() ?></td>      
</tr>

</table>
</body>
</html>