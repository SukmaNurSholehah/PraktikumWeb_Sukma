<?php 

$buah = array(
    "Apel" => "15000",
    "Mangga" => "12000",
    "Jeruk" => "10000",
    "Semangka" => "25000",
    "Melon" => "30000",
    "Pisang" => "8000",
    "Anggur" => "35000",
    "Pepaya" => "9000"
);

echo "<strong>Tampilan awal array : </strong><br>";
foreach ($buah as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array ascending berdasarkan value : </strong><br>";
asort($buah);
foreach ($buah as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array ascending berdasarkan key: </strong><br>";
ksort($buah);
foreach ($buah as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan value: </strong><br>";
arsort($buah);
foreach ($buah as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan key: </strong><br>";
krsort($buah);
foreach ($buah as $nama => $harga) {
    echo "$nama harga Rp.$harga <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan value: </strong><br>";
rsort($buah);
foreach ($buah as $nama => $harga) {
    echo "Harga buah : Rp.$harga <br>";
}

?>