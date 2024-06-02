<?php

// Inisialisasi variabel
$var1 = 0;
$var2 = "Hello";

// Pengkondisian if-else
if ($var1 == 0) {
    // Jika kondisi benar
    echo "Variabel var1 bernilai 0 <br>";
} else {
    // Jika kondisi salah
    echo "Variabel var1 tidak bernilai 0 <br>";
}

// Perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Iterasi ke-$i <br>";
}

// Perulangan while
$j = 0;
while ($j < 3) {
    echo "Iterasi while ke-$j <br>";
    $j++;
}

// Perulangan do-while
$k = 0;
do {
    echo "Iterasi do-while ke-$k <br>";
    $k++;
} while ($k < 3);

// Array
$buah = array("Apel", "Jeruk", "Pisang");
foreach ($buah as $item) {
    echo "Saya suka makan $item <br>";
}

// Fungsi
function tambah($a, $b) {
    return $a + $b;
}

// Memanggil fungsi
$hasil = tambah(3, 5);
echo "Hasil penjumlahan: $hasil";

?>