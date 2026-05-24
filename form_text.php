<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Text</title>
</head>
<body>
    <form enctype="multipart/form-data" action="simpan.php" method="post">
        Nama : <input type="text" name="nama">
        <br>
        Tempat Lahir : <input type="text" name="tempat">
        <br>
        Tanggal Lahir : <input type="date" name="tgl">
        <br>
        Jenis Kelamin : <br>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan <br>
        agama : 
        <select name="agama" id="">
            <option value="islam">Islam</option>
            <option value="kristen">kristen</option>
            <option value="katholik">Katholik</option>
            <option value="buddha">Buddha</option>
            <option value="hindu">Hindu</option>
            <option value="khonghucu">Khonghucu</option>
        </select><br><br>
        alamat : <textarea name="alamat" id=""></textarea><br><br>
        hobi : <br>
        <input type="checkbox" name="hobi1" id="" value="berenang"> Berenang <br>
        <input type="checkbox" name="hobi2" id="" value="memasak"> Memasak <br>
        <input type="checkbox" name="hobi3" id="" value="makan"> Makan <br>
        <input type="checkbox" name="hobi4" id="" value="tidur"> Tidur <br><br>
        Masukkan Foto : <input type="file" name="foto"><br>
        <input type="submit" value="Kirim">
    </form>
    
</body>
</html>