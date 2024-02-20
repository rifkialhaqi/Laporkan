<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tambahkan ikon media sosial -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-s+yTf0RAdExLrS4aIh9RgPOTwGPAmFcdlCJXYy4dF71Nlkd2EhCvCP/5VxT3jtbkKcgYFjGxtWi9UdOcHYI0bA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans bg-gray-100">

    <header class="bg-gray-600 text-white py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
            <div class="flex items-center"> <!-- Menggunakan flex items-center -->
                <img src="logo (2).png" alt="Logo" class="h-20 mr-2">
                <h1 class="text-2xl font-bold">LAPORKAN</h1>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index_piber.php" class="hover:underline">Beranda</a></li>
                    <li><a href="laporan.php" class="hover:underline">Pengaduan</a></li>
                    <li><a href="tentang.php" class="hover:underline">Tentang</a></li>
                    <li><button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                           <a href="pilih.php">Login</a>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8">

        <section class="features py-20">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-8">Fitur Layanan Pengaduan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="feature">
                        <i class="fas fa-bullhorn text-3xl mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Pengaduan Baru</h3>
                        <p class="text-gray-700">Lihat laporan terbaru yang telah diajukan oleh masyarakat.</p><br>
                        <a href="laporan.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Laporan masyarakat</a>
                    </div>
                    <div class="feature">
                        <i class="fas fa-history text-3xl mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Pesan Pengaduan</h3>
                        <p class="text-gray-700">Ubah pesan pengaduan masyarakat beserta statusnya.</p><br>
                        <a href="pesan_piber.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Pesan Pengaduan</a>
                    </div>
                    <div class="feature">
                        <i class="fas fa-info-circle text-3xl mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Solusi dan Tanggapan</h3>
                        <p class="text-gray-700">Ubah solusi dan tanggapan yang telah diberikan terhadap pengaduan yang diajukan.</p> <br>
                        <a href="solusi_piber.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Solusi dan tanggapan masyarakat</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4">
        <div class="mb-4 md:mb-0">
            <h3 class="text-lg font-semibold mb-2">Hubungi Kami</h3>
            <p class="text-gray-300">Jl. Batu III, RT.6/RW.1, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
            <p class="text-gray-300">Email: info@laporkan.com</p>
            <p class="text-gray-300">Telp: 123-456-7890</p>
        </div>
        <div class="flex items-center space-x-4">
            <!-- Tambahkan tautan ikon media sosial -->
            <a href="#" class="text-gray-300 hover:text-white">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-white">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-white">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="text-center mt-4">
        <p>&copy; 2024 Layanan Pengaduan Masyarakat. All rights reserved.</p>
    </div>
</footer>


</body>
</html>
