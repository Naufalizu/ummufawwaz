<?php
// ==========================
// DUMMY DATA KATALOG
// ==========================
$produk_katalog = [
    ["id" => "PRD-001", "nama" => "iPhone 15 Pro Max", "kategori" => "Elektronik", "modal" => 18000000, "jual" => 20500000, "stok" => 12, "img" => "📱"],
    ["id" => "PRD-002", "nama" => "MacBook Air M2", "kategori" => "Elektronik", "modal" => 14000000, "jual" => 16500000, "stok" => 1, "img" => "💻"],
    ["id" => "PRD-003", "nama" => "Airpods Pro Gen 2", "kategori" => "Aksesoris", "modal" => 3200000, "jual" => 3900000, "stok" => 3, "img" => "🎧"],
    ["id" => "PRD-004", "nama" => "Magic Mouse", "kategori" => "Aksesoris", "modal" => 1100000, "jual" => 1450000, "stok" => 2, "img" => "🖱️"],
    ["id" => "PRD-005", "nama" => "USB-C Hub 7-in-1", "kategori" => "Aksesoris", "modal" => 450000, "jual" => 750000, "stok" => 0, "img" => "🔌"],
    ["id" => "PRD-006", "nama" => "Samsung Galaxy S25 Ultra", "kategori" => "Elektronik", "modal" => 16500000, "jual" => 18900000, "stok" => 8, "img" => "📱"],
    ["id" => "PRD-007", "nama" => "iPad Air M3", "kategori" => "Elektronik", "modal" => 9200000, "jual" => 10900000, "stok" => 5, "img" => "📱"],
    ["id" => "PRD-008", "nama" => "Apple Watch Ultra 2", "kategori" => "Wearable", "modal" => 8500000, "jual" => 10200000, "stok" => 4, "img" => "⌚"],
    ["id" => "PRD-009", "nama" => "Logitech MX Master 3S", "kategori" => "Aksesoris", "modal" => 1450000, "jual" => 1850000, "stok" => 10, "img" => "🖱️"],
    ["id" => "PRD-010", "nama" => "Keychron K2 Mechanical", "kategori" => "Aksesoris", "modal" => 950000, "jual" => 1350000, "stok" => 7, "img" => "⌨️"],
    ["id" => "PRD-011", "nama" => "Sony WH-1000XM5", "kategori" => "Audio", "modal" => 4200000, "jual" => 5200000, "stok" => 6, "img" => "🎧"],
    ["id" => "PRD-012", "nama" => "JBL Flip 6", "kategori" => "Audio", "modal" => 1250000, "jual" => 1750000, "stok" => 9, "img" => "🔊"],
    ["id" => "PRD-013", "nama" => "Xiaomi Smart Band 9", "kategori" => "Wearable", "modal" => 350000, "jual" => 550000, "stok" => 15, "img" => "⌚"],
    ["id" => "PRD-014", "nama" => "Anker Power Bank 20000mAh", "kategori" => "Aksesoris", "modal" => 420000, "jual" => 650000, "stok" => 2, "img" => "🔋"],
    ["id" => "PRD-015", "nama" => "Dell UltraSharp 27\"", "kategori" => "Elektronik", "modal" => 4200000, "jual" => 5500000, "stok" => 3, "img" => "🖥️"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Mini ERP</title>

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
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-shopee-50 to-white text-shopee-600 rounded-xl font-semibold transition-all border border-shopee-100 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    Katalog Barang
                </a>
                <a href="{{ route('kontak') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
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

            <header class="bg-white/70 backdrop-blur-xl border-b border-slate-200/60 sticky top-0 z-30 h-20 flex items-center justify-between px-4 sm:px-8 flex-shrink-0">
                <div class="flex items-center gap-4">
                    <button id="menuBtn" class="lg:hidden p-2.5 -ml-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-xl transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <div>
                        <h2 class="font-bold text-xl text-slate-800 tracking-tight">Katalog Barang</h2>
                        <p class="text-slate-500 text-sm hidden sm:block font-medium">Manajemen stok dan harga barang</p>
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
                        <input type="text" placeholder="Cari nama barang atau ID..." class="w-full pl-11 pr-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 outline-none text-sm font-medium shadow-sm transition-all">
                        <svg class="w-5 h-5 absolute left-4 top-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
    
                        <div class="relative flex-1 sm:flex-none group">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-slate-400 group-hover:text-shopee-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                            </div>
                            
                            <select class="w-full appearance-none bg-white border border-slate-200 hover:border-slate-300 rounded-xl pl-10 pr-10 py-3 text-sm font-bold text-slate-700 outline-none shadow-sm cursor-pointer focus:ring-4 focus:ring-shopee-500/15 focus:border-shopee-500 transition-all">
                                <option value="" class="font-semibold">Semua Kategori</option>
                                <option value="elektronik" class="font-semibold">Elektronik</option>
                                <option value="aksesoris" class="font-semibold">Aksesoris</option>
                            </select>

                            <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-slate-400 group-hover:text-shopee-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>

                        <button class="flex-1 sm:flex-none bg-gradient-to-r from-shopee-500 to-[#ff6b2c] hover:from-shopee-600 hover:to-[#f05716] text-white px-6 py-3 rounded-xl shadow-lg shadow-shopee-500/30 font-bold transition-all flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                            Produk Baru
                        </button>
                    </div>
                </div>

                {{-- <div class="bg-white rounded-3xl border border-slate-100/60 shadow-sm overflow-hidden min-w-0"> --}}
                <div class="bg-white scrollbar-hide rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col h-full">
                    {{-- <div class="overflow-x-auto"> --}}
                    <div class="overflow-y-auto flex-1 scrollbar-hide">
                        <table class="w-full text-left whitespace-nowrap min-w-[900px]">
                            <thead class="bg-slate-100 text-slate-500 text-xs uppercase font-bold tracking-wider border-b border-slate-100/60 sticky top-0 z-10">
                                <tr>
                                    <th class="px-6 py-5">Info Produk</th>
                                    <th class="px-6 py-5">Kategori</th>
                                    <th class="px-6 py-5 text-right">Harga Modal</th>
                                    <th class="px-6 py-5 text-right">Harga Jual</th>
                                    <th class="px-6 py-5 text-center">Status Stok</th>
                                    <th class="px-6 py-5 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100/80 text-sm font-medium">
                                <?php foreach($produk_katalog as $p): ?>
                                <tr class="hover:bg-slate-50/50 transition-colors group <?= $p['stok'] == 0 ? 'bg-rose-50/20' : '' ?>">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <div class="w-14 h-14 rounded-2xl bg-slate-100 border border-slate-200 flex items-center justify-center text-3xl shadow-inner flex-shrink-0">
                                                <?= $p['img'] ?>
                                            </div>
                                            <div>
                                                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-wider mb-0.5"><?= $p['id'] ?></p>
                                                <p class="text-slate-800 font-bold text-base"><?= $p['nama'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1.5 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold border border-slate-200">
                                            <?= $p['kategori'] ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500 font-semibold text-right">
                                        Rp <?= number_format($p['modal'],0,",",".") ?>
                                    </td>
                                    <td class="px-6 py-4 text-slate-800 font-extrabold text-right">
                                        Rp <?= number_format($p['jual'],0,",",".") ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <?php 
                                            // Indikator Warna Stok
                                            if($p['stok'] == 0) {
                                                $stokStyle = "bg-rose-100 text-rose-700 border-rose-200";
                                                $icon = "M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z";
                                                $stokText = "Stok Kosong!";
                                            } elseif($p['stok'] <= 3) {
                                                $stokStyle = "bg-amber-100 text-amber-700 border-amber-200";
                                                $icon = "M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z";
                                                $stokText = $p['stok'] . " Unit (Menipis)";
                                            } else {
                                                $stokStyle = "bg-emerald-50 text-emerald-600 border-emerald-100";
                                                $icon = "M5 13l4 4L19 7";
                                                $stokText = $p['stok'] . " Unit";
                                            }
                                        ?>
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg border font-bold text-xs <?= $stokStyle ?>">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="<?= $icon ?>"></path></svg>
                                            <?= $stokText ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <button class="flex items-center justify-center w-8 h-8 bg-blue-50 text-blue-600 border border-blue-100 hover:bg-blue-600 hover:text-white rounded-lg transition-colors shadow-sm" title="Edit Data">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            </button>
                                            <button class="flex items-center justify-center w-8 h-8 bg-rose-50 text-rose-600 border border-rose-100 hover:bg-rose-600 hover:text-white rounded-lg transition-colors shadow-sm" title="Hapus Data">
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