.<?php
session_start();
// Proteksi Admin: Cek apakah yang login beneran admin atau sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TOKOKU.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex min-h-screen">

    <aside class="w-64 bg-slate-900 text-white hidden md:block">
        <div class="p-6">
            <h1 class="text-2xl font-black text-red-500">TOKOKU.</h1>
            <p class="text-xs text-slate-400 mt-1">Admin Panel</p>
        </div>
        <nav class="mt-6">
            <a href="#" class="block py-3 px-6 bg-red-600 text-white">Dashboard</a>
            <a href="shop.php" class="block py-3 px-6 hover:bg-slate-800 transition">Lihat Toko</a>
            <a href="kelola_produk.php" class="block py-3 px-6 hover:bg-slate-800 transition">Kelola Produk</a>
            <a href="pesanan.php" class="block py-3 px-6 hover:bg-slate-800 transition">Pesanan</a>
            <a href="logout.php" class="block py-3 px-6 hover:bg-red-700 transition mt-20">Logout</a>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-10">
            <h2 class="text-2xl font-bold text-slate-800">Ringkasan Statistik</h2>
            <div class="flex items-center space-x-4">
                <span class="text-sm font-medium text-slate-600">Admin: <b><?php echo $_SESSION['nama']; ?></b></span>
                <div class="w-10 h-10 bg-slate-300 rounded-full border-2 border-white shadow-sm"></div>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <p class="text-slate-500 text-sm">Total Penjualan</p>
                <h3 class="text-3xl font-bold text-slate-800 mt-2">Rp 12.500.000</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <p class="text-slate-500 text-sm">Pesanan Baru</p>
                <h3 class="text-3xl font-bold text-slate-800 mt-2">24</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <p class="text-slate-500 text-sm">Total User</p>
                <h3 class="text-3xl font-bold text-slate-800 mt-2">156</h3>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h4 class="font-bold text-slate-800">Pesanan Terbaru</h4>
            </div>
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500 uppercase font-semibold">
                    <tr>
                        <th class="px-6 py-4">ID Pesanan</th>
                        <th class="px-6 py-4">Nama Pelanggan</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr>
                        <td class="px-6 py-4 font-medium">#10245</td>
                        <td class="px-6 py-4">Velsha Nadya</td>
                        <td class="px-6 py-4"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Berhasil</span></td>
                        <td class="px-6 py-4 font-bold">Rp 165.000</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium">#10246</td>
                        <td class="px-6 py-4">Arsya</td>
                        <td class="px-6 py-4"><span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-bold">Proses</span></td>
                        <td class="px-6 py-4 font-bold">Rp 320.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>