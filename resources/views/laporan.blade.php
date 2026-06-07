<?php
// ==========================
// DUMMY DATA LAPORAN
// ==========================
$data_pemasukan = [
    ["tgl" => "2023-10-25", "desc" => "Penjualan iPhone 15 Pro Max", "nominal" => 20500000],
    ["tgl" => "2023-10-24", "desc" => "Penjualan Airpods Pro Gen 2", "nominal" => 3900000],
    ["tgl" => "2023-10-23", "desc" => "Penjualan MacBook Air M2", "nominal" => 16500000],
    ["tgl" => "2023-10-22", "desc" => "Penjualan Samsung Galaxy S25 Ultra", "nominal" => 18900000],
    ["tgl" => "2023-10-21", "desc" => "Penjualan Apple Watch Ultra 2", "nominal" => 10200000],
    ["tgl" => "2023-10-20", "desc" => "Penjualan Sony WH-1000XM5", "nominal" => 5200000],
    ["tgl" => "2023-10-19", "desc" => "Penjualan Logitech MX Master 3S", "nominal" => 1850000],
    ["tgl" => "2023-10-18", "desc" => "Penjualan Keychron K2 Mechanical", "nominal" => 1350000],
    ["tgl" => "2023-10-17", "desc" => "Penjualan JBL Flip 6", "nominal" => 1750000],
    ["tgl" => "2023-10-16", "desc" => "Penjualan Dell UltraSharp 27\"", "nominal" => 5500000],
    ["tgl" => "2023-10-25", "desc" => "Penjualan iPhone 15 Pro Max", "nominal" => 20500000],
    ["tgl" => "2023-10-24", "desc" => "Penjualan Airpods Pro Gen 2", "nominal" => 3900000],
    ["tgl" => "2023-10-23", "desc" => "Penjualan MacBook Air M2", "nominal" => 16500000],
    ["tgl" => "2023-10-22", "desc" => "Penjualan Samsung Galaxy S25 Ultra", "nominal" => 18900000],
    ["tgl" => "2023-10-21", "desc" => "Penjualan Apple Watch Ultra 2", "nominal" => 10200000],
    ["tgl" => "2023-10-20", "desc" => "Penjualan Sony WH-1000XM5", "nominal" => 5200000],
    ["tgl" => "2023-10-19", "desc" => "Penjualan Logitech MX Master 3S", "nominal" => 1850000],
    ["tgl" => "2023-10-18", "desc" => "Penjualan Keychron K2 Mechanical", "nominal" => 1350000],
    ["tgl" => "2023-10-17", "desc" => "Penjualan JBL Flip 6", "nominal" => 1750000],
    ["tgl" => "2023-10-16", "desc" => "Penjualan Dell UltraSharp 27\"", "nominal" => 5500000],
];

$data_pengeluaran = [
    ["tgl" => "2023-10-25", "desc" => "Restock Magic Mouse (5x)", "nominal" => 6500000],
    ["tgl" => "2023-10-24", "desc" => "Biaya Listrik & Internet", "nominal" => 850000],
    ["tgl" => "2023-10-22", "desc" => "Biaya Kemasan & Lakban", "nominal" => 150000],
    ["tgl" => "2023-10-21", "desc" => "Pembelian Stok Airpods Pro Gen 2", "nominal" => 12800000],
    ["tgl" => "2023-10-20", "desc" => "Pembelian Stok iPhone 15 Pro Max", "nominal" => 36000000],
    ["tgl" => "2023-10-19", "desc" => "Biaya Iklan Facebook Ads", "nominal" => 2500000],
    ["tgl" => "2023-10-18", "desc" => "Biaya Iklan Instagram Ads", "nominal" => 1750000],
    ["tgl" => "2023-10-17", "desc" => "Gaji Admin Toko", "nominal" => 3000000],
    ["tgl" => "2023-10-16", "desc" => "Sewa Gudang Bulanan", "nominal" => 4500000],
    ["tgl" => "2023-10-15", "desc" => "Pembelian Bubble Wrap & Kardus", "nominal" => 500000],
];

