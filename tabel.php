<!DOCTYPE html>
<html>
<body>
<?php
$buah = array("Jeruk", "Apel", "Kelengkeng", "Mangga", "Semangka"); 
$warna = array("orange", "merah", "coklat", "hijau", "merah"); 
$rasa = array("masam", "masam", "manis", "manis", "manis");

echo "<table border='1'>";

// Menambahkan baris di atas dengan judul kolom
echo "<tr><th>Nama Buah</th><th>Warna Buah</th><th>Rasa</th></tr>";

for($i = 0; $i < count($buah); $i++) {
    echo "<tr><td>" . $buah[$i] . "</td><td>" . $warna[$i] . "</td><td>" . $rasa[$i] . "</td></tr>";
}

echo "</table>";
?>
</body>
</html>
