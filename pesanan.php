<?php
session_start();
include 'koneksi.php';

// Proteksi: Cek apakah yang login beneran admin
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$query = mysqli_query($conn, "SELECT * FROM pesanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - TOKOKU</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-8">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Daftar Pesanan Masuk</h2>
            <a href="dashboardadmin.php" class="text-indigo-600 font-bold hover:underline">← Kembali</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-800 text-white">
                        <th class="p-3">id_pesanan</th>
                        <th class="p-3">nama_pelanggan</th>
                        <th class="p-3">tanggal</th>
                        <th class="p-3">total_bayar</th>
                        <th class="p-3">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($order = mysqli_fetch_assoc($query)) : ?>
                    <tr class="border-b hover:bg-slate-50 transition">
                        <td class="p-3 font-medium">#<?php echo $order['id_pesanan']; ?></td>
                        <td class="p-3"><?php echo $order['nama_pelanggan']; ?></td>
                        <td class="p-3"><?php echo $order['tanggal']; ?></td>
                        <td class="p-3 font-bold text-slate-700">Rp <?php echo number_format($order['total_bayar'], 0, ',', '.'); ?></td>
                        <td class="p-3">
                            <?php 
                                $statusClass = ($order['status'] == 'Berhasil') ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700';
                            ?>
                            <span class="px-2 py-1 rounded text-xs font-bold <?php echo $statusClass; ?>">
                                <?php echo $order['status']; ?>
                            </span>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>