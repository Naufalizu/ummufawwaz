<?php
// ==========================
// DUMMY DATA SUPPLIER
// ==========================
$data_supplier = [
    [
        "id" => "SUP-001", 
        "nama" => "Budi Santoso", 
        "perusahaan" => "PT iBox Distributor", 
        "wa" => "0812-3456-7890", 
        "email" => "budi@ibox.co.id", 
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-002", 
        "nama" => "Sarah Wijaya", 
        "perusahaan" => "Mac Indo Grosir", 
        "wa" => "0856-7890-1234", 
        "email" => "sarah.w@macindo.com", 
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-003", 
        "nama" => "Ko Hendro", 
        "perusahaan" => "Aksesoris JKT (Importir)", 
        "wa" => "0877-1122-3344", 
        "email" => "hendro.acc@gmail.com", 
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-004", 
        "nama" => "Toko Laris Jaya", 
        "perusahaan" => "Supplier Lokal Kemasan", 
        "wa" => "0822-5566-7788", 
        "email" => "larisjaya@yahoo.com", 
        "status" => "Nonaktif"
    ],
    [
        "id" => "SUP-005",
        "nama" => "Andi Pratama",
        "perusahaan" => "CV Digital Nusantara",
        "wa" => "0813-4455-6677",
        "email" => "andi@digitalnusantara.co.id",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-006",
        "nama" => "Rina Kartika",
        "perusahaan" => "PT Gadget Center Indonesia",
        "wa" => "0819-8877-6655",
        "email" => "rina@gadgetcenter.id",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-007",
        "nama" => "Fajar Nugroho",
        "perusahaan" => "Fajar Tech Supply",
        "wa" => "0857-2211-9988",
        "email" => "fajar@fajartech.com",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-008",
        "nama" => "Linda Melati",
        "perusahaan" => "PT Smart Accessories",
        "wa" => "0821-3344-5566",
        "email" => "linda@smartacc.co.id",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-009",
        "nama" => "Agus Setiawan",
        "perusahaan" => "CV Sumber Elektronik",
        "wa" => "0812-9988-7766",
        "email" => "agus@sumberelektronik.id",
        "status" => "Nonaktif"
    ],
    [
        "id" => "SUP-010",
        "nama" => "Michael Tan",
        "perusahaan" => "Asia Import Technology",
        "wa" => "0811-2233-4455",
        "email" => "michael@asiaimporttech.com",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-011",
        "nama" => "Dewi Lestari",
        "perusahaan" => "PT Wearable Indonesia",
        "wa" => "0858-1122-3344",
        "email" => "dewi@wearable.id",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-012",
        "nama" => "Yusuf Hidayat",
        "perusahaan" => "CV Audio Premium",
        "wa" => "0817-5544-3322",
        "email" => "yusuf@audiopremium.co.id",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-013",
        "nama" => "Cindy Natalia",
        "perusahaan" => "PT Mobile Device Solution",
        "wa" => "0823-8899-1122",
        "email" => "cindy@mds.co.id",
        "status" => "Aktif"
    ],
    [
        "id" => "SUP-014",
        "nama" => "Hendra Gunawan",
        "perusahaan" => "Hendra Komputer Grosir",
        "wa" => "0815-6677-8899",
        "email" => "hendra@hkgrosir.com",
        "status" => "Nonaktif"
    ],
    [
        "id" => "SUP-015",
        "nama" => "Sari Puspita",
        "perusahaan" => "CV Digital Accessories",
        "wa" => "0813-7766-5544",
        "email" => "sari@digitalaccessories.id",
        "status" => "Aktif"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Supplier - Mini ERP</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        shopee: {
                            50: '#fff4f2',
                            100: '#ffe6e1',
                            400: '#ff7354',
                            500: '#ee4d2d',
                            600: '#d74226',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* 1. Hapus scrollbar di Chrome, Safari, dan Opera */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* 2. Hapus scrollbar di IE, Edge, dan Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;  
            scrollbar-width: none;  
        }

        /* 3. Pastikan elemen yang memiliki scroll punya kelas ini */
        .overflow-y-auto {
            scrollbar-width: none; /* Firefox */
        }
    </style>

</head>
<body class="bg-slate-50/50 text-slate-800 font-sans overflow-x-hidden selection:bg-shopee-500 selection:text-white">

    <div id="sidebarOverlay" class="fixed inset-0 bg-slate-900/60 z-40 hidden lg:hidden backdrop-blur-sm transition-opacity duration-300"></div>

    {{-- <div class="flex min-h-screen max-w-[100vw]"> --}}
    <div class="flex h-screen w-screen overflow-hidden">

        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-72 bg-white border-r border-slate-200/60 transform -translate-x-full lg:translate-x-0 lg:static lg:block transition-transform duration-300 ease-in-out flex flex-col shadow-xl lg:shadow-none">
            <div class="flex items-center justify-between p-6 h-20 border-b border-slate-100">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-shopee-400 to-shopee-600 flex items-center justify-center text-white font-bold shadow-md shadow-shopee-500/30">R</div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-800 tracking-tight leading-tight">ResellerPro</h1>
                        <p class="text-[10px] text-slate-400 font-bold tracking-widest uppercase">Mini ERP</p>
                    </div>
                </div>
                <button id="closeSidebar" class="lg:hidden p-2 text-slate-400 hover:text-slate-600 bg-slate-50 rounded-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-1.5 overflow-y-auto">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>
                <a href="{{ route('transaksi') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Catat Transaksi
                </a>
                <a href="{{ route('katalogbarang') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    Katalog Barang
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-shopee-50 to-white text-shopee-600 rounded-xl font-semibold transition-all border border-shopee-100 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Kontak Supplier
                </a>
                <a href="{{ route('laporan') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Laporan Keuangan
                </a>
            </nav>
            
            <div class="mt-auto p-4">
                <div class="rounded-3xl bg-slate-900 border border-slate-800 shadow-2xl shadow-slate-900/20 overflow-hidden text-white">

                    <div class="p-5 border-b border-slate-700/50 bg-slate-800/50">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-shopee-500 to-orange-500 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-shopee-500/20">
                                A
                            </div>
                            <div class="min-w-0">
                                <h3 class="font-bold text-white text-sm truncate">Administrator</h3>
                                <p class="text-[10px] text-slate-400 font-bold tracking-widest uppercase">ResellerPro Workspace</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-5">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="font-bold text-slate-400 text-[10px] uppercase tracking-wider">Target Bulan Ini</h4>
                            <button onclick="document.getElementById('targetForm').classList.toggle('hidden')"
                                    class="text-[10px] px-2.5 py-1 rounded-md bg-slate-700 text-white font-bold hover:bg-slate-600 transition">
                                EDIT
                            </button>
                        </div>

                        <div class="flex justify-between text-[11px] mb-2 font-bold">
                            <span class="text-slate-500">Rp 8.500.000</span>
                            <span class="text-white">85%</span>
                        </div>

                        <div class="h-1.5 rounded-full bg-slate-700 overflow-hidden">
                            <div class="h-full w-[85%] bg-gradient-to-r from-shopee-500 to-orange-400 rounded-full"></div>
                        </div>

                        <div id="targetForm" class="hidden mt-4 space-y-2">
                            <input type="number" placeholder="Set target baru..." 
                                class="w-full px-3 py-2 bg-slate-800 border border-slate-700 text-white rounded-lg text-xs font-medium focus:outline-none focus:ring-2 focus:ring-shopee-500/30">
                            <button class="w-full py-2 rounded-lg bg-shopee-500 text-white text-xs font-bold hover:bg-shopee-600 transition">
                                Simpan
                            </button>
                        </div>
                    </div>

                    <div class="px-5 pb-5">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl p-2.5 text-center">
                                <p class="font-extrabold text-white text-sm">24</p>
                                <p class="text-[9px] text-slate-400 font-bold uppercase tracking-wider mt-0.5">Trx</p>
                            </div>
                            <div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl p-2.5 text-center">
                                <p class="font-extrabold text-white text-sm">2.4jt</p>
                                <p class="text-[9px] text-slate-400 font-bold uppercase tracking-wider mt-0.5">Omzet</p>
                            </div>
                            <div class="bg-emerald-900/30 border border-emerald-800/50 rounded-2xl p-2.5 text-center">
                                <p class="font-extrabold text-emerald-400 text-sm">680k</p>
                                <p class="text-[9px] text-emerald-600 font-bold uppercase tracking-wider mt-0.5">Profit</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 border-t border-slate-700/50 bg-slate-950/20">
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ route('transaksi') }}"
                            class="py-2.5 text-center rounded-xl bg-gradient-to-r from-shopee-500 to-orange-500 text-white text-[11px] font-bold hover:scale-[1.02] transition-transform">
                                + Transaksi
                            </a>
                            <a href="{{ route('katalogbarang') }}"
                            class="py-2.5 text-center rounded-xl border border-slate-700 bg-slate-800 text-white text-[11px] font-bold hover:bg-slate-700 transition-colors">
                                + Barang
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </aside>

        {{-- <main class="flex-1 min-w-0 flex flex-col max-w-full"> --}}
        <main class="flex-1 flex flex-col h-full min-w-0 overflow-hidden">

            <header class="bg-white/70 backdrop-blur-xl border-b border-slate-200/60 sticky top-0 z-30 h-20 flex items-center justify-between px-4 sm:px-8">
                <div class="flex items-center gap-4">
                    <button id="menuBtn" class="lg:hidden p-2.5 -ml-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-xl transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <div>
                        <h2 class="font-bold text-xl text-slate-800 tracking-tight">Buku Kontak</h2>
                        <p class="text-slate-500 text-sm hidden sm:block font-medium">Manajemen relasi dan daftar supplier</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button class="relative p-2.5 text-slate-500 hover:bg-slate-100 rounded-xl transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-2.5 right-2.5 w-2 h-2 bg-shopee-500 rounded-full border border-white"></span>
                    </button>

                    <a href="#" class="flex items-center gap-2 px-4 py-2.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-xl font-bold text-sm transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="hidden sm:inline">Keluar</span>
                    </a>
                </div>
            </header>

            {{-- <div class="p-4 sm:p-8 flex-1 overflow-y-auto"> --}}
            <div class="flex-1 overflow-y-auto p-4 sm:p-8">
                
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <div class="relative flex-1 w-full sm:max-w-md">
                        <input type="text" placeholder="Cari nama atau perusahaan..." class="w-full pl-11 pr-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 outline-none text-sm font-medium shadow-sm transition-all">
                        <svg class="w-5 h-5 absolute left-4 top-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                        
                        <div class="relative flex-1 sm:flex-none group">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-slate-400 group-hover:text-shopee-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                            </div>
                            <select class="w-full appearance-none bg-white border border-slate-200 hover:border-slate-300 rounded-xl pl-10 pr-10 py-3 text-sm font-bold text-slate-700 outline-none shadow-sm cursor-pointer focus:ring-4 focus:ring-shopee-500/15 focus:border-shopee-500 transition-all">
                                <option value="" class="font-semibold">Semua Status</option>
                                <option value="aktif" class="font-semibold">Aktif</option>
                                <option value="nonaktif" class="font-semibold">Nonaktif</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-slate-400 group-hover:text-shopee-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>

                        <button class="flex-1 sm:flex-none bg-gradient-to-r from-shopee-500 to-[#ff6b2c] hover:from-shopee-600 hover:to-[#f05716] text-white px-6 py-3 rounded-xl shadow-lg shadow-shopee-500/30 font-bold transition-all flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                            Tambah Supplier
                        </button>
                    </div>
                </div>

                {{-- <div class="bg-white rounded-3xl border border-slate-100/60 shadow-sm overflow-hidden min-w-0"> --}}
                <div class="scrollbar-hide rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col h-full">
                    {{-- <div class="overflow-x-auto"> --}}
                    <div class="overflow-y-auto flex-1 scrollbar-hide">

                        <table class="w-full text-left whitespace-nowrap min-w-[900px]">
                            <thead class="bg-slate-100 text-slate-500 text-xs uppercase font-bold tracking-wider border-b border-slate-100/60 sticky top-0 z-10">
                                <tr>
                                    <th class="px-6 py-5">Profil Supplier</th>
                                    <th class="px-6 py-5">Kontak & Perusahaan</th>
                                    <th class="px-6 py-5 text-center">Status Relasi</th>
                                    <th class="px-6 py-5 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100/80 text-sm font-medium">
                                <?php foreach($data_supplier as $sup): ?>
                                <tr class="hover:bg-slate-50/50 transition-colors group">
                                    
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <?php 
                                                // Mengambil inisial huruf pertama nama
                                                $inisial = strtoupper(substr($sup['nama'], 0, 1)); 
                                            ?>
                                            <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-slate-100 to-slate-200 border border-slate-300 flex items-center justify-center text-slate-600 text-lg font-extrabold shadow-sm flex-shrink-0">
                                                <?= $inisial ?>
                                            </div>
                                            <div>
                                                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-wider mb-0.5"><?= $sup['id'] ?></p>
                                                <p class="text-slate-800 font-bold text-base"><?= $sup['nama'] ?></p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="flex flex-col gap-1.5">
                                            <div class="flex items-center text-slate-700 font-bold mb-1">
                                                <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                                <?= $sup['perusahaan'] ?>
                                            </div>
                                            <div class="flex items-center text-slate-500 text-xs font-semibold">
                                                <svg class="w-3.5 h-3.5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                                <?= $sup['wa'] ?>
                                            </div>
                                            <div class="flex items-center text-slate-500 text-xs font-semibold">
                                                <svg class="w-3.5 h-3.5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                <?= $sup['email'] ?>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <?php 
                                            if($sup['status'] == 'Aktif') {
                                                $statusStyle = "bg-emerald-50 text-emerald-600 border-emerald-100";
                                                $dotColor = "bg-emerald-500";
                                            } else {
                                                $statusStyle = "bg-slate-100 text-slate-500 border-slate-200";
                                                $dotColor = "bg-slate-400";
                                            }
                                        ?>
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg border font-bold text-xs <?= $statusStyle ?>">
                                            <span class="w-2 h-2 rounded-full mr-2 <?= $dotColor ?>"></span>
                                            <?= $sup['status'] ?>
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <button class="flex items-center justify-center w-8 h-8 bg-emerald-50 text-emerald-600 border border-emerald-100 hover:bg-emerald-500 hover:text-white rounded-lg transition-colors shadow-sm" title="Chat WhatsApp">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                            </button>
                                            
                                            <button class="flex items-center justify-center w-8 h-8 bg-blue-50 text-blue-600 border border-blue-100 hover:bg-blue-600 hover:text-white rounded-lg transition-colors shadow-sm" title="Edit Kontak">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            </button>
                                            
                                            <button class="flex items-center justify-center w-8 h-8 bg-rose-50 text-rose-600 border border-rose-100 hover:bg-rose-600 hover:text-white rounded-lg transition-colors shadow-sm" title="Hapus Kontak">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </div>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

<script>
    // Logika Mobile Sidebar
    const menuBtn = document.getElementById('menuBtn');
    const closeSidebar = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }

    menuBtn.addEventListener('click', toggleSidebar);
    closeSidebar.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', toggleSidebar);
</script>

</body>
</html>