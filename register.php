<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $umur = mysqli_real_escape_string($conn, $_POST['umur']);
    $jk = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);

    $query = "INSERT INTO users (nama, email, password, alamat, umur, jenis_kelamin) 
              VALUES ('$nama', '$email', '$password', '$alamat', '$umur', '$jk')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi Berhasil!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TokoKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-gray-100 my-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-800">Daftar Akun</h2>
            <p class="text-slate-500 mt-2">Lengkapi data dan mulailah berbelanja</p>
        </div>

        <form action="" method="POST">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none transition" placeholder="Masukkan nama" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none transition" placeholder="user@example.com" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none transition" placeholder="Minimal 8 karakter" required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Alamat</label>
                    <textarea name="alamat" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none transition" placeholder="Alamat lengkap" required></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Umur</label>
                        <input type="number" name="umur" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none transition" placeholder="Contoh: 20" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none transition" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" name="register" class="w-full mt-6 bg-indigo-600 text-white font-bold py-3 rounded-lg hover:bg-indigo-700 shadow-lg transition duration-300">
                Buat Akun 
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-slate-600">Sudah memiliki akun? <a href="login.php" class="text-indigo-600 font-bold hover:underline">Login di sini</a></p>
        </div>
    </div>
</body>
</html>