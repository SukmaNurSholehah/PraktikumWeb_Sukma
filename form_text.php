<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Input Data</title>

<style>
body{
    margin:0;
    padding:0;
    font-family:"Segoe UI", Arial, sans-serif;
    background:linear-gradient(to right, #eef2f3, #dfe9f3);
}

#box{
    width:700px;
    margin:40px auto;
    background:white;
    border-radius:18px;
    box-shadow:0 10px 30px rgba(0,0,0,0.12);
    overflow:hidden;
}

#header{
    background:linear-gradient(135deg, #667eea, #764ba2);
    color:white;
    text-align:center;
    padding:35px;
}

#header h1{
    margin:0;
    font-size:38px;
}

#konten{
    padding:35px;
}

form{
    line-height:2.2;
}

input[type="text"],
input[type="date"],
select,
textarea,
input[type="file"]{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:10px;
    margin-top:5px;
    margin-bottom:15px;
    font-size:15px;
    box-sizing:border-box;
}

textarea{
    height:100px;
    resize:none;
}

.radio-group,
.checkbox-group{
    margin-bottom:15px;
}

.radio-group input,
.checkbox-group input{
    margin-right:8px;
}

input[type="submit"]{
    background:#667eea;
    color:white;
    border:none;
    padding:12px 25px;
    border-radius:10px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

input[type="submit"]:hover{
    background:#4c63d2;
}

#footer{
    background:#2d3748;
    color:white;
    text-align:center;
    padding:20px;
    font-size:15px;
}
</style>

</head>

<body>

<div id="box">

<div id="header">
    <h1>Form Biodata</h1>
    <p>Input Data Diri Mahasiswa</p>
</div>

<div id="konten">

<form enctype="multipart/form-data" action="simpan.php" method="post">

    Nama :
    <input type="text" name="nama">

    Tempat Lahir :
    <input type="text" name="tempat">

    Tanggal Lahir :
    <input type="date" name="tgl">

    Jenis Kelamin :
    <div class="radio-group">
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan
    </div>

    Agama :
    <select name="agama">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katholik">Katholik</option>
        <option value="buddha">Buddha</option>
        <option value="hindu">Hindu</option>
        <option value="khonghucu">Khonghucu</option>
    </select>

    Alamat :
    <textarea name="alamat"></textarea>

    Hobi :
    <div class="checkbox-group">
        <input type="checkbox" name="hobi1" value="berenang"> Berenang <br>
        <input type="checkbox" name="hobi2" value="memasak"> Memasak <br>
        <input type="checkbox" name="hobi3" value="makan"> Makan <br>
        <input type="checkbox" name="hobi4" value="tidur"> Tidur
    </div>

    Masukkan Foto :
    <input type="file" name="foto">

    <input type="submit" value="Kirim">

</form>

</div>

<div id="footer">
    Web Programming I <br>
    2025
</div>

</div>

</body>
</html>