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


  <style>

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    body, html {
      height: 100%;
      margin: 0;
    }

    .carousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item img {
      height: 100vh;
      width: 100vw;
      object-fit: cover;
    }

    .carousel {
      position: fixed;
      top: 0;
      left: 0;
      z-index: -2;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }

    

    .avatar {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
      border: 3px solid white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }


    
    
  </style>

  <style>
    @keyframes rotateOnce {
      0%   { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .animate-rotateOnce {
      animation: rotateOnce 1s ease-in-out;
    }
  </style>

  <style>
    @keyframes flip {
      0% {
        transform: rotateY(0deg);
      }
      100% {
        transform: rotateY(360deg);
      }
    }

    .animate-flip {
      animation: flip 1s ease-in-out;
    }

    
  </style>

  <style>
  @keyframes bounceUp {
    0% {
      transform: translateY(100%);
      opacity: 0;
    }
    60% {
      transform: translateY(-10%);
      opacity: 1;
    }
    80% {
      transform: translateY(5%);
    }
    100% {
      transform: translateY(0);
    }
  }
  .animate-bounceUp {
    animation: bounceUp 0.6s ease-out;
  }

  .g-4 {
    --bs-gutter-x: -20rem;
    }
  </style>
  

  

  



</head>
<body>

  <!-- Background Carousel -->
  <div id="bgCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Tugu_Bundaran_Emas.jpg" alt="Background 1">
      </div>
      <div class="carousel-item">
        <img src="Kantor_Bupati_Murung_Raya.jpg" alt="Background 2">
      </div>
      <div class="carousel-item">
        <img src="Kantor_Kecamatan_Murung,_Murung_Raya.jpg" alt="Background 3">
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
          <div
            @mouseenter="showTooltip = true" 
            @mouseleave="showTooltip = false" 

            class="bg-white bg-opacity-50 rounded shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer relative">

            <img @click="open = !open; rotate = true" 
              :class="{ 'animate-rotateOnce': rotate }" 
              @animationend="rotate = false"
             src="lambang_mura.png" alt="Avatar" class="rounded-full w-[130px] h-[130px] object-cover border-4 border-black bg-white" />
            <!-- Tooltip -->
            <div 
              x-show="showTooltip" 
              x-transition 
              class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
              WEBSITE SOPD
            </div>
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4" 
            @click.outside="open = false"
            class="absolute bottom-[170px] left-[83px] transform -translate-x-1/2 z-[9999] bg-white rounded-xl shadow-xl p-4 w-72 max-h-64 overflow-y-auto">

            
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h5 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h5>
            <div class="space-y-2">
              <a href="#" style="text-decoration: none;" class="block w-full text-center bg-gray-400 text-white py-2 rounded hover:bg-gray-500 text-sm">Dinas Pendidikan</a>
              <a href="#" style="text-decoration: none;" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kesehatan</a>
              <a href="https://diskominfo.murungrayakab.go.id/" style="text-decoration: none;" class="block w-full text-center bg-red-600 text-white py-2 rounded hover:bg-red-700 text-sm" target="_blank">Dinas Kominfo</a>
            </div>
            <button @click="open = false" class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
          </div>
        </div>



      </div>

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">
        <div 
          x-data="{
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
          class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative" >

          <!-- Avatar Card -->
          <div  
            class="bg-white bg-opacity-50 rounded shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer overflow-hidden">
            
            <img 
              @click="open = !open; animate = true; nextAvatar()" 
              :class="[
                animate ? 'animate-flip' : '', 
                transitioning ? 'opacity-0' : 'opacity-100',
                'transition-opacity duration-300 ease-in-out'
              ]"
              @animationend="animate = false"
              :src="currentAvatar" 
              alt="Avatar" 
              class="rounded-full w-[130px] h-[130px] object-cover border-4 border-black bg-white"
            />
            
            
          </div>

          <!-- Modal -->
          <div 
            x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4" 
            @click.outside="open = false"
            class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72"
          >
            <!-- Panah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h5 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h5>
            <div class="space-y-2">
              <a href="#" class="block w-full text-center bg-gray-400 text-white py-2 rounded hover:bg-gray-500 text-sm no-underline">Dinas Pendidikan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline">Dinas Kesehatan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline">Dinas Kominfo</a>
            </div>
            <button @click="open = false" class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
          </div>
        </div>
      </div>





      <div class="col-12 col-sm-6 col-lg-4 col-xl-2" data-aos="fade-up">
        <div x-data="{ hover: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative group">
          <!-- Avatar Card -->
          <div 
            @mouseenter="showTooltip = true" 
            @mouseleave="showTooltip = false" 
            
            class="bg-white bg-opacity-50 rounded shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img @mouseenter="hover = true" 
            @mouseleave="hover = false"
            src="lambang_mura.png" alt="Avatar" class="rounded-full w-[130px] h-[130px] object-cover border-4 border-black bg-white" />
            <!-- Tooltip -->
            <div 
              x-show="showTooltip" 
              x-transition 
              class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
              WEBSITE LAPOR!
            </div>
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="hover" 
            x-transition 
            class="absolute bottom-[150px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72">
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">Dinas Terkait</h3>
            <div class="space-y-2">
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Pendidikan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kesehatan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kim</a>
            </div>
          </div>
        </div>

      </div>


      
      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

        <div x-data="{ open: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
          <!-- Avatar Card -->
          <div @click="open = !open" class="bg-white bg-opacity-50 rounded shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img src="lambang_mura.png" alt="Avatar" class="rounded-full w-[130px] h-[130px] object-cover border-4 border-black bg-white" />
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="open" 
            x-transition 
            @click.outside="open = false"
            class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72"
          >
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h3>
            <div class="space-y-2">
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Pendidikan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kesehatan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kominfo</a>
            </div>
            <button @click="open = false" class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
          </div>
        </div>


      </div>

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
          <div onclick="openModal()" class="cursor-pointer bg-white bg-opacity-50 rounded shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
            <img src="informasi.png" alt="Avatar" class="rounded-full w-[130px] h-[130px] object-cover border-4 border-black bg-white" />
          </div>
        </div>
      </div>

      <div id="popupCardModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative">
          
          <!-- Close Button -->
          <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>

          <h5 class="text-lg font-semibold text-center mb-4 text-gray-800">Dinas Terkait</h5>

          <div class="flex flex-col gap-2">
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Pendidikan</a>
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Kesehatan</a>
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Kim</a>
          </div>
        </div>
      </div>

      

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative group" data-aos="fade-up">
          <!-- Avatar Card -->
          <div class="bg-white bg-opacity-50 rounded shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 group-hover:scale-105 cursor-pointer">
            <img src="lambang_mura.png" alt="Avatar" class="rounded-full w-[130px] h-[130px] object-cover border-4 border-black bg-white" />
          </div>

          <!-- Hover Modal -->
          <div class="absolute top-[-160px] left-[80px] transform -translate-x-1/2 z-50 hidden group-hover:flex flex-col bg-white shadow-lg rounded-xl p-4 w-60 animate-fade-in border border-gray-200">
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>
            <h5 class="text-sm font-semibold text-center text-gray-700 mb-3">Dinas Terkait</h5>

            <!-- Button 1 -->
            <a href="#" class="flex items-center gap-2 justify-center bg-blue-600 hover:bg-blue-700 text-white text-xs py-1.5 px-2 rounded mb-2">
              <!-- Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 0121 13.477M12 14v7.5M12 14L5.84 10.578A12.083 12.083 0 003 13.477" />
              </svg>
              Dinas Pendidikan
            </a>

            <!-- Button 2 -->
            <a href="#" class="flex items-center gap-2 justify-center bg-blue-600 hover:bg-blue-700 text-white text-xs py-1.5 px-2 rounded mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
              </svg>
              Dinas Kesehatan
            </a>

            <!-- Button 3 -->
            <a href="https://diskominfo.murungrayakab.go.id/" class="flex items-center gap-2 justify-center bg-blue-600 hover:bg-blue-700 text-white text-xs py-1.5 px-2 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5 3a1 1 0 011-1h12a1 1 0 011 1v1H5V3zM5 5h14v2H5V5zm2 4v9a1 1 0 001 1h8a1 1 0 001-1V9H7z"/>
              </svg>
              Dinas Kominfo
            </a>
          </div>
        </div>
      </div>




    
    </div>
    
    <div class="row g-4 mt-4">
      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

        <div x-data="{ open: false, rotate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
          <!-- Avatar Card -->
          <div
            @mouseenter="showTooltip = true" 
            @mouseleave="showTooltip = false"
            class="bg-white bg-opacity-50 rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
          <img 
            @click="open = !open; rotate = true" 
            :class="{ 'animate-rotateOnce': rotate }" 
            @animationend="rotate = false"
            src="lambang_mura.png" alt="Avatar" class="rounded-full w-[120px] h-[120px] object-cover border-4 border-black bg-white" />
            <div 
              x-show="showTooltip" 
              x-transition 
              class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
              WEBSITE DUKCAPIL
            </div>
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4" 
            @click.outside="open = false"
            class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72">
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h3>
            <div class="space-y-2">
              <a href="#" style="text-decoration: none;" class="block w-full text-center bg-gray-400 text-white py-2 rounded hover:bg-gray-500 text-sm">Dinas Pendidikan</a>
              <a href="#" style="text-decoration: none;" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kesehatan</a>
              <a href="#" style="text-decoration: none;" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kominfo</a>
            </div>
            <button @click="open = false" class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
          </div>
        </div>


      </div>

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

        <div x-data="{ open: false, animate: false, showTooltip: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
          <!-- Avatar Card -->
          <div
            @mouseenter="showTooltip = true" 
            @mouseleave="showTooltip = false"  
            @click="open = !open; animate = true"
            :class="animate ? 'animate-flip' : ''"
            @animationend="animate = false" 
            class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img 
              src="lambang_mura.png" 
              alt="Avatar" 
              class="rounded-full w-[120px] h-[120px] object-cover border-4 border-black"/>
            <div 
              x-show="showTooltip" 
              x-transition 
              class="absolute top-full mb-2 left-1/2 transform -translate-x-1/2 bg-gray-700 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50 shadow">
              WEBSITE WISATA
            </div>
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="open" 
            x-transition:enter=""
            x-transition:enter-start=""
            x-transition:enter-end=""
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4" 
            @click.outside="open = false"
            x-bind:class="open ? 'animate-bounceUp' : ''"
            class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72">
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h3>
            <div class="space-y-2">
              <a href="#" class="block w-full text-center bg-gray-400 text-white py-2 rounded hover:bg-gray-500 text-sm no-underline">Dinas Pendidikan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline">Dinas Kesehatan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm no-underline">Dinas Kominfo</a>
            </div>
            <button @click="open = false" class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
          </div>
        </div>


      </div>



      <div class="col-12 col-sm-6 col-lg-4 col-xl-2" data-aos="fade-up">
        <div x-data="{ hover: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative group">
          <!-- Avatar Card -->
          <div 
            @mouseenter="hover = true" 
            @mouseleave="hover = false"
            class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Avatar" class="rounded-full w-[120px] h-[120px] object-cover " />
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="hover" 
            x-transition 
            class="absolute bottom-[150px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72">
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">Dinas Terkait</h3>
            <div class="space-y-2">
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Pendidikan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kesehatan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kim</a>
            </div>
          </div>
        </div>

      </div>


      
      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

        <div x-data="{ open: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
          <!-- Avatar Card -->
          <div @click="open = !open" class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <a href="#"><img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Avatar" class="rounded-full w-[120px] h-[120px] object-cover" /></a>
          </div>

          <!-- Modal di atas Avatar -->
          <div 
            x-show="open" 
            x-transition 
            @click.outside="open = false"
            class="absolute bottom-[170px] left-[80px] transform -translate-x-1/2 z-50 bg-white rounded-xl shadow-xl p-4 w-72"
          >
            <!-- Panah Arah -->
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-r-8 border-t-8 border-transparent border-t-white"></div>

            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">DAFTAR WEBSITE SOPD</h3>
            <div class="space-y-2">
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Pendidikan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kesehatan</a>
              <a href="#" class="block w-full text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm">Dinas Kominfo</a>
            </div>
            <button @click="open = false" class="mt-4 w-full text-sm text-gray-500 hover:text-gray-700">Tutup</button>
          </div>
        </div>


      </div>

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
        <div x-data="{ rotate: false }" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2" data-aos="fade-up">
          <div onclick="openModal1()" class="cursor-pointer bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto hover:scale-105 transition-transform duration-300">
            <img src="informasi.png" alt="Avatar" class="rounded-full w-[120px] h-[120px] object-cover border-2 border-white" />
          </div>
        </div>
      </div>

      <div id="popupCardModal1" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-xl shadow-xl w-[90%] max-w-xs p-6 animate-fade-in relative">
          
          <!-- Close Button -->
          <button onclick="closeModal1()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>

          <h5 class="text-lg font-semibold text-center mb-4 text-gray-800">Dinas Terkait</h5>

          <div class="flex flex-col gap-2">
            <a href="#" class="w-full bg-red-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Pendidikan</a>
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Kesehatan</a>
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Kim</a>
            <a href="#" class="w-full bg-red-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Pendidikan</a>
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Kesehatan</a>
            <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md text-center">Dinas Kim</a>
            
          </div>
        </div>
      </div>

      

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

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
          }"  class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
          <!-- Avatar Card -->
          <div @click="open = !open" class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <a href="#"><img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Avatar" class="rounded-full w-[120px] h-[120px] object-cover" /></a>
          </div>

          <!-- Modal di atas Avatar -->
           <div 
            x-show="open" 
            x-transition 
            class="absolute top-[55px] left-[55px] transform -translate-x-1/2 -translate-y-1/2 w-0 h-0 z-0 pointer-events-none"
          >
            <template x-for="(item, index) in items" :key="index">
              <a 
                :href="item.href" 
                target="_blank"
                :title="item.title"
                class="absolute w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-md hover:bg-blue-700 transition-transform duration-300 text-lg pointer-events-auto"
                :style="`
                  transform: rotate(${index * (360 / items.length)}deg)
                            translate(100px)
                            rotate(-${index * (360 / items.length)}deg);
                `"
              >
                <template x-if="item.iconType === 'image'">
                  <img :src="item.label" alt="" class="w-6 h-6 rounded-full" />
                </template>
              </a>
            </template>
          </div>
        </div>


      </div>




    
    </div>

    <div class="row g-4 mt-4">

      <div class="col-12 col-sm-6 col-lg-4 col-xl-2 position-relative" data-aos="fade-up">

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
          }"  class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/6 p-2 relative">
          <!-- Avatar Card -->
          <div @click="open = !open" class="bg-white rounded-full shadow-lg w-[150px] h-[150px] flex items-center justify-center mx-auto transition-transform duration-300 hover:scale-105 cursor-pointer">
            <a href="#"><img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Avatar" class="rounded-full w-[120px] h-[120px] object-cover" /></a>
          </div>

          <!-- Modal di atas Avatar -->
           <div 
            x-show="open" 
            x-transition 
            class="absolute top-[55px] left-[55px] transform -translate-x-1/2 -translate-y-1/2 w-0 h-0 z-0 pointer-events-none"
          >
            <template x-for="(item, index) in items" :key="index">
              <a 
                :href="item.href" 
                target="_blank"
                :title="item.title"
                class="absolute w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-md hover:bg-blue-700 transition-transform duration-300 text-lg pointer-events-auto"
                :style="`
                  transform: rotate(${index * (360 / items.length)}deg)
                            translate(100px)
                            rotate(-${index * (360 / items.length)}deg);
                `"
              >
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
  
</body>
</html>
