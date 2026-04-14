<?php
session_start();
// Cek apakah sudah login, kalau belum tendang ke login.php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - TokoKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans">

    <nav class="bg-white shadow-sm p-4 mb-10">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-600">TOKOKU.</h1>
            <a href="shop.php" class="text-slate-600 hover:text-slate-900">← Kembali ke Katalog</a>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto p-4">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row border border-slate-100">
            
            <div class="md:w-1/2 bg-slate-100 flex items-center justify-center p-8">
                <img src="https://images.unsplash.com/photo-1626015565654-943034988701?q=80&w=500" alt="Produk" class="rounded-2xl shadow-lg mix-blend-multiply">
            </div>

            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <span class="text-red-500 font-bold uppercase tracking-widest text-sm mb-2">Hot Item</span>
                <h2 class="text-4xl font-extrabold text-slate-800 mb-4">Garnier Hair Color</h2>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Pewarna rambut yang diperkaya dengan 3 Natural Oils. Rambut terawat, warna lebih indah dan tahan lama. Menutup uban dengan sempurna, tanpa reaksi amonia.
                </p>
                
                <div class="mb-8">
                    <span class="text-sm text-slate-400 block mb-1">Harga Terbaik</span>
                    <span class="text-3xl font-bold text-slate-900 text-red-600">Rp 22.000</span>
                </div>

                <div class="space-y-3">
                    <button onclick="alert('Pesanan Berhasil! Barang akan segera dikirim ke rumahmu.')" class="w-full bg-slate-900 text-white font-bold py-4 rounded-xl hover:bg-slate-800 transition shadow-lg active:scale-95">
                        Konfirmasi Pembelian
                    </button>
                    <p class="text-center text-xs text-slate-400">Gratis ongkir untuk wilayah Jabodetabek</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>