// Kalkulasi Total Dummy
$total_pemasukan = 40900000;
$total_pengeluaran = 7500000;
$net_profit = $total_pemasukan - $total_pengeluaran;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan - Mini ERP</title>

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
                <a href="{{ route('kontak') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Kontak Supplier
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-shopee-50 to-white text-shopee-600 rounded-xl font-semibold transition-all border border-shopee-100 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
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
                        <h2 class="font-bold text-xl text-slate-800 tracking-tight">Laporan Keuangan</h2>
                        <p class="text-slate-500 text-sm hidden sm:block font-medium">Monitoring profit & cashflow</p>
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
                    <div class="flex items-center gap-3 w-full sm:w-auto">
                        <div class="relative flex-1 sm:flex-none">
                            <input type="month" value="<?php echo date('Y-m'); ?>" class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 outline-none text-sm font-bold text-slate-600 shadow-sm transition-all cursor-pointer">
                        </div>
                        <button class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 p-3 rounded-xl shadow-sm transition-colors" title="Filter Lanjutan">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        </button>
                    </div>
                    <button class="w-full sm:w-auto bg-slate-800 hover:bg-slate-900 text-white px-5 py-3 rounded-xl shadow-lg shadow-slate-800/30 font-bold transition-all flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        Cetak PDF
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6 mb-8 w-full min-w-0">
                    
                    <div class="bg-white rounded-3xl p-6 border border-slate-100/60 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
                        <div class="absolute right-0 top-0 p-4 opacity-25 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-24 h-24 text-emerald-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        </div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-2 relative z-10">Total Pemasukan</p>
                        <h3 class="text-2xl font-extrabold text-emerald-600 relative z-10 tracking-tight">Rp <?= number_format($total_pemasukan,0,",",".") ?></h3>
                    </div>

                    <div class="bg-white rounded-3xl p-6 border border-slate-100/60 shadow-sm relative overflow-hidden group hover:shadow-md transition-all">
                        <div class="absolute right-0 top-0 p-4 opacity-25 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-24 h-24 text-rose-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        </div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-2 relative z-10">Total Pengeluaran</p>
                        <h3 class="text-2xl font-extrabold text-rose-600 relative z-10 tracking-tight">Rp <?= number_format($total_pengeluaran,0,",",".") ?></h3>
                    </div>

                    <div class="bg-gradient-to-br from-shopee-500 via-[#ff5b38] to-[#ff7a2e] rounded-3xl p-6 shadow-xl shadow-shopee-500/20 text-white relative overflow-hidden border border-shopee-400/30 transform hover:-translate-y-1 transition-all">
                        <div class="absolute right-0 bottom-0 opacity-20 transform translate-x-4 translate-y-4">
                            <svg class="w-28 h-28" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest mb-2 relative z-10">Net Profit (Laba Bersih)</p>
                        <h3 class="text-2xl font-extrabold relative z-10 tracking-tight">Rp <?= number_format($net_profit,0,",",".") ?></h3>
                    </div>

                </div>

                <div class="grid lg:grid-cols-2 gap-5 sm:gap-6 min-w-0 h-full">
                    
                    {{-- <div class="bg-green-700 rounded-3xl border border-slate-100/60 shadow-sm overflow-hidden flex flex-col min-w-0"> --}}
                    <div class="bg-white scrollbar-hide rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col h-full">
                        <div class="px-6 py-5 border-b border-emerald-100/50 bg-emerald-100/50 flex items-center gap-3">
                            <div class="bg-emerald-200 p-2 rounded-xl text-emerald-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 11l5-5m0 0l5 5m-5-5v12"></path></svg>
                            </div>
                            <h3 class="font-bold text-emerald-700 text-lg">Rincian Pemasukan</h3>
                        </div>
                        {{-- <div class="overflow-x-auto"> --}}
                        <div class="overflow-y-auto flex-1 scrollbar-hide">
                            <table class="w-full text-left whitespace-nowrap min-w-[450px]">
                                <thead class="bg-slate-50 text-[10px] text-slate-400 uppercase font-bold tracking-widest border-b border-slate-100/60 sticky top-0 z-10">
                                    <tr>
                                        <th class="px-6 py-4">Tanggal</th>
                                        <th class="px-6 py-4">Keterangan</th>
                                        <th class="px-6 py-4 text-right">Nominal</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100/80 text-sm font-medium">
                                    <?php foreach($data_pemasukan as $pem): ?>
                                    <tr class="hover:bg-slate-50/50 transition-colors group">
                                        <td class="px-6 py-4 text-slate-500 font-semibold"><?= date('d M Y', strtotime($pem['tgl'])) ?></td>
                                        <td class="px-6 py-4 text-slate-700 group-hover:text-slate-900 transition-colors"><?= $pem['desc'] ?></td>
                                        <td class="px-6 py-4 text-right text-emerald-600 font-bold">
                                            + Rp <?= number_format($pem['nominal'],0,",",".") ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- <div class="bg-white rounded-3xl border border-slate-100/60 shadow-sm overflow-hidden flex flex-col min-w-0"> --}}
                    <div class="bg-white scrollbar-hide rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col h-full">
                        <div class="px-6 py-5 border-b border-rose-100/50 bg-rose-100/50 flex items-center gap-3">
                            <div class="bg-rose-200 p-2 rounded-xl text-rose-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 13l-5 5m0 0l-5-5m5 5V6"></path></svg>
                            </div>
                            <h3 class="font-bold text-rose-700 text-lg">Rincian Pengeluaran</h3>
                        </div>
                        {{-- <div class="overflow-x-auto"> --}}
                        <div class="overflow-y-auto flex-1 scrollbar-hide">
                            <table class="w-full text-left whitespace-nowrap min-w-[450px]">
                                <thead class="bg-slate-50 text-[10px] text-slate-400 uppercase font-bold tracking-widest border-b border-slate-100/60 sticky top-0 z-10">
                                    <tr>
                                        <th class="px-6 py-4">Tanggal</th>
                                        <th class="px-6 py-4">Keterangan</th>
                                        <th class="px-6 py-4 text-right">Nominal</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100/80 text-sm font-medium">
                                    <?php foreach($data_pengeluaran as $peng): ?>
                                    <tr class="hover:bg-slate-50/50 transition-colors group">
                                        <td class="px-6 py-4 text-slate-500 font-semibold"><?= date('d M Y', strtotime($peng['tgl'])) ?></td>
                                        <td class="px-6 py-4 text-slate-700 group-hover:text-slate-900 transition-colors"><?= $peng['desc'] ?></td>
                                        <td class="px-6 py-4 text-right text-rose-600 font-bold">
                                            - Rp <?= number_format($peng['nominal'],0,",",".") ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

<script>
    // Toggle Sidebar Mobile
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