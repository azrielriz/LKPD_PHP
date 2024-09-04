<?php
$jamkerja = 8;
$lamakerja = 9;
$jamlebih = $lamakerja - $jamkerja;
$bonus = $jamlebih * 25000;
$hasil = $bonus + 25000;
echo "Lama kerja: " . $lamakerja . "<br>";
echo "Jam kerja: " . $jamkerja . "<br>";
echo "Jam lebih: " . $jamlebih . "<br>";
echo "Bonus: Rp" . $hasil . "<br>";

?>