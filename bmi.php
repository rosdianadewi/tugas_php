<?php

// Fungsi untuk menghitung BMI
function hitungBMI($berat, $tinggi)
{
    // Mengonversi tinggi dari cm menjadi meter
    $tinggi_meter = $tinggi / 100;

    // Menghitung BMI
    $bmi = $berat / ($tinggi_meter * $tinggi_meter);

    // Mengembalikan nilai BMI
    return $bmi;
}

// Inisialisasi variabel berat (kg) dan tinggi (cm)
$berat = 65;
$tinggi = 170;

// Memanggil fungsi hitungBMI
$bmi = hitungBMI($berat, $tinggi);

// Menampilkan hasil BMI
echo "BMI Anda: " . number_format($bmi, 2) . "<br>";

// Evaluasi BMI menggunakan kondisional if-else
if ($bmi < 18.5) {
    echo "Berat badan kurang, Anda kurang gizi.";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    echo "Berat badan normal, Anda sehat.";
} elseif ($bmi >= 24.9 && $bmi < 29.9) {
    echo "Berat badan berlebih, Anda kelebihan berat badan.";
} else {
    echo "Obesitas, Anda memerlukan perhatian medis.";
}

?>