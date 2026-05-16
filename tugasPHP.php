<?php
// SOAL 1 : Saldo tabungan
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

// SOAL 2 : Kerucut
$r = 7;
$s = 10;
$phi = 3.14;

$luasAlas = $phi * $r * $r;
$luasPermukaan = ($phi * $r * $r) + ($phi * $r * $s);

// OUTPUT
echo "<h3>Perhitungan Saldo Tabungan</h3>";
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",-";

echo "<hr>";

echo "<h3>Perhitungan Kerucut</h3>";
echo "Jari-jari : ".$r."<br>";
echo "Garis pelukis : ".$s."<br>";
echo "Luas alas kerucut = ".$luasAlas."<br>";
echo "Luas permukaan kerucut = ".$luasPermukaan;
?>