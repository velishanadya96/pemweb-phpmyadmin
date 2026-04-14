<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKOKU - Toko Online Terpercaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen">
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <span class="text-2xl font-black text-red-600 tracking-tighter">TOKOKU.</span>
            <div class="flex items-center space-x-4">
                <?php if ($isLoggedIn): ?>
                    <span class="text-sm font-medium text-slate-600">Halo, <b><?php echo $nama; ?></b></span>
                    <a href="shop.php" class="text-sm font-bold text-slate-800 hover:text-red-600">Katalog</a>
                    <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-md">Keluar</a>
                <?php else: ?>
                    <a href="login.php" class="text-sm font-bold text-slate-800">Masuk</a>
                    <a href="register.php" class="bg-slate-900 text-white px-4 py-2 rounded-lg text-sm font-bold">Daftar</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <header class="bg-gradient-to-r from-red-600 to-orange-500 py-24 text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Selamat Datang di TOKOKU</h1>
        <p class="text-lg opacity-90 mb-10">Temukan barang impianmu dengan harga terbaik dan kualitas terjamin.</p>
        <a href="#produk" class="bg-white text-red-600 px-8 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition transform inline-block">Mulai Belanja</a>
    </header>

    <section id="produk" class="max-w-7xl mx-auto px-4 py-20">
        <h2 class="text-3xl font-bold text-center text-slate-800 mb-12">Produk Terpopuler</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 group">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98s-lu61rruaxsyac7"class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="font-bold text-slate-800">Garnier Hair Color</h3>
                    <p class="text-red-600 font-black text-xl mt-2">Rp 22.500</p>
                    <a href="login.php" class="block w-full mt-4 py-2 bg-slate-900 text-white text-center rounded-lg font-bold">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>