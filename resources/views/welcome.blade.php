<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PORTAL MURUNG RAYA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('lambang_mura.png') }}">

    <!-- Meta deskripsi untuk SEO. Ini yang ditampilkan Google di hasil pencarian -->
    <meta name="description"
        content="Situs resmi Pemerintah Kabupaten Murung Raya. Temukan informasi layanan publik, berita daerah, dan profil pemerintahan.">
    <meta name="robots" content="index, follow"> <!-- biarkan Google mengindeks -->
    <link rel="canonical" href="https://murungrayakab.go.id"> <!-- ganti dengan domain -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">








</head>

<body>

    <!-- Background Carousel -->
    <div id="bgCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="300000">
        <div class="carousel-inner">
            {{-- <div class="carousel-item active">
                <img src="Tugu_Bundaran_Emas.jpg" alt="Background 1">
            </div>
            <div class="carousel-item">
                <img src="Kantor_Bupati_Murung_Raya.jpg" alt="Background 2">
            </div>
            <div class="carousel-item">
                <img src="Kantor_Kecamatan_Murung,_Murung_Raya.jpg" alt="Background 3">
            </div> --}}
            <div class="video-container">
                <video autoplay loop muted playsinline>
                    <source src="Tana Malai Tolung Lingu (MURA).mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Foto di atas video -->
                <img src="lambang_mura.png" alt="Logo" class="overlay-image top-left" />
                <img src="lambang_mura.png" alt="Logo" class="overlay-image top-right" />
                <img src="lambang_mura.png" alt="Logo" class="overlay-image bottom-left" />
                <img src="lambang_mura.png" alt="Logo" class="overlay-image bottom-right" />

                <img src="lambang_mura.png" alt="Middle Left" class="overlay-image middle-left" />
                <img src="lambang_mura.png" alt="Middle Right" class="overlay-image middle-right" />
            </div>
        </div>
    </div>



    <!-- Content with AOS Animated Cards -->
    <div>
        <img src="lambang_mura.png" alt="lambang" width="178" height="134" class="center">
    </div>

    <h1 style="text-align:center; color:rgb(255, 255, 255);">PEMERINTAH KABUPATEN MURUNG RAYA</h1>
    <h5 style="text-align:center; color:rgb(255, 255, 255);" class="mb-3"> TANA MALAI TOLONG LINGU</h5>

    <div class="container" style="max-width: 1000px">
        <div class="row g-4 mt-2">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-2" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative ">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            MURUNG RAYA
                        </div>
                    </div>

                    <!-- MODAL MOBILE -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        class="absolute inset-x-0 mx-auto bottom-[180px] sm:hidden 
                        z-50 bg-white rounded-xl shadow-xl p-4 w-[90vw] max-w-sm text-center">

                        <!-- Panah Mobile -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 
                            w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h5 class="text-lg font-semibold text-gray-800 mb-4">MURUNG RAYA</h5>

                        <div class="space-y-2">
                            <a href="{{ route('murungraya.index') }}#peta" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                PETA WILAYAH</a>
                            <a href="{{ route('murungraya.index') }}#visi-misi" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                VISI DAN MISI</a>
                            <a href="{{ route('murungraya.index') }}#sejarah" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                SEJARAH</a>
                        </div>

                        <button @click="open = false"
                            class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700 transition duration-200">Tutup</button>
                    </div>

                    <!-- MODAL DESKTOP -->
                    <div x-show="open" x-transition:enter="" x-transition:enter-start="" x-transition:enter-end=""
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        x-bind:class="open ? 'animate-bounceUp' : ''"
                        class="absolute left-[84px] -translate-x-1/2 top-[-255px] hidden sm:block 
                        z-50 bg-white rounded-xl shadow-xl p-4 w-72 max-w-sm text-center">

                        <!-- Panah Desktop -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 
                            w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h5 class="text-xl font-semibold text-gray-800 mb-4">MURUNG RAYA</h5>

                        <div class="space-y-2">
                            <a href="{{ route('murungraya.index') }}#peta" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                PETA WILAYAH</a>
                            <a href="{{ route('murungraya.index') }}#visi-misi" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                VISI DAN MISI</a>
                            <a href="{{ route('murungraya.index') }}#sejarah" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                SEJARAH</a>
                        </div>

                        <button @click="open = false"
                            class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700 transition duration-200">Tutup</button>
                    </div>



                </div>


            </div>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="rotate = true;"
                        :class="{ 'animate-flip': rotate }" @animationend="rotate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://jdih.murungrayakab.go.id/" target="_blank"><img src="asset/produkhukum.png"
                                alt="Avatar"
                                class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" /></a>
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            PRODUK HUKUM
                        </div>
                    </div>

                </div>


            </div>





            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="rotate = true; openModal1()" :class="{ 'animate-flip': rotate }"
                        @animationend="rotate = false"
                        class="cursor-pointer bg-black bg-opacity-50 rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
                        <img src="asset/layananpublik.jpg" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            PELAYANAN PUBLIK
                        </div>
                    </div>
                </div>
            </div>


            <div id="popupCardModal1"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div
                    class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative max-h-150 overflow-y-auto">

                    <!-- Close Button -->
                    <button onclick="closeModal1()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <h4 class="text-lg font-semibold text-center mb-4 text-gray-800">LAYANAN PUBLIK</h4>

                    <div class="flex flex-col gap-2">
                        <a href="http://dpmptsp.web.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">LAYANAN PERIZINAN</a>
                        <a href="https://disdukcapil.web.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">LAYANAN KEPENDUDUKAN</a>
                        <a href="https://dinkes.murungrayakab.go.id/2024/07/puskesmas-puruk-cahu.html"
                            class="btn btn-primary" target="_blank">LAYANAN PUSKESMAS</a>
                        <a href="https://rsud.murungrayakab.go.id/" class="btn btn-primary" target="_blank">RSUD
                            PURUK CAHU</a>
                        <a href="https://play.google.com/store/apps/details?id=mam.reader.imurungraya&hl=en"
                            class="btn btn-primary" target="_blank">IMURUNG RAYA</a>
                        <a href="https://layanan.murungrayakab.go.id/lpse.murungrayakab.go.id" class="btn btn-primary"
                            target="_blank">LPSE</a>
                        <a href="https://layanan.murungrayakab.go.id/smarttax.murungrayakab.go.id"
                            class="btn btn-primary" target="_blank">SMARTTAX</a>
                        <a href="https://infopublik.id/mediacenter/2614" class="btn btn-primary" target="_blank">INFO
                            PUBLIK</a>
                        <a href="https://ppid.murungrayakab.go.id/" class="btn btn-primary" target="_blank">PPID</a>
                        <a href="http://jdih.murungrayakab.go.id/" class="btn btn-primary" target="_blank">JDIH</a>
                        <a href="http://jdih-dprd.murungrayakab.go.id/" class="btn btn-primary" target="_blank">JDIH
                            DPRD</a>



                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="rotate = true; openModal3()" :class="{ 'animate-flip': rotate }"
                        @animationend="rotate = false"
                        class="cursor-pointer bg-black bg-opacity-50 rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
                        <img src="asset/gedung.jpg" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            PELAYANAN PEMERINTAH
                        </div>
                    </div>
                </div>
            </div>


            <div id="popupCardModal3"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div
                    class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative max-h-150 overflow-y-auto">

                    <!-- Close Button -->
                    <button onclick="closeModal3()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <h4 class="text-lg font-semibold text-center mb-4 text-gray-800">LAYANAN ADMINISTRASI PEMERINTAH
                    </h4>

                    <div class="flex flex-col gap-2">
                        <a href="https://multidomain.mail.go.id/mail/" class="btn btn-primary" target="_blank">EMAIL
                            PEMERINTAH DAERAH</a>
                        <a href="https://srikandi.arsip.go.id/auth/login" class="btn btn-primary"
                            target="_blank">SRIKANDI</a>
                        <a href="http://helpdesk.murungrayakab.go.id/" class="btn btn-primary" target="_blank">PUSAT
                            BANTUAN</a>
                        <a href="http://simpan.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">MANAJEMEN PENGETAHUAN</a>
                        <a href="https://kinerja.bkn.go.id/login" class="btn btn-primary" target="_blank">eKINERJA
                            BKN</a>
                        <a href="http://e-kinerja.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">PRESENSI</a>
                        <a href="https://sisapan.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">SISAPAN</a>
                        <a href="https://helpdesk.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">HELPDESK</a>




                    </div>
                </div>
            </div>





            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="rotate = true;"
                        :class="{ 'animate-flip': rotate }" @animationend="rotate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://www.lapor.go.id/" target="_blank"><img src="asset/lapor.png" alt="Avatar"
                                class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" /></a>
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            LAPOR!
                        </div>
                    </div>

                </div>


            </div>



            <div class="col-12 col-sm-6 col-lg-4 col-xl-2" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative ">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="asset/tranparasi.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            TRANSPARASI
                        </div>
                    </div>

                    <!-- MODAL MOBILE -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        class="absolute inset-x-0 mx-auto bottom-[180px] sm:hidden 
                        z-50 bg-white rounded-xl shadow-xl p-4 w-[90vw] max-w-sm text-center">

                        <!-- Panah Mobile -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 
                            w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h5 class="text-lg font-semibold text-gray-800 mb-4">MURUNG RAYA</h5>

                        <div class="space-y-2">
                            <a href="http://ppid.murungrayakab.go.id/" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                PPID</a>
                            <a href="https://murakab.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=&Publikasi%5BkataKunci%5D=Murung+Raya+Dalam+Angka&Publikasi%5BcekJudul%5D=0&yt0=Tampilkan"
                                target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                MURUNG RAYA DALAM ANGKA</a>
                            <a href="https://data.murungrayakab.go.id/?files" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                IPKD</a>
                        </div>

                        <button @click="open = false"
                            class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700 transition duration-200">Tutup</button>
                    </div>

                    <!-- MODAL DESKTOP -->
                    <div x-show="open" x-transition:enter="" x-transition:enter-start="" x-transition:enter-end=""
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        x-bind:class="open ? 'animate-bounceUp' : ''"
                        class="absolute left-[84px] -translate-x-1/2 top-[-255px] hidden sm:block 
                        z-50 bg-white rounded-xl shadow-xl p-4 w-72 max-w-sm text-center">

                        <!-- Panah Desktop -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 
                            w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h5 class="text-xl font-semibold text-gray-800 mb-4">MURUNG RAYA</h5>

                        <div class="space-y-2">
                            <a href="http://ppid.murungrayakab.go.id/" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                PPID</a>
                            <a href="https://murakab.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=&Publikasi%5BkataKunci%5D=Murung+Raya+Dalam+Angka&Publikasi%5BcekJudul%5D=0&yt0=Tampilkan"
                                target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                MURUNG RAYA DALAM ANGKA</a>
                            <a href="https://data.murungrayakab.go.id/?files" target="_blank"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline"
                                style="text-decoration: none;">
                                IPKD</a>
                        </div>

                        <button @click="open = false"
                            class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700 transition duration-200">Tutup</button>
                    </div>



                </div>


            </div>





        </div>

        <div class="row g-4 mt-1">

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="rotate = true;"
                        :class="{ 'animate-flip': rotate }" @animationend="rotate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://pengumuman.murungrayakab.go.id/" target="_blank"><img
                                src="asset/pengunguman.png" alt="Avatar"
                                class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" /></a>
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            PENGUMUMAN
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="rotate = true;"
                        :class="{ 'animate-flip': rotate }" @animationend="rotate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://berita.murungrayakab.go.id/" target="_blank"><img src="asset/berita.png"
                                alt="Avatar"
                                class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" /></a>
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            BERITA
                        </div>
                    </div>

                </div>


            </div>


            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="asset/mcpkpk.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            MCP KPK
                        </div>
                    </div>

                    <!-- Modal di atas Avatar -->
                    <div x-show="open" x-transition:enter="" x-transition:enter-start="" x-transition:enter-end=""
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        x-bind:class="open ? 'animate-bounceUp' : ''"
                        class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72">
                        <!-- Panah Arah -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h3>
                        <div class="space-y-2">
                            <a href="#"
                                class="block w-full text-center bg-gray-400 text-white py-2 rounded hover:bg-gray-500 text-sm no-underline">Dinas
                                Pendidikan</a>
                            <a href="#"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline">Dinas
                                Kesehatan</a>
                            <a href="#"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline">Dinas
                                Kominfo</a>
                        </div>
                        <button @click="open = false"
                            class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
                    </div>
                </div>


            </div>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="rotate = true; openModal2()" :class="{ 'animate-flip': rotate }"
                        @animationend="rotate = false"
                        class="cursor-pointer bg-black bg-opacity-50 rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            PERANGKAT DAERAH
                        </div>
                    </div>
                </div>
            </div>


            <div id="popupCardModal2"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div
                    class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative max-h-150 overflow-y-auto">

                    <!-- Close Button -->
                    <button onclick="closeModal2()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <h4 class="text-lg font-semibold text-center mb-4 text-gray-800">PERANGKAT DAERAH</h4>

                    <div class="flex flex-col gap-2">
                        <a href="https://example.com" class="btn btn-primary" target="_blank">SETDA</a>
                        <a href="https://inspektorat.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">INSPEKTORAT</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">SETWAN</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISDIKBUD</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">SATPOL PP DAMKAR</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DINSOS</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISDALDUK KBP3A</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DLH</a>
                        <a href="https://dpmd.murungrayakab.go.id/" class="btn btn-primary" target="_blank">DPMD</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISPERINDANGKOP UKM</a>
                        <a href="https://dpmptsp.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">DPMPTSP</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISPARPORA</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISARPUS</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISHUB</a>
                        <a href="https://dinkes.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">DINKES</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISNAKERTRANS</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISPUPR</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DIS PKPP</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISHANPANG</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">DISTANIK</a>
                        <a href="https://diskominfo.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">DISKOMINFO SP</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">BAPPELITBANGDA</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">BPKAD</a>
                        <a href="https://bapenda.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">BAPENDA</a>
                        <a href="https://bkpsdm.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">BKPSDM</a>
                        <a href="https://bpbd.murungrayakab.go.id/" class="btn btn-primary" target="_blank">BPBD</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">BAKESBANGPOL</a>
                        <a href="https://disdukcapil.murungrayakab.go.id/" class="btn btn-primary"
                            target="_blank">DISDUKCAPIL</a>
                        <a href="https://rsud.murungrayakab.go.id/" class="btn btn-primary" target="_blank">RSUD
                            PURUK CAHU</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. MURUNG</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Tanah Siang</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Laung Tuhup</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Permata Intan</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Sumber Barito</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Tanah Siang
                            Selatan</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Barito Tuhup
                            Raya</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Uut Murung</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Seribu Riam</a>
                        <a href="https://example.com" class="btn btn-primary" target="_blank">KEC. Sungai Babuat</a>

                    </div>
                </div>
            </div>



            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="rotate = true;"
                        :class="{ 'animate-flip': rotate }" @animationend="rotate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://rekreasi.murungrayakab.go.id/" target="_blank"><img
                                src="asset/parawisata.png" alt="Avatar"
                                class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" /></a>
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            PARIWISATA
                        </div>
                    </div>

                </div>


            </div>


            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="rotate = true;"
                        :class="{ 'animate-flip': rotate }" @animationend="rotate = false"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://radioswaramurungraya.com/" target="_blank"><img src="asset/smurafm.png"
                                alt="Avatar"
                                class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" /></a>
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            RADIO MURA
                        </div>
                    </div>

                </div>


            </div>


        </div>

        <div class="row g-4">

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative mx-auto">

                <div x-data="{
                    open: false,
                    rotate: false,
                    showTooltip: false,
                    items: [
                        { iconType: 'image', label: 'asset/instagram.png', title: 'Instagram', href: 'https://www.instagram.com/diskominfomurakab' },
                        { iconType: 'image', label: 'asset/youtube.png', title: 'Youtube', href: 'https://www.youtube.com/channel/UC1HMVrTzdaLdGcyV94sFbYA' },
                        { iconType: 'image', label: 'asset/facebook.png', title: 'Facebook', href: 'https://www.facebook.com/diskominfomurakab/?locale=id_ID' },
                        { iconType: 'image', label: 'asset/whatsapp.png', title: 'Whatsapp', href: '#' },
                        { iconType: 'image', label: 'asset/twitter.png', title: 'X', href: '#' },
                
                    ]
                }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="open = !open"
                        class="bg-black rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="asset/sosmed.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            SOSIAL MEDIA
                        </div>
                    </div>

                    <!-- Modal di atas Avatar -->
                    <div x-show="open" x-transition
                        class="absolute top-[55px] left-[155px] max-[420px]:top-[55px] max-[420px]:left-[42%] sm:top-[55px] sm:left-[55px] transform -translate-x-1/2 -translate-y-1/2 w-0 h-0 z-0 pointer-events-none">
                        <template x-for="(item, index) in items" :key="index">
                            <a :href="item.href" target="_blank" :title="item.title"
                                class="absolute w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-md hover:bg-blue-700 transition-transform duration-300 text-lg pointer-events-auto"
                                :style="`
                                                                                                                                                                                                                                                                                                                                                                                  transform: rotate(${index * (360 / items.length)}deg)
                                                                                                                                                                                                                                                                                                                                                                                            translate(100px)
                                                                                                                                                                                                                                                                                                                                                                                            rotate(-${index * (360 / items.length)}deg);
                                                                                                                                                                                                                                                                                                                                                                                `">
                                <template x-if="item.iconType === 'image'">
                                    <img :src="item.label" alt="" class="w-6 h-6 rounded-full" />
                                </template>
                            </a>
                        </template>
                    </div>
                </div>


            </div>





        </div>

        <div class="row g-4">


            <h1 style="text-align:center; color:rgb(255, 255, 255);" class="mt-3"> TIRA TANGKA BALANG</h1>
            <h5 style="text-align:center; color:rgb(255, 255, 255);" class="mt-1"> murungrayakab.go.id</h5>

        </div>





    </div>
    </div>



    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>


    <script>
        function openModal1() {
            document.getElementById('popupCardModal1').classList.remove('hidden');
        }

        function closeModal1() {
            document.getElementById('popupCardModal1').classList.add('hidden');
        }
    </script>

    <script>
        function openModal2() {
            document.getElementById('popupCardModal2').classList.remove('hidden');
        }

        function closeModal2() {
            document.getElementById('popupCardModal2').classList.add('hidden');
        }
    </script>

    <script>
        function openModal3() {
            document.getElementById('popupCardModal3').classList.remove('hidden');
        }

        function closeModal3() {
            document.getElementById('popupCardModal3').classList.add('hidden');
        }
    </script>



</body>

</html>
