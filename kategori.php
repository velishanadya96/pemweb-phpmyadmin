<?php
session_start();
// Cek login
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
    <title>Kategori Produk - Tokoku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="shop.php" class="text-2xl font-black text-red-600 tracking-tighter">TOKOKU.</a>
                </div>
                <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-600">
                    <a href="kategori.php" class="text-red-600 font-bold">Kategori</a>
                    <a href="#" class="hover:text-red-600 transition">Promo</a>
                    <a href="#" class="hover:text-red-600 transition">Pesanan</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="login.php" class="text-sm font-semibold text-slate-700 hover:text-red-500 transition">Keluar</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white py-12 border-b border-slate-100 mb-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-3xl font-extrabold text-slate-900 mb-2">Jelajahi Kategori</h1>
            <p class="text-slate-500">Cari produk berdasarkan kategori yang kamu butuhkan</p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 pb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group bg-white rounded-3xl p-8 border border-slate-200 hover:border-red-500 hover:shadow-xl transition-all cursor-pointer text-center">
                <div class="w-20 h-20 bg-red-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="text-4xl">✨</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Skincare</h3>
                <p class="text-slate-500 text-sm mb-6">Rawat kulitmu dengan produk-produk terbaik.</p>
                <a href="#" class="inline-block px-6 py-2 rounded-full border border-slate-200 text-sm font-semibold group-hover:bg-red-600 group-hover:text-white transition">Lihat Produk</a>
            </div>

            <div class="group bg-white rounded-3xl p-8 border border-slate-200 hover:border-orange-500 hover:shadow-xl transition-all cursor-pointer text-center">
                <div class="w-20 h-20 bg-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="text-4xl">💄</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Makeup</h3>
                <p class="text-slate-500 text-sm mb-6">Tampil percaya diri dengan koleksi makeup pilihan.</p>
                <a href="#" class="inline-block px-6 py-2 rounded-full border border-slate-200 text-sm font-semibold group-hover:bg-orange-600 group-hover:text-white transition">Lihat Produk</a>
            </div>

            <div class="group bg-white rounded-3xl p-8 border border-slate-200 hover:border-amber-500 hover:shadow-xl transition-all cursor-pointer text-center">
                <div class="w-20 h-20 bg-amber-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="text-4xl">☕</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Minuman</h3>
                <p class="text-slate-500 text-sm mb-6">Segarkan harimu dengan minum minuman pilihan.</p>
                <a href="#" class="inline-block px-6 py-2 rounded-full border border-slate-200 text-sm font-semibold group-hover:bg-amber-600 group-hover:text-white transition">Lihat Produk</a>
            </div>

            <div class="group bg-white rounded-3xl p-8 border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all cursor-pointer text-center">
                <div class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="text-4xl">💡</span>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Elektronik</h3>
                <p class="text-slate-500 text-sm mb-6">Lengkapi kebutuhan smart home dan aksesoris gadgetmu.</p>
                <a href="#" class="inline-block px-6 py-2 rounded-full border border-slate-200 text-sm font-semibold group-hover:bg-blue-600 group-hover:text-white transition">Lihat Produk</a>
            </div>

        </div>
    </main>

    <footer class="bg-white py-8 border-t border-slate-200 text-center text-slate-500 text-sm">
        &copy; 2026 Tokoku Online Store. Semua Hak Dilindungi.
    </footer>

</body>
</html>