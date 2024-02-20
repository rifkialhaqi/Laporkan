<?php
// Database connection
$connection = mysqli_connect("localhost", "root", "", "laporkan");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data dari database
$sql = "SELECT * FROM laporan";
$result = mysqli_query($connection, $sql);

// Check if query executed successfully
if (!$result) {
    echo "Error: " . mysqli_error($connection);
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap input dari formulir
    $id_pengaduan = $_POST['id_pengaduan'];
    $new_status = $_POST['new_status'];

    // Perbarui status pengaduan di database
    $update_sql = "UPDATE laporan SET status = '$new_status' WHERE id = $id_pengaduan";
    $update_result = mysqli_query($connection, $update_sql);

    // Periksa keberhasilan pembaruan
    if ($update_result) {
        echo "Status berhasil diperbarui.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pengaduan</title>
</head>
<body>
    <h2>Status Pengaduan</h2>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>email</th>
            <th>alamat</th>
            <th>keterangan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['kontak']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['keterangan']; ?></td>
                <td><?= $data['status']; ?></td>
                <td>
                    <!-- Formulir untuk mengubah status -->
                    
                    <!-- Formulir untuk mengubah status -->
<form action="riwayat_admin.php" method="post">
    <input type="hidden" name="id_pengaduan" value="<?= $data['id']; ?>">
    <input type="text" name="new_status" autocomplete="off" placeholder="Masukkan status baru">
    <button type="submit">Ubah Status</button>
</form>

                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="button-container">
        <a href="index_admin.html">
         <button onclick="">Kembali</button>
        </a>
    </div>
</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($connection);
?>
