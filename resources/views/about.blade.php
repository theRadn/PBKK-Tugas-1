<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Jurusan - ITS Academic Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image:
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }

        .text-glow {
            text-shadow: 0 0 25px rgba(245, 158, 11, 0.6);
        }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #030712; }
        ::-webkit-scrollbar-thumb { background: #1f2937; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #374151; }
    </style>
</head>
<body class="bg-gray-950 text-gray-300 font-sans antialiased selection:bg-amber-500 selection:text-gray-950 overflow-x-hidden">

    <!-- ==================== NAVBAR ==================== -->
    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="/" class="text-gray-400 hover:text-gray-200 transition">Beranda</a>
            <a href="/about" class="text-amber-400 hover:text-amber-300 transition">Profil Jurusan</a>
            <a href="/project-idea" class="text-gray-400 hover:text-gray-200 transition">Rencana Project</a>
            <a href="/hitung" class="text-gray-400 hover:text-gray-200 transition">Kalkulator</a>
        </div>
    </nav>

    <!-- ==================== HERO ==================== -->
    <header class="relative min-h-screen flex flex-col items-center justify-center bg-grid-pattern pt-20 pb-28">
        <!-- Ambient Glow -->
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-amber-500/10 blur-[150px] rounded-full pointer-events-none z-0"></div>

        <div class="z-10 text-center max-w-5xl px-6 flex flex-col items-center">
            <div class="text-amber-400 font-black tracking-widest text-sm uppercase mb-6 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253m0-13V21m0-15.747V4"></path></svg>
                ITS Academic Profile
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-b from-white to-gray-500">
                Departemen Teknik Informatika ITS
            </h1>

            <h2 class="text-2xl md:text-4xl font-bold text-amber-400 mb-6 text-glow">
                CETAK GENERASI TEKNOLOGI MASA DEPAN.
            </h2>

            <p class="text-lg md:text-xl text-gray-300 max-w-3xl leading-relaxed font-light">
                Menyiapkan sumber daya manusia unggul di bidang komputasi, perangkat lunak,
                dan kecerdasan buatan menuju standar internasional.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#profil" class="px-8 py-4 bg-amber-500 hover:bg-amber-400 text-gray-950 rounded-full font-bold text-lg transition duration-300 shadow-[0_0_30px_rgba(245,158,11,0.4)]">
                    Profil Jurusan
                </a>
                <a href="#tim" class="px-8 py-4 bg-transparent hover:bg-gray-900 text-white rounded-full font-bold text-lg transition duration-300 border border-gray-700">
                    Lihat Tim
                </a>
            </div>
        </div>
    </header>

    <!-- ==================== PROFIL JURUSAN ==================== -->
    <section id="profil" class="min-h-screen py-28 px-6 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div class="text-amber-400 font-black tracking-widest text-xs uppercase mb-4">About The Department</div>
                <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight">
                    Profil Departemen
                </h2>
            </div>

            <div class="grid lg:grid-cols-5 gap-12 items-start">
                <!-- Left: description + vision -->
                <div class="lg:col-span-3 space-y-8">
                    <p class="text-gray-300 leading-relaxed text-lg">
                        Departemen Teknik Informatika (TC) ITS berfokus pada pendidikan dan penelitian di bidang
                        komputasi, perangkat lunak, dan kecerdasan buatan. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800 border-l-4 border-l-amber-500 shadow-inner mt-4">
                        <div class="flex items-center gap-2 text-amber-400 font-bold tracking-wider text-sm uppercase mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Visi
                        </div>
                        <p class="italic text-gray-300 leading-relaxed">
                            "Visi departemen adalah menjadi institusi rujukan pendidikan tinggi di bidang Teknik
                            Informatika yang diakui secara internasional."
                        </p>
                    </div>
                </div>

                <!-- Right: key facts -->
                <div class="lg:col-span-2 grid sm:grid-cols-2 gap-6">
                    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800">
                        <div class="text-4xl font-black text-amber-400 mb-2">1985</div>
                        <div class="text-gray-400 text-sm font-semibold uppercase tracking-wider">Tahun Berdiri</div>
                        <p class="text-xs text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800">
                        <div class="text-4xl font-black text-amber-400 mb-2">5+</div>
                        <div class="text-gray-400 text-sm font-semibold uppercase tracking-wider">Program Studi</div>
                        <p class="text-xs text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800">
                        <div class="text-4xl font-black text-amber-400 mb-2">10+</div>
                        <div class="text-gray-400 text-sm font-semibold uppercase tracking-wider">Grup Riset</div>
                        <p class="text-xs text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800">
                        <div class="text-4xl font-black text-amber-400 mb-2">50+</div>
                        <div class="text-gray-400 text-sm font-semibold uppercase tracking-wider">Dosen Ahli</div>
                        <p class="text-xs text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TIM / TEAM SECTION ==================== -->
    <section id="tim" class="py-28 px-6 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div class="text-amber-400 font-black tracking-widest text-xs uppercase mb-4">Our Team</div>
                <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-4">Anggota Kelompok</h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Enam mahasiswa Teknik Informatika yang berkolaborasi dalam pengerjaan proyek akhir semester.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Member 1 -->
                <article class="p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-emerald-500/50 hover:-translate-y-2 transition duration-500">
                    <div class="w-16 h-16 bg-emerald-500/10 border border-emerald-500/30 rounded-2xl flex items-center justify-center text-2xl font-black text-emerald-400 mb-6">AR</div>
                    <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">00000000000001</p>
                    <p class="text-sm text-emerald-400 font-semibold mb-4">Teknik Informatika</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </article>

                <!-- Member 2 -->
                <article class="p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-blue-500/50 hover:-translate-y-2 transition duration-500">
                    <div class="w-16 h-16 bg-blue-500/10 border border-blue-500/30 rounded-2xl flex items-center justify-center text-2xl font-black text-blue-400 mb-6">SN</div>
                    <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">00000000000002</p>
                    <p class="text-sm text-blue-400 font-semibold mb-4">Teknik Informatika</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </article>

                <!-- Member 3 -->
                <article class="p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-purple-500/50 hover:-translate-y-2 transition duration-500">
                    <div class="w-16 h-16 bg-purple-500/10 border border-purple-500/30 rounded-2xl flex items-center justify-center text-2xl font-black text-purple-400 mb-6">BS</div>
                    <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">00000000000003</p>
                    <p class="text-sm text-purple-400 font-semibold mb-4">Teknik Informatika</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </article>

                <!-- Member 4 -->
                <article class="p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-amber-500/50 hover:-translate-y-2 transition duration-500">
                    <div class="w-16 h-16 bg-amber-500/10 border border-amber-500/30 rounded-2xl flex items-center justify-center text-2xl font-black text-amber-400 mb-6">DK</div>
                    <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">00000000000004</p>
                    <p class="text-sm text-amber-400 font-semibold mb-4">Teknik Informatika</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </article>

                <!-- Member 5 -->
                <article class="p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-rose-500/50 hover:-translate-y-2 transition duration-500">
                    <div class="w-16 h-16 bg-rose-500/10 border border-rose-500/30 rounded-2xl flex items-center justify-center text-2xl font-black text-rose-400 mb-6">FM</div>
                    <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">00000000000005</p>
                    <p class="text-sm text-rose-400 font-semibold mb-4">Teknik Informatika</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </article>

                <!-- Member 6 -->
                <article class="p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-cyan-500/50 hover:-translate-y-2 transition duration-500">
                    <div class="w-16 h-16 bg-cyan-500/10 border border-cyan-500/30 rounded-2xl flex items-center justify-center text-2xl font-black text-cyan-400 mb-6">GP</div>
                    <h3 class="text-lg font-bold text-white mb-1">Lorem Ipsum</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">00000000000006</p>
                    <p class="text-sm text-cyan-400 font-semibold mb-4">Teknik Informatika</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-gray-950 border-t border-gray-800 p-10 text-center text-gray-500 text-sm font-medium">
        <p>PBKK Tugas 1 &copy; 2026. Built with Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>