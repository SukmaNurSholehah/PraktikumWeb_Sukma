<?php

#fungsi array 1: array_search
echo "<strong>Fungsi 1 array_search (mencari nilai array yang ingin kita cari menghasilkan nilai posisi index) : </strong> <br>";

echo "Nama kartun populer : <br>";
$kartun = array("Doraemon", "Naruto", "SpongeBob", "Upin Ipin", "Shinchan");

foreach ($kartun as $value) {
    echo "$value<br>";
}

$cari = array_search("SpongeBob", $kartun);
echo "Kartun SpongeBob ada di index: " . $cari;

$cari = array_search("Shinchan", $kartun);
echo "<br>Kartun Shinchan ada di index: " . $cari;

echo "<br><br>";



#fungsi array 2: array_slice
echo "<strong>Fungsi 2 array_slice (memotong nilai array yang ingin kita tampilkan) : </strong> <br>";

$episode = [1, 2, 3, 4, 5, 6, 7, 8];

echo "Array sebelum array_slice : <br>";
foreach ($episode as $value) {
    echo "$value ";
}

$ambil_array = array_slice($episode, 2 ,3);

echo "<br>Array setelah array_slice : <br>";
foreach ($ambil_array as $value) {
    echo "$value ";
}

echo "<br><br>";



#fungsi array 3: array_splice
echo "<strong>Fungsi 3 array_splice (mengganti nilai array yang kita inginkan) : </strong> <br>";

$rating = [10, 20, 30, 40, 50];

echo "Array sebelum array_splice : <br>";
foreach ($rating as $value) {
    echo "$value ";
}

echo "<br>Array setelah array_splice : <br>";

array_splice($rating, 1, 1, 100);

foreach ($rating as $value) {
    echo "$value ";
}

echo "<br><br>";



#fungsi array 4: array_unique
echo "<strong>Fungsi 4 array_unique (menghapus nilai array yang duplikat) : </strong> <br>";

$array_duplikat = ["Naruto", "Doraemon", "Naruto", "Shinchan", "Doraemon"];

echo "Array sebelum array_unique : <br>";
foreach ($array_duplikat as $value) {
    echo "$value ";
}

echo "<br>Array setelah array_unique : <br>";

$nilai_unik = array_unique($array_duplikat);

foreach ($nilai_unik as $value) {
    echo "$value ";
}

echo "<br><br>";



#fungsi array 5: array_values
echo "<strong>Fungsi 5 array_values (mengambil nilai value array tanpa menampilkan key) : </strong> <br>";

$array_val = [
    "Kartun1" => "Doraemon",
    "Kartun2" => "Naruto",
    "Kartun3" => "SpongeBob",
    "Kartun4" => "Shinchan"
];

echo "Array sebelum array_values : <br>";

foreach ($array_val as $key => $value) {
    echo "$key => $value <br>";
}

$nilai = array_values($array_val);

echo "<br>Array setelah array_values : <br>";

foreach ($nilai as $value) {
    echo "$value <br>";
}

?>