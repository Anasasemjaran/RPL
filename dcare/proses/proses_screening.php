<?php
// proses/proses_screening.php
session_start();
include '../koneksi.php'; // Memanggil koneksi database

// Pastikan data dikirim dari form
if (isset($_POST['submit_screening'])) {
    
    // 1. Tangkap data dari form (Pastikan atribut 'name' di form HTML sesuai)
    $usia = (int)$_POST['usia'];
    $riwayat_keluarga = $_POST['riwayat_keluarga']; // 'ya' atau 'tidak'
    $polidipsia = $_POST['polidipsia'];
    $poliuria = $_POST['poliuria'];
    $polifagia = $_POST['polifagia'];
    $kesemutan = $_POST['kesemutan'];
    $luka_lama = $_POST['luka_lama'];
    
    // Asumsi user sudah login dan ID-nya disimpan di session
    // $id_user = $_SESSION['id_user']; 
    $id_user = 1; // Hapus baris ini jika fitur login sudah berjalan dan gunakan session

    // 2. Logika Penghitungan Skor
    $skor = 0;

    if ($riwayat_keluarga === 'ya') $skor += 20;
    if ($polidipsia === 'ya') $skor += 15;
    if ($poliuria === 'ya') $skor += 15;
    if ($polifagia === 'ya') $skor += 15;
    if ($kesemutan === 'ya') $skor += 15;
    if ($luka_lama === 'ya') $skor += 20;

    if ($usia >= 45) {
        $skor += 10;
    }

    if ($skor > 100) $skor = 100;

    // 3. Tentukan Status Risiko
    $status_risiko = 'Rendah';
    if ($skor >= 40 && $skor < 70) {
        $status_risiko = 'Sedang';
    } elseif ($skor >= 70) {
        $status_risiko = 'Tinggi';
    }

    $hasil_akhir = $status_risiko . ' (' . $skor . '%)';
    $tanggal = date('Y-m-d');

    // 4. Simpan ke Database
    // Catatan: Pastikan kolom di tabel screening_diabetes disesuaikan
    $sql = "INSERT INTO screening_diabetes (id_user, usia, riwayat_keluarga, hasil_screening, tanggal_screening) 
            VALUES ('$id_user', '$usia', '$riwayat_keluarga', '$hasil_akhir', '$tanggal')";

    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, arahkan (redirect) ke halaman hasil analisis dan kirim data skor
        header("Location: ../index.php?page=hasilAnalisis&skor=$skor&status=$status_risiko");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // Jika file ini diakses langsung tanpa lewat form
    header("Location: ../index.php");
}
?>
