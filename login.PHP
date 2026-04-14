<?php
session_start();
include 'koneksi.php'; 
$error = ""; 

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    
    if (mysqli_num_rows($query) === 1) {
        $user = mysqli_fetch_assoc($query);

        
        if (password_verify($password, $user['password'])) {
            
            // 1. Simpan data ke Session (Tambah role)
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['role'] = $user['role']; // <--- Tambahkan ini

            // 2. Tentukan arah redirect berdasarkan role
            if ($_SESSION['role'] === 'admin') {
                header("Location: dashboardadmin.php"); // Ke halaman admin
            } else {
                header("Location: shop.php"); // Ke halaman user biasa
            }
            exit;
            
        } else {
            $error = "Password salah!";
        }
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];

            
            header("Location: shop.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TokoKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4 font-sans">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-gray-100">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Selamat Datang</h2>
            <p class="text-slate-500 mt-2">Silakan masuk ke akun Anda</p>
        </div>

        <?php if($error !== "") : ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative mb-4 text-sm text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Email</label>
                    <input type="email" name="email" placeholder="contoh@mail.com" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition" required>
                </div>
            </div>

            <button type="submit" name="login" class="w-full mt-8 bg-indigo-600 text-white font-bold py-3 rounded-lg hover:bg-indigo-700 shadow-lg transition duration-300 active:scale-95">
                Masuk
            </button>
        </form>

        <div class="mt-8 text-center text-sm border-t pt-6">
            <p class="text-slate-600">Belum punya akun? 
                <a href="register.php" class="text-indigo-600 font-bold hover:underline ml-1 text-base">Daftar Sekarang</a>
            </p>
        </div>
    </div>

</body>
</html>