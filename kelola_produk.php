<?php
session_start();
include 'koneksi.php';
if ($_SESSION['role'] !== 'admin') { header("Location: login.php"); exit; }

$query = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <div class="flex justify-between mb-6">
            <h2 class="text-2xl font-bold">Kelola Produk</h2>
            <a href="dashboardadmin.php" class="text-indigo-600 font-bold">← Kembali</a>
        </div>
        
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-200">
                    <th class="p-3">Nama Produk</th>
                    <th class="p-3">Harga</th>
                    <th class="p-3">Stok</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($query)) : ?>
                <tr class="border-b">
                    <td class="p-3"><?= $row['nama_produk']; ?></td>
                    <td class="p-3">Rp <?= number_format($row['harga']); ?></td>
                    <td class="p-3"><?= $row['stok']; ?></td>
                    <td class="p-3">
                        <button class="text-blue-500 mr-2">Edit</button>
                        <button class="text-red-500">Hapus</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>