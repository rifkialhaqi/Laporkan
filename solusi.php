<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solusi Pengaduan</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
}

.container {
  max-width: 1300px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
}

.table-container {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

table th {
  background-color: #f2f2f2;
}

table td.keterangan {
  white-space: pre-line;
  margin-bottom: 20px;
  word-wrap: break-word;
}

.button-container {
  text-align: center;
  margin-top: 20px; /* Jarak dari atas */
}
.button-container button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}
.button-container button:hover {
  background-color: #0056b3;
}

</style>
  <div class="container">
    <h2>Solusi Pengaduan</h2>
    <div class="table-container">
      <table border="3">
        <?php
        // Include file koneksi ke database
        include 'database.php';

        // Ambil data dari database
        $sql = "SELECT * FROM laporan";
        $result = mysqli_query($connection, $sql);

        $nomor = 1;

        // Tampilkan data dalam bentuk tabel
        while ($data = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            echo "<th>Nomor</th><td>" . $nomor . "</td>"; // Tampilkan nomor
            echo "</tr>";
            echo "<tr>";
            echo "<th>Nama</th><td>" . $data['nama'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Kontak</th><td>" . $data['kontak'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Email</th><td>" . $data['email'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Alamat</th><td>" . $data['alamat'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Keterangan</th><td class='keterangan'>" . $data['keterangan'] . "</td>"; 
            echo "</tr>";
            echo "<tr>";
            echo "<th>Solusi dan saran dari Piber</th><td>" . $data['solusi'] . "</td>";
            echo "</tr>";
            echo "<tr><td colspan='2'></td></tr>"; // Baris baru di bawah setiap iterasi
            $nomor++;   
        }

        // Tutup koneksi ke database
        mysqli_close($connection);
        ?>
      </table>
      <div class="button-container">
        <a href="index.html">
         <button onclick="">Kembali</button>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
