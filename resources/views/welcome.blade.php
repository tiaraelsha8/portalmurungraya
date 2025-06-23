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

    <!-- Meta deskripsi untuk SEO. Ini yang ditampilkan Google di hasil pencarian -->
    <meta name="description"
        content="Situs resmi Pemerintah Kabupaten Murung Raya. Temukan informasi layanan publik, berita daerah, dan profil pemerintahan.">

    <meta name="robots" content="index, follow"> <!-- biarkan Google mengindeks -->
    <link rel="canonical" href="https://murungrayakab.go.id"> <!-- ganti dengan domain -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/logo/favicon.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- Background Carousel -->
    <div id="bgCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
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
            <div class="carousel-item active">
            <video class="w-100" autoplay loop muted playsinline>
              <source src="video.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Content with AOS Animated Cards -->
    <div>
        <img src="lambang_mura.png" alt="lambang" width="178" height="134" class="center">
    </div>

    <h1 style="text-align:center; color:rgb(255, 255, 255);">PEMERINTAH KABUPATEN MURUNG RAYA</h1>
    <h5 style="text-align:center; color:rgb(255, 255, 255);" class="mb-3"> TANA MALAI TOLONG LINGU</h5>

    <div class="container">
        <div class="row g-4 mt-4">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        class="bg-white bg-opacity-50 rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer relative">

                        <img @click="open = !open; rotate = true" :class="{ 'animate-rotateOnce': rotate }"
                            @animationend="rotate = false" src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black bg-white" />
                        <!-- Tooltip -->
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE SOPD
                        </div>
                    </div>

                    <!-- Modal di atas Avatar -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        class="absolute bottom-[170px] left-[83px] transform -translate-x-1/2 bg-white rounded-xl shadow-xl p-4 w-72 max-h-64 overflow-y-auto">


                        <!-- Panah Arah -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h5 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h5>
                        <div class="space-y-2">
                            <a href="#" style="text-decoration: none;"
                                class="block w-full text-center bg-gray-400 text-white py-2 rounded hover:bg-gray-500 text-sm">Dinas
                                Pendidikan</a>
                            <a href="#" style="text-decoration: none;"
                                class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas
                                Kesehatan</a>
                            <a href="https://diskominfo.murungrayakab.go.id/" style="text-decoration: none;"
                                class="block w-full text-center bg-red-600 text-white py-2 rounded hover:bg-red-700 text-sm"
                                target="_blank">Dinas Kominfo</a>
                        </div>
                        <button @click="open = false"
                            class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
                    </div>
                </div>



            </div>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">
                <div x-data="{
                    open: false,
                    animate: false,
                    avatars: [
                        'lambang_mura.png',
                        'Kantor_Bupati_Murung_Raya.jpg',
                    ],
                    currentIndex: 0,
                    transitioning: false,
                    get currentAvatar() {
                        return this.avatars[this.currentIndex];
                    },
                    nextAvatar() {
                        this.transitioning = true;
                        setTimeout(() => {
                            this.currentIndex = (this.currentIndex + 1) % this.avatars.length;
                            this.transitioning = false;
                        }, 200); // waktu fade out
                    }
                }" 
                x-init="$watch('open', value => { if (!value) currentIndex = 0 })"
                @click.outside="resetAvatar()"
                class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">

                    <!-- Avatar Card -->
                    <div
                        class="bg-white rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer overflow-hidden">

                        <img @click="open = !open; animate = true; nextAvatar()"
                            :class="[
                                animate ? 'animate-flip' : '',
                                transitioning ? 'opacity-0' : 'opacity-100',
                                'transition-opacity duration-300 ease-in-out'
                            ]"
                            @animationend="animate = false" :src="currentAvatar" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black bg-white" />


                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" @click.outside="open = false"
                        class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72">
                        <!-- Panah -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white">
                        </div>

                        <h5 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h5>
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





            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-white rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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
                            <a href="{{ route ('murungraya.index') }}"
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



            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-white rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-white rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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



            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-white rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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





        </div>

        <div class="row g-4 mt-2">
              <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative ">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''" 
                        @animationend="animate = false"
                        class="bg-white rounded-full bg-opacity-50 shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-white bg-opacity-50 rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full bg-white w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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



                        <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="open = !open; animate = true" :class="animate ? 'animate-flip' : ''"
                        @animationend="animate = false"
                        class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <img src="lambang_mura.png" alt="Avatar"
                            class="rounded-full w-[120px] h-[120px] object-cover border-4 border-black" />
                        <div x-show="showTooltip" x-transition
                            class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
                            WEBSITE WISATA
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



            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

                <div x-data="{ rotate: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @click="rotate = true;" :class="{ 'animate-flip': rotate }"
                        @animationend="rotate = false"
                        class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="https://diskominfo.murungrayakab.go.id/"><img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Avatar"
                                class="rounded-full w-[120px] h-[120px] object-cover" /></a>
                    </div>

                </div>


            </div>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                <div x-data="{ rotate: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
                    <div @click="rotate = true; openModal1()" :class="{ 'animate-flip': rotate }"
                        @animationend="rotate = false"
                        class="cursor-pointer bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
                        <img src="informasi.png" alt="Avatar"
                            class="rounded-full w-[120px] h-[120px] object-cover border-2 border-white" />
                    </div>
                </div>
            </div>


            <div id="popupCardModal1"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative">

                    <!-- Close Button -->
                    <button onclick="closeModal1()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <h5 class="text-lg font-semibold text-center mb-4 text-gray-800">Dinas Terkait</h5>

                    <div class="flex flex-col gap-2">
                        <a href="#"
                            class="w-full bg-red-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Pendidikan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kesehatan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kim</a>
                        <a href="#"
                            class="w-full bg-red-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Pendidikan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kesehatan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kim</a>

                    </div>
                </div>
            </div>



            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                <div x-data="{ rotate: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
                    <div @click="rotate = true; openModal2()" :class="{ 'animate-flip': rotate }"
                        @animationend="rotate = false"
                        class="cursor-pointer bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
                        <img src="informasi.png" alt="Avatar"
                            class="rounded-full w-[120px] h-[120px] object-cover border-2 border-white" />
                    </div>
                </div>
            </div>


            <div id="popupCardModal2"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative max-h-200 overflow-y-auto">

                    <!-- Close Button -->
                    <button onclick="closeModal2()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <h5 class="text-lg font-semibold text-center mb-4 text-gray-800">Dinas Terkait</h5>

                    <div class="flex flex-col gap-2">
                        <a href="#"
                            class="w-full bg-red-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Pendidikan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kesehatan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kim</a>
                        <a href="#"
                            class="w-full bg-red-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Pendidikan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kesehatan</a>
                        <a href="#"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas
                            Kim</a>

                    </div>
                </div>
            </div>





        </div>

        <div class="row g-4 mt-1">

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative mx-auto">

                <div x-data="{
                    open: false,
                    rotate: false,
                    showTooltip: false,
                    items: [
                        { label: '📘', title: 'Dinas Pendidikan', href: '#' },
                        { label: '🏥', title: 'Dinas Kesehatan', href: '#' },
                        { label: '🌐', title: 'Dinas Kominfo', href: 'https://diskominfo.murungrayakab.go.id/' },
                        { label: '📊', title: 'Bappeda', href: '#' },
                        { label: '📁', title: 'Inspektorat', href: '#' },
                        { iconType: 'image', label: 'lambang_mura.png', title: 'Gambar Kominfo', href: '#' },
                    ]
                }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
                    <!-- Avatar Card -->
                    <div @click="open = !open"
                        class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
                        <a href="#"><img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Avatar"
                                class="rounded-full w-[120px] h-[120px] object-cover" /></a>
                    </div>

                    <!-- Modal di atas Avatar -->
                    <div x-show="open" x-transition
                        class="absolute top-[55px] left-[55px] transform -translate-x-1/2 -translate-y-1/2 w-0 h-0 z-0 pointer-events-none">
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


    </div>

    <h1 style="text-align:center; color:rgb(255, 255, 255);" class="mt-3"> TIRA TANGKA BALANG</h1>
    <h5 style="text-align:center; color:rgb(255, 255, 255);" class="mt-1"> murungrayakab.go.id</h5>

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

</body>

</html>
