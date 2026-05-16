<?php
echo "1. Bilangan kelipatan 10 dari 5 sampai 100 : <br>";
$bil = 5;
while ($bil <= 100) {
    if ($bil % 10 == 0) {
        echo $bil . " ";
    }
    $bil++;
}
echo "<br><br>2. Jumlah bilangan dari 2 sampai 50 : <br>";
$bil = 2;
$total = 0; 
while ($bil <= 50) {
    $sebelumnya = $total; 
    $total = $total + $bil; 
    echo "$sebelumnya + $bil = $total <br>";
    $bil++;
}
    
echo "<br>3. Banyak bilangan kelipatan 6 dari 3 sampai 127 : <br>";
$bil = 3;
$banyak = 0;
while ($bil <= 127) {
    if ($bil % 6 == 0) {
        $banyak++;
        echo "Kelipatan ke-$banyak = $bil <br>";
    }
    $bil++;
}
echo "<br>Total banyak bilangan kelipatan 6 = $banyak";
?>