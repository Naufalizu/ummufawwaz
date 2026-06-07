<?php
// ==========================
// DUMMY DATA
// ==========================

$todaySales = 3250000;
$monthSales = 48920000;
$monthProfit = 12450000;

$bestSeller = [
    "nama" => "iPhone 15 Pro Max",
    "terjual" => 142
];

$lowStocks = [
    ["nama" => "Magic Mouse", "stok" => 2],
    ["nama" => "MacBook Air M2", "stok" => 1],
    ["nama" => "Airpods Pro Gen 2", "stok" => 3]
];

$transactions = [
    [
        "id" => "ORD-2849",
        "customer" => "Sarah Johnson",
        "product" => "Sony WH-1000XM5",
        "status" => "Completed",
        "amount" => "349.00"
    ],
    [
        "id" => "ORD-2848",
        "customer" => "Mark Walters",
        "product" => "Logitech MX Master 3S",
        "status" => "Processing",
        "amount" => "99.00"
    ],
    [
        "id" => "ORD-2847",
        "customer" => "Emily Davis",
        "product" => "Keychron K2",
        "status" => "Completed",
        "amount" => "120.50"
    ],
    [
        "id" => "ORD-2846",
        "customer" => "Tom Wilson",
        "product" => "Hydro Flask",
        "status" => "Pending",
        "amount" => "45.00"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini ERP Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                            500: '#ee4d2d', // Primary
                            600: '#d74226', // Hover
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
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-shopee-400 to-shopee-600 flex items-center justify-center text-white font-bold shadow-md shadow-shopee-500/30">
                        R
                    </div>
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
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-shopee-50 to-white text-shopee-600 rounded-xl font-semibold transition-all border border-shopee-100 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
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

            <header class="bg-white/70 backdrop-blur-xl border-b border-slate-200/60 sticky top-0 z-30 h-20 flex items-center justify-between px-4 sm:px-8">
                <div class="flex items-center gap-4">
                    <button id="menuBtn" class="lg:hidden p-2.5 -ml-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-xl transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <div>
                        <h2 class="font-bold text-xl text-slate-800 tracking-tight">Keseluruhan</h2>
                        <p class="text-slate-500 text-sm hidden sm:block font-medium">Performa bisnis dan ringkasan aktivitas</p>
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

            <div class="p-4 sm:p-8 flex-1 overflow-y-auto">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 sm:gap-6 w-full">
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-100/50 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-20 h-20 text-slate-800" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        </div>
                        <p class="text-slate-500 text-sm font-semibold mb-1 relative z-10">Penjualan Hari Ini</p>
                        <h3 class="text-2xl font-extrabold text-slate-800 relative z-10 tracking-tight">Rp <?= number_format($todaySales,0,",",".") ?></h3>
                        <div class="mt-4 flex items-center text-sm relative z-10">
                            <span class="text-emerald-600 font-bold flex items-center bg-emerald-50 px-2 py-1 rounded-md">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                12.5%
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100/50 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                        <p class="text-slate-500 text-sm font-semibold mb-1">Penjualan Bulan Ini</p>
                        <h3 class="text-2xl font-extrabold text-slate-800 tracking-tight">Rp <?= number_format($monthSales,0,",",".") ?></h3>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-emerald-600 font-bold flex items-center bg-emerald-50 px-2 py-1 rounded-md">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                8.2%
                            </span>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-shopee-500 via-[#ff5b38] to-[#ff7a2e] rounded-2xl p-6 shadow-xl shadow-shopee-500/20 text-white relative overflow-hidden border border-shopee-400/30">
                        <div class="absolute right-0 bottom-0 opacity-20 transform translate-x-4 translate-y-4">
                            <svg class="w-28 h-28" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <p class="text-white/80 text-sm font-semibold mb-1 relative z-10">Keuntungan Bulan Ini</p>
                        <h3 class="text-2xl font-extrabold relative z-10 tracking-tight">Rp <?= number_format($monthProfit,0,",",".") ?></h3>
                        <div class="mt-4 flex items-center text-sm relative z-10">
                            <span class="bg-white/20 text-white px-2.5 py-1 rounded-md font-bold flex items-center backdrop-blur-md shadow-inner">
                                ▲ 15.3%
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100/50 shadow-sm hover:shadow-md transition-shadow">
                        <p class="text-slate-500 text-sm font-semibold mb-2">Produk Terlaris</p>
                        <h3 class="font-bold text-slate-800 text-lg leading-tight truncate" title="<?= $bestSeller['nama'] ?>">
                            <?= $bestSeller['nama'] ?>
                        </h3>
                        <div class="mt-4">
                            <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-bold bg-gradient-to-r from-shopee-50 to-orange-50 text-shopee-600 border border-shopee-100/50">
                                🔥 <?= $bestSeller['terjual'] ?> Terjual
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-100/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <p class="text-slate-500 text-sm font-semibold mb-1">Stok Menipis</p>
                            <span class="flex h-3.5 w-3.5 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-rose-500 border-2 border-white shadow-sm"></span>
                            </span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-rose-500 mt-1 tracking-tight"><?= count($lowStocks) ?></h3>
                        <p class="text-sm text-slate-400 mt-2 font-medium">Item butuh restock</p>
                    </div>

                </div>

                <div class="grid lg:grid-cols-3 gap-5 sm:gap-6 mt-6 w-full min-w-0">
                    <div class="lg:col-span-2 bg-white rounded-3xl border border-slate-100/60 shadow-sm p-4 sm:p-6 min-w-0">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 gap-4">
                            <div>
                                <h3 class="font-bold text-slate-800 text-lg">Grafik Penjualan</h3>
                                <p class="text-sm text-slate-400 font-medium mt-1">Performa 7 hari terakhir</p>
                            </div>
                            
                            <div class="relative group w-full sm:w-auto">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-shopee-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                
                                <select class="w-full sm:w-auto appearance-none bg-white border border-slate-200 hover:border-slate-300 rounded-xl pl-10 pr-10 py-2.5 text-sm font-bold text-slate-700 outline-none shadow-sm cursor-pointer focus:ring-4 focus:ring-shopee-500/15 focus:border-shopee-500 transition-all">
                                    <option value="minggu" class="font-semibold">Minggu Ini</option>
                                    <option value="bulan" class="font-semibold">Bulan Ini</option>
                                    <option value="tahun" class="font-semibold">Tahun Ini</option>
                                </select>

                                <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-shopee-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="relative w-full h-[250px] sm:h-[300px]">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl border border-slate-100/60 shadow-sm p-4 sm:p-6 flex flex-col min-w-0">
                        <div>
                            <h3 class="font-bold text-slate-800 text-lg">Distribusi Kategori</h3>
                            <p class="text-sm text-slate-400 font-medium mt-1">Berdasarkan total pendapatan</p>
                        </div>
                        <div class="relative flex-1 flex items-center justify-center min-h-[220px] w-full mt-6">
                            <canvas id="profitChart"></canvas>
                        </div>
                    </div>


                </div>

                <div class="w-full bg-white rounded-3xl border border-slate-100 shadow-sm p-6 mt-6">
                    
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-4">
                            <div class="bg-rose-50 p-3 rounded-2xl text-rose-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-800 text-lg">Perhatian Stok</h3>
                                <p class="text-sm text-slate-400 font-medium">Item yang membutuhkan restock segera</p>
                            </div>
                        </div>
                        <button onclick="window.location.href='{{ route('katalogbarang') }}'"
                            class="text-sm font-bold text-shopee-600 bg-shopee-50 hover:bg-shopee-100 px-5 py-2.5 rounded-xl transition-all">
                            Kelola Inventaris
                        </button>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <?php foreach($lowStocks as $stock): ?>
                        <div class="group flex items-center justify-between p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-rose-200 hover:bg-rose-50/30 transition-all duration-300">
                            <div class="flex items-center gap-4 min-w-0">
                                <div class="w-12 h-12 rounded-xl bg-white border border-slate-100 flex items-center justify-center text-slate-400 shadow-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                </div>
                                <div class="min-w-0">
                                    <h4 class="font-bold text-slate-800 text-sm truncate"><?= $stock['nama'] ?></h4>
                                    <p class="text-rose-500 text-[11px] font-bold uppercase tracking-wider mt-0.5">Sisa: <?= $stock['stok'] ?></p>
                                </div>
                            </div>
                            <div class="ml-2">
                                <span class="inline-block w-2.5 h-2.5 rounded-full bg-rose-400 animate-pulse"></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            </div>
        </main>
    </div>

<script>
    // --- Mobile Sidebar Logic ---
    const menuBtn = document.getElementById('menuBtn');
    const closeSidebar = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
        const isOpen = !sidebar.classList.contains('-translate-x-full');
        if (isOpen) {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
        } else {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; 
        }
    }

    menuBtn.addEventListener('click', toggleSidebar);
    closeSidebar.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', toggleSidebar);

    // --- Global Chart Styling ---
    Chart.defaults.font.family = '"Plus Jakarta Sans", sans-serif';
    Chart.defaults.color = '#94a3b8'; // slate-400
    Chart.defaults.scale.grid.color = '#f1f5f9'; // slate-100
    Chart.defaults.scale.grid.borderColor = 'transparent'; // Hapus garis pinggir grafik

    // --- Sales Chart (Bar) ---
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    
    // Create elegant vertical gradient for bars
    const barGradient = salesCtx.createLinearGradient(0, 0, 0, 300);
    barGradient.addColorStop(0, '#ee4d2d'); // shopee-500
    barGradient.addColorStop(1, '#ff9666'); // bright orange
    
    // Create shadow effect plugin for Chart.js
    const shadowPlugin = {
        beforeDraw: (chart) => {
            const ctx = chart.ctx;
            const _fill = ctx.fill;
            ctx.fill = function () {
                ctx.save();
                ctx.shadowColor = 'rgba(238, 77, 45, 0.25)';
                ctx.shadowBlur = 10;
                ctx.shadowOffsetY = 4;
                _fill.apply(this, arguments);
                ctx.restore();
            };
        }
    };

    new Chart(salesCtx, {
        type: 'bar',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                label: 'Penjualan',
                data: [120, 220, 180, 350, 520, 280, 250],
                backgroundColor: barGradient,
                borderRadius: 8, // Sudut membulat yang lebih elegan
                barPercentage: 0.5, // Lebar bar
                borderSkipped: false
            }]
        },
        plugins: [shadowPlugin],
        options: {
            responsive: true,
            maintainAspectRatio: false, // Kunci responsif: membiarkan CSS parent mengatur tinggi
            layout: { padding: { top: 10 } },
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#0f172a',
                    padding: 14,
                    titleFont: { size: 13, family: '"Plus Jakarta Sans"', weight: 'bold' },
                    bodyFont: { size: 14, family: '"Plus Jakarta Sans"', weight: '500' },
                    cornerRadius: 12,
                    displayColors: false,
                    callbacks: {
                        label: function(context) {
                            return 'Rp ' + context.parsed.y + 'k';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    border: { display: false },
                    grid: { drawBorder: false, color: '#f8fafc' },
                    ticks: { font: { weight: '500' } }
                },
                x: {
                    border: { display: false },
                    grid: { display: false },
                    ticks: { font: { weight: '600' } }
                }
            }
        }
    });

    // --- Profit Chart (Doughnut) ---
    const profitCtx = document.getElementById('profitChart').getContext('2d');
    
    new Chart(profitCtx, {
        type: 'doughnut',
        data: {
            labels: ['Elektronik', 'Fashion', 'Rumah Tangga', 'Lainnya'],
            datasets: [{
                data: [45, 28, 15, 12],
                backgroundColor: [
                    '#ee4d2d', // shopee
                    '#f97316', // orange-500
                    '#fbbf24', // amber-400
                    '#f1f5f9'  // slate-100
                ],
                borderWidth: 4, // Border antar irisan
                borderColor: '#ffffff',
                hoverOffset: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Kunci responsif
            cutout: '72%', // Membuat cincin lebih tebal tapi tetap modern
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 20,
                        font: { size: 12, family: '"Plus Jakarta Sans"', weight: '600' }
                    }
                },
                tooltip: {
                    backgroundColor: '#0f172a',
                    padding: 12,
                    cornerRadius: 10,
                    titleFont: { family: '"Plus Jakarta Sans"' },
                    bodyFont: { family: '"Plus Jakarta Sans"', weight: 'bold' }
                }
            }
        }
    });
</script>

</body>
</html>