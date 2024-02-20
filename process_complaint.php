<?php
// Koneksi ke database
include 'database.php';

$aksi = isset($_GET['action']) ? $_GET['action'] : ''; #Baris ini bertanggung jawab untuk mengambil nilai parameter action dari URL. Jika action tidak diberikan dalam URL, maka variabel $aksi akan diisi dengan string kosong.

// Jika aksi adalah tambah
if ($aksi == 'tambah') {
// Tangkap data yang dikirimkan dari form
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$kontak = isset($_POST['kontak']) ? $_POST['kontak'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';      

// Masukkan data pengaduan ke dalam database
$sql = "INSERT INTO laporan (nama, kontak, email, alamat, keterangan) VALUES ('$nama', '$kontak', '$email', '$alamat', '$keterangan')";
if (mysqli_query($connection, $sql)) {
    header("Location: index.php"); // Redirect ke halaman utama setelah penyimpanan berhasil
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
}

// Tutup koneksi database
mysqli_close($connection);
?>
