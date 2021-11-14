<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" conten="width=device-width,
    initial-scale=1.0">
    <title>output</title>
</head>

<style>
    fieldset {
        width: 30% ;
        margin: 20px auto;
        border-radius: 5px;
    }
    select{
        width: 100%;
    }
</style>

<body>
    <fieldset>
        <legend>output transaksi</legend>
        <table>
           
            <tr>
                <th align="left">Nama Pembeli</th>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Nomer HP</th>
                <td>:</td>
                <td>
                    <?= $nhp; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Merek Sepatu</th>
                <td>:</td>
                <td>
                <?= $merek; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Ukuran Sepatu</th>
                <td>:</td>
                <td>
                   <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Harga</th>
                <td>:</td>
                <td>
                   <?= $harga; ?>
                </td>
            </tr>
            
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <a href="<?= base_url('review'); ?>">Kembali</a>
                </td>
        </table>
    </fieldset>
</body>