<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Hobi & Orang</title>
</head>
<body bgcolor="lightblue">

<?php
require 'koneksi.php';

//ambil data dari hobi
$person = query("SELECT * FROM person");
$hobi = query("SELECT * FROM hobi");

?>

<h3 align="center"> Data Hobi berdasarkan jumlah orang</h3>
    <table border="1" cellpadding="10" cellspacing="0" align="center" width="70%">
        <tr>
            <th>No</th>
            <th>Hobi</th>
            <th>Jumlah Person</th>
        </tr>

        <?php $No=1; ?>
        <tr>
            <td><?= $No; ?></td>
            <td></td>
            <td></td>
        <?php $No++; ?>

    </table>

<h3 align="center"> Data Hobi </h3>
    <table border="1" cellpadding="10" cellspacing="0" align="center" width="70%">
        <tr>
            <th>Id</th>
            <th>Person Id</th>
            <th>Hobby</th>
        </tr>

        <?php foreach( $hobi as $row):?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["person_id"]; ?></td>
            <td><?= $row["hobi"]; ?></td>
        <?php endforeach; ?>

    </table>

    <h3 align="center"> Data Person </h3>
    <table border="1" cellpadding="10" cellspacing="0" align="center" width="70%">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <?php foreach( $person as $rowperson):?>
        <tr>
            <td><?= $rowperson["id"]; ?></td>
            <td><?= $rowperson["nama"]; ?></td>
            <td><?= $rowperson["alamat"]; ?></td>
        <?php endforeach; ?>

    </table>
    
</body>
</html>