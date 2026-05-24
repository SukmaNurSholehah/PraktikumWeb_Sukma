<?php

$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$dir = "gambar/";
$upload = $dir.$_FILES['foto']['name'];
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
    $kirim = move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
if($kirim){
    echo "File berhasil diupload folder <br>$upload</br>";
}else{
    echo "File gagal diupload";
    echo "error : ".$_FILES['foto']['error'];
    }
}

echo "Nama : " . $nama . "<br>";
echo "Tempat Lahir : " . $tempat . "<br>";
echo "Tanggal Lahir : " . $tgl . "<br>";
echo "Jenis Kelamin : " . $jk . "<br>";
echo "Agama : " . $agama . "<br>";
echo "Alamat : " . $alamat . "<br>";

echo "Hobi : <br>";

if(isset($_POST['hobi1'])){
    echo "- " . $_POST['hobi1'] . "<br>";
}

if(isset($_POST['hobi2'])){
    echo "- " . $_POST['hobi2'] . "<br>";
}

if(isset($_POST['hobi3'])){
    echo "- " . $_POST['hobi3'] . "<br>";
}

if(isset($_POST['hobi4'])){
    echo "- " . $_POST['hobi4'] . "<br>";
}

echo "<br>Foto : <br>";
echo "<img src='$upload' width='200'>";
?>