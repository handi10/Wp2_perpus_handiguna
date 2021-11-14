<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" conten="width=device-width,
    initial-scale=1.0">
    <title>input</title>
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
        <legend>Input transaksi</legend>
        <form method="POST">
        <table>
            
            <tr>
                <th align="left">Nama Pembeli</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                    <?= form_error('nama', '<br><span style="color:red;"
                    >', '</span>'); ?>
                </td>
            </tr>
            <tr>
                <th align="left">Nomer HP</th>
                <td>:</td>
                <td>
                    <input type="text" name="nhp" id="nhp">
                    <?= form_error('nhp', '<br><span style="color:red;"
                    >', '</span>'); ?>
                </td>
            </tr>
            <tr>
                <th align="left">Merek Sepatu</th>
                <td>:</td>
                <td>
                    <select name="merek"  id="merek">
                        <option>-- PILIH --</option>
                        <?php foreach($merek as $m) : ?>
                            <option value="<?= $m; ?>"><?= $m; ?></option>
                            <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th align="left">Ukuran Sepatu</th>
                <td>:</td>
                <td>
                    <select name="ukuran"  id="ukuran">
                        <option>-- PILIH --</option>
                        <?php for($i = 32; $i <= 44; $i ++) : ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <button type="submit">Simpan</button>
                </td>
        </table>
        </form>   
    </fieldset>
</body>