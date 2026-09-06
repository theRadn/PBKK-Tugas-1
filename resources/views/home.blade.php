<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - ITS Academic Profile</title>
    <!-- Menggunakan CDN Tailwind agar kamu bisa melihat desainnya tanpa perlu Node.js -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen flex flex-col">
    
    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="/" class="text-emerald-400 hover:text-emerald-300 transition">Beranda</a>
            <a href="/about" class="text-gray-400 hover:text-gray-200 transition">Profil Jurusan</a>
            <a href="/project-idea" class="text-gray-400 hover:text-gray-200 transition">Rencana Project</a>
            <a href="/hitung" class="text-gray-400 hover:text-gray-200 transition">Kalkulator</a>
        </div>
    </nav>
    
    <main class="flex-grow flex items-center justify-center p-6">
        <div class="w-full max-w-2xl bg-gray-900 rounded-2xl shadow-2xl border border-gray-700/50 p-8 transform transition hover:scale-[1.01] duration-300">
            <h1 class="text-3xl font-bold text-center mb-6 text-emerald-400 tracking-wide border-b border-gray-800 pb-4">
                Selamat Datang!
            </h1>
            
            <div class="space-y-4 text-center">
                <p class="text-lg text-gray-400">Nama Lengkap: <span class="font-bold text-white text-xl ml-2">[Isi Nama Anda]</span></p>
                <p class="text-lg text-gray-400">NRP: <span class="font-bold text-white text-xl ml-2">[Isi NRP Anda]</span></p>
                
                <div class="mt-8 p-5 bg-black/40 rounded-xl border border-gray-800 shadow-inner">
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Ini adalah halaman beranda dari Sistem Informasi Statik Profil Mahasiswa.
                    </p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
