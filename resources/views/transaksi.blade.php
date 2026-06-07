<?php
// ==========================
// DUMMY DATA UNTUK FORM & TABEL
// ==========================

$kategori_pengeluaran = ["Restock Barang", "Biaya Operasional", "Gaji Karyawan", "Lainnya"];
$produk_tersedia = ["iPhone 15 Pro Max", "MacBook Air M2", "Magic Mouse", "Airpods Pro Gen 2"];

$riwayat_hari_ini = [
    [
        "jam" => "10:45",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - iPhone 15 Pro Max (1x)",
        "nominal" => 20500000
    ],
    [
        "jam" => "09:30",
        "tipe" => "pengeluaran",
        "keterangan" => "Biaya Operasional - Bayar Listrik & Internet",
        "nominal" => 850000
    ],
    [
        "jam" => "08:15",
        "tipe" => "pengeluaran",
        "keterangan" => "Restock Barang - Magic Mouse (5x)",
        "nominal" => 6500000
    ],

    // Data tambahan
    [
        "jam" => "11:20",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - MacBook Air M3 (1x)",
        "nominal" => 18900000
    ],
    [
        "jam" => "11:45",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - AirPods Pro Gen 2 (3x)",
        "nominal" => 8700000
    ],
    [
        "jam" => "12:10",
        "tipe" => "pengeluaran",
        "keterangan" => "Pembelian Packaging Premium",
        "nominal" => 450000
    ],
    [
        "jam" => "12:35",
        "tipe" => "pengeluaran",
        "keterangan" => "Biaya Iklan Marketplace",
        "nominal" => 1250000
    ],
    [
        "jam" => "13:15",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - Apple Watch Series 10 (2x)",
        "nominal" => 11200000
    ],
    [
        "jam" => "13:50",
        "tipe" => "pengeluaran",
        "keterangan" => "Pengiriman Barang ke Supplier",
        "nominal" => 375000
    ],
    [
        "jam" => "14:20",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - iPad Air M2 (1x)",
        "nominal" => 10900000
    ],
    [
        "jam" => "15:05",
        "tipe" => "pengeluaran",
        "keterangan" => "Gaji Karyawan Harian",
        "nominal" => 1500000
    ],
    [
        "jam" => "15:40",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - Samsung Galaxy S25 Ultra (1x)",
        "nominal" => 17999000
    ],
    [
        "jam" => "16:15",
        "tipe" => "pengeluaran",
        "keterangan" => "Restock Charger USB-C (20x)",
        "nominal" => 2200000
    ],
    [
        "jam" => "16:50",
        "tipe" => "pemasukan",
        "keterangan" => "Penjualan - Logitech MX Master 3S (4x)",
        "nominal" => 5400000
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Transaksi - Mini ERP</title>

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
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-shopee-50 to-white text-shopee-600 rounded-xl font-semibold transition-all border border-shopee-100 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Catat Transaksi
                </a>
                <a href="{{ route('katalogbarang') }}" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-slate-800 hover:bg-slate-50/80 rounded-xl font-medium transition-all group">
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
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
                        <h2 class="font-bold text-xl text-slate-800 tracking-tight">Pencatatan Transaksi</h2>
                        <p class="text-slate-500 text-sm hidden sm:block font-medium">Input manual pergerakan barang dan kas</p>
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
                
                <div class="grid lg:grid-cols-12 gap-6 w-full min-w-0">
                    
                    <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-100/60 shadow-sm p-6 sm:p-8 min-w-0 self-start">
                        
                        <div class="flex bg-slate-50/80 border border-slate-100 p-1.5 rounded-2xl mb-8">
                            <button id="btnPemasukan" onclick="switchTab('pemasukan')" class="flex-1 text-sm font-bold py-3.5 rounded-xl bg-white text-shopee-500 shadow-sm transition-all duration-200">
                                Pemasukan (Barang Keluar)
                            </button>
                            <button id="btnPengeluaran" onclick="switchTab('pengeluaran')" class="flex-1 text-sm font-bold py-3.5 rounded-xl text-slate-500 hover:text-slate-700 transition-all duration-200">
                                Pengeluaran (Barang Masuk)
                            </button>
                        </div>

                        <form id="formPemasukan" class="space-y-6">
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal Transaksi</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                        <input type="date" value="<?php echo date('Y-m-d'); ?>" class="w-full pl-11 pr-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold outline-none transition-all">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Barang Terjual</label>
                                    <select class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold outline-none transition-all appearance-none cursor-pointer">
                                        <option value="" class="text-slate-400">Pilih barang...</option>
                                        <?php foreach($produk_tersedia as $produk): ?>
                                            <option value="<?= $produk ?>"><?= $produk ?></option>
                                        <?php endforeach; ?>
                                        <option value="lainnya">Lainnya (Bukan Barang Stok)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Jumlah (Qty)</label>
                                    <input type="number" min="1" placeholder="1" class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold placeholder:text-slate-400 placeholder:font-normal outline-none transition-all">
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Total Harga (Rp)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 text-sm font-bold">
                                            Rp
                                        </div>
                                        <input type="text" placeholder="0" class="w-full pl-10 pr-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-bold placeholder:text-slate-400 placeholder:font-normal outline-none transition-all">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Keterangan / Catatan Tambahan</label>
                                <textarea rows="3" placeholder="Contoh: Pembayaran lunas via transfer BCA" class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold placeholder:text-slate-400 placeholder:font-normal outline-none transition-all resize-none"></textarea>
                            </div>

                            <button type="button" class="w-full bg-gradient-to-r from-emerald-500 to-emerald-400 hover:from-emerald-600 hover:to-emerald-500 text-white py-4 rounded-xl text-sm font-bold shadow-lg shadow-emerald-500/30 transform hover:-translate-y-0.5 transition-all duration-200 flex justify-center items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                Simpan Pemasukan
                            </button>
                        </form>

                        <form id="formPengeluaran" class="space-y-6 hidden">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal Transaksi</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                        <input type="date" value="<?php echo date('Y-m-d'); ?>" class="w-full pl-11 pr-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold outline-none transition-all">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori Pengeluaran</label>
                                    <select class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold outline-none transition-all cursor-pointer">
                                        <option value="" class="text-slate-400">Pilih kategori...</option>
                                        <?php foreach($kategori_pengeluaran as $kat): ?>
                                            <option value="<?= $kat ?>"><?= $kat ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Rincian Keperluan / Nama Barang Masuk</label>
                                <input type="text" placeholder="Contoh: Beli 5 pcs Magic Mouse dari Supplier A" class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-semibold placeholder:text-slate-400 placeholder:font-normal outline-none transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Total Pengeluaran (Rp)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 text-sm font-bold">Rp</div>
                                    <input type="text" placeholder="0" class="w-full pl-10 pr-4 py-3.5 bg-slate-50/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-shopee-500/20 focus:border-shopee-500 text-slate-700 text-sm font-bold placeholder:text-slate-400 placeholder:font-normal outline-none transition-all">
                                </div>
                            </div>

                            <button type="button" class="w-full bg-gradient-to-r from-rose-500 to-rose-400 hover:from-rose-600 hover:to-rose-500 text-white py-4 rounded-xl text-sm font-bold shadow-lg shadow-rose-500/30 transform hover:-translate-y-0.5 transition-all duration-200 flex justify-center items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"></path></svg>
                                Catat Pengeluaran
                            </button>
                        </form>

                    </div>

                    <div class="lg:col-span-5 flex flex-col gap-5 sm:gap-6 min-w-0">
                        
                        <div class="bg-gradient-to-br from-slate-800 via-slate-900 to-slate-950 rounded-3xl p-6 border border-slate-700/50 shadow-xl shadow-slate-900/20 relative overflow-hidden group hover:-translate-y-1 transition-all duration-300">

                            <div class="absolute -top-16 -right-16 w-40 h-40 bg-emerald-500/10 rounded-full blur-3xl"></div>

                            <div class="relative z-10 flex items-center justify-between mb-5">
                                <div>
                                    <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em]">
                                        Status Keuangan Hari Ini
                                    </p>
                                    <h3 class="text-white text-sm font-bold mt-0.5">
                                        Ringkasan Keuangan
                                    </h3>
                                </div>

                                <div class="bg-slate-700/50 p-2.5 rounded-xl">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3 0-5 1.5-5 4s2 4 5 4 5-1.5 5-4-2-4-5-4zm0 0V5m0 11v3"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="relative z-10 mb-6">
                                <p class="text-slate-400 text-[10px] uppercase tracking-widest font-bold mb-1">
                                    Saldo Bersih
                                </p>
                                <h2 class="text-3xl font-black text-white tracking-tight">
                                    Rp 13.15M
                                </h2>
                            </div>

                            <div class="h-px bg-slate-700/60 mb-5"></div>

                            <div class="grid grid-cols-2 gap-3 relative z-10">
                                <div class="bg-emerald-500/10 border border-emerald-500/20 rounded-2xl p-3.5">
                                    <div class="flex items-center gap-1.5 mb-1.5">
                                        <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7" />
                                        </svg>
                                        <span class="text-emerald-400 text-[9px] font-bold uppercase tracking-wider">Pemasukan</span>
                                    </div>
                                    <p class="text-white text-sm font-bold">Rp 20.5M</p>
                                </div>

                                <div class="bg-rose-500/10 border border-rose-500/20 rounded-2xl p-3.5">
                                    <div class="flex items-center gap-1.5 mb-1.5">
                                        <svg class="w-3 h-3 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" />
                                        </svg>
                                        <span class="text-rose-400 text-[9px] font-bold uppercase tracking-wider">Pengeluaran</span>
                                    </div>
                                    <p class="text-white text-sm font-bold">Rp 7.35M</p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="bg-white rounded-3xl border border-slate-100/60 shadow-sm overflow-hidden flex flex-col min-w-0 flex-1"> --}}
                        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden flex flex-col">

                            <!-- HEADER -->
                            <div class="px-6 py-5 border-b border-slate-100/60 bg-white flex items-center justify-between">
                                <h3 class="font-bold text-slate-800 text-lg">Input Terakhir</h3>

                                <span class="bg-white border border-slate-400 text-slate-500 text-xs px-2.5 py-1 rounded-md font-bold uppercase tracking-wider">
                                    Hari Ini
                                </span>
                            </div>

                            <!-- SCROLL -->
                            <div class="overflow-y-auto scrollbar-hide max-h-[420px] p-3 space-y-2">

                                <?php foreach($riwayat_hari_ini as $riwayat): ?>
                                <div class="group flex items-start justify-between gap-3 p-3 rounded-2xl hover:bg-slate-50/70 transition">

                                    <!-- ICON -->
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0
                                        <?= $riwayat['tipe'] == 'pemasukan'
                                            ? 'bg-emerald-50 text-emerald-600 border border-emerald-100'
                                            : 'bg-rose-50 text-rose-600 border border-rose-100' ?>">

                                        <?php if($riwayat['tipe'] == 'pemasukan'): ?>
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 11l5-5m0 0l5 5m-5-5v12"/>
                                            </svg>
                                        <?php else: ?>
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 13l-5 5m0 0l-5-5m5 5V6"/>
                                            </svg>
                                        <?php endif; ?>
                                    </div>

                                    <!-- CONTENT -->
                                    <div class="flex-1 min-w-0">

                                        <!-- TOP ROW -->
                                        <div class="flex items-center justify-between mb-1">

                                            <span class="text-[10px] font-bold text-slate-400 tracking-widest bg-slate-100 px-2 py-0.5 rounded-md">
                                                <?= $riwayat['jam'] ?>
                                            </span>

                                            <span class="text-sm font-extrabold
                                                <?= $riwayat['tipe'] == 'pemasukan' ? 'text-emerald-600' : 'text-rose-600' ?>">
                                                <?= $riwayat['tipe'] == 'pemasukan' ? '+' : '-' ?>
                                                Rp <?= number_format($riwayat['nominal'],0,",",".") ?>
                                            </span>

                                        </div>

                                        <!-- DESC -->
                                        <p class="text-sm font-medium text-slate-600 group-hover:text-slate-900 transition line-clamp-1">
                                            <?= $riwayat['keterangan'] ?>
                                        </p>

                                    </div>

                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

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

    function switchTab(type) {
        const btnPem = document.getElementById('btnPemasukan');
        const btnPeng = document.getElementById('btnPengeluaran');
        const formPem = document.getElementById('formPemasukan');
        const formPeng = document.getElementById('formPengeluaran');

        const activeClass = ['bg-white', 'text-shopee-500', 'shadow-sm'];
        const inactiveClass = ['text-slate-500', 'hover:text-slate-700'];

        if(type === 'pemasukan') {
            formPem.classList.remove('hidden');
            formPeng.classList.add('hidden');
            
            btnPem.classList.add(...activeClass);
            btnPem.classList.remove(...inactiveClass);
            
            btnPeng.classList.add(...inactiveClass);
            btnPeng.classList.remove(...activeClass);
        } else {
            formPeng.classList.remove('hidden');
            formPem.classList.add('hidden');
            
            btnPeng.classList.add(...activeClass);
            btnPeng.classList.remove(...inactiveClass);
            
            btnPem.classList.add(...inactiveClass);
            btnPem.classList.remove(...activeClass);
        }
    }
</script>

</body>
</html>