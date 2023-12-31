@extends('layouts.main')

@section('container')
        <!-- Home Section Start -->
        <section id="home" class="h-[550px] mt-[85px] bg-center bg-no-repeat bg-blend-multiply bg-cover pt-36" style="background-image: url('/img/bg-home3.jpeg')">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-16 lg:w-1/2">
                        <h1 class="block font-bold text-secondary text-4xl uppercase mb-1 lg:text-5xl">Selamat Datang</h1>
                        <h2 class="font-medium text-secondary text-lg mb-5 lg:text-4xl">di
                           <span class="text-secondary font-bold">Aurelia Medika</span>
                        </h2>
                        <p class="font-medium text-secondary mb-7 leading-relaxed"> Kesehatan <span class = "text-secondary font-bold" >Anda, </span> Prioritas Utama <span class = "text-secondary font-bold" > Kami </span>
                            <!-- <span class="text-secondary font-bold">Ambil Antrian!</span> -->
                        </p>
                        <a href="/antrian">
                            <button class="text-base font-medium uppercase text-white bg-primary py-3 px-5 rounded-full  hover:opacity-80 hover:shadow-lg transition duration-500 ">Ambil Antrian</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Home Section End -->

        <!-- Poli start  -->

         <section id="poli" class="pb-8" >
                <div class="container mx-auto ">
                <div class="-translate-y-28 px-16 gap-3 lg:flex">
                    <div class="w-full flex items-stretch lg:mr-5">
                        <div class="max-w-sm mx-auto mb-6 p-6 bg-primary border border-gray-200 rounded-lg shadow ">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Sistem Antrian Online!</h5>
                            <p class= " text-left mb-3 font-normal text-white"> Kami mengerti betapa berharganya waktu Anda. Dengan sistem antrian online kami, kami hadir untuk memberikan kemudahan dan kenyamanan dalam proses pendaftaran kunjungan ke klinik.</p>
                            <a href="/antrian">
                            <button class="w-full text-base font-medium uppercase text-white  bg-white bg-opacity-25 items-center py-3 px-5  rounded-full  hover:bg-opacity-30 hover:shadow-lg transition duration-500 ">Ambil Antrian</button>
                            </a>
                        </div>
                    </div>

                    @foreach ($polis as $poli)
                <div class="w-full flex items-stretch lg:w-9/12">
                    <div class="max-w-sm mx-auto mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow lg:ml-0 lg:mr-5">
                        <div class="flex items-center justify-center mb-3">
                            @if($poli->nama_poli === 'Poli Umum')
                                <!-- SVG for Poli Umum -->
                                <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                            @elseif($poli->nama_poli === 'Poli THT')
                    <!-- SVG for Poli THT -->
                    <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path fill="#780000" d="M502.6 54.6l-40 40c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l40-40c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3zm-320 320l-128 128c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3zM240 128c-57.6 0-105.1 43.6-111.3 99.5c-1.9 17.6-17.8 30.2-35.3 28.3s-30.2-17.8-28.3-35.3C74.8 132.5 149.4 64 240 64c97.2 0 176 78.8 176 176c0 46-17.7 87.9-46.6 119.3c-12 13-17.4 24.8-17.4 34.7V400c0 61.9-50.1 112-112 112c-17.7 0-32-14.3-32-32s14.3-32 32-32c26.5 0 48-21.5 48-48v-6.1c0-32.9 17.4-59.6 34.4-78c18.4-20 29.6-46.6 29.6-75.9c0-61.9-50.1-112-112-112zm0 80c-17.7 0-32 14.3-32 32c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-44.2 35.8-80 80-80s80 35.8 80 80c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-17.7-14.3-32-32-32z"/>
                    </svg>
                     @elseif($poli->nama_poli === 'Poli Gigi')
                    <!-- SVG for Poli Gigi -->
                    <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path fill="#780000" d="M186.1 52.1C169.3 39.1 148.7 32 127.5 32C74.7 32 32 74.7 32 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2l36.7 205.8c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C192.2 323.7 207 312 224 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z"/>
                    </svg>
                     @endif
                    </div>
                    <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900">{{ $poli->nama_poli }}</h5>
                    <p class="mb-3 font-normal text-center text-gray-700">
                        @if ($poli->nama_poli === 'Poli Umum')
                            {{ $poli->deskripsi }}
                        @elseif ($poli->nama_poli === 'Poli THT')
                            {{ $poli->deskripsi }}
                        @elseif ($poli->nama_poli === 'Poli Gigi')
                            {{ $poli->deskripsi }}
                        @else
                            Default content for other polis
                        @endif
                    </p>
                </div>
            </div>
        @endforeach

                </div>
          </section>
        <!-- {{-- Poli End --}} -->

        <!-- {{-- Hitung start --}} -->
        <section id="hitung" class=" pt-8 pb-4 bg-white">
            <div class="container mx-auto items-center lg:px-16 lg:flex ">
                <div class="w-3/5 mx-auto my-16 lg:w-full">
                    <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center -translate-y-10 rounded-full bg-primary h-[65px] w-[65px]">
                                <svg class="w-[33px] h-[33px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                    <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                                    <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                                </svg>
                            </div>
                        </div>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter  text-4xl font-bold"></span>
                            <h5 class="mb-12 text-lg text-center font-semibold tracking-tight text-secondary ">Antrian</h5>
                    </div>
                </div>
                <div class="w-3/5 mx-auto my-16 lg:w-full lg:ml-14">
                    <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center -translate-y-10 rounded-full bg-primary h-[65px] w-[65px]">
                                <svg class="w-[33px] h-[33px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path fill="#ffffff" d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z"/>
                                </svg>
                            </div>
                        </div>
                        <span data-purecounter-start="0" data-purecounter-end="72" data-purecounter-duration="1" class="purecounter  text-4xl font-bold "></span>
                        <h5 class="mb-12 text-lg text-center font-semibold  tracking-tight text-secondary ">Pasien</h5>
                    </div>
                </div>
                <div class="w-3/5 mx-auto my-16 lg:w-full lg:ml-14">
                    <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center -translate-y-10 rounded-full bg-primary h-[65px] w-[65px]">
                                <svg class="w-[33px] h-[33px]" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path fill="#fafafa" d="M142.4 21.9c5.6 16.8-3.5 34.9-20.2 40.5L96 71.1V192c0 53 43 96 96 96s96-43 96-96V71.1l-26.1-8.7c-16.8-5.6-25.8-23.7-20.2-40.5s23.7-25.8 40.5-20.2l26.1 8.7C334.4 19.1 352 43.5 352 71.1V192c0 77.2-54.6 141.6-127.3 156.7C231 404.6 278.4 448 336 448c61.9 0 112-50.1 112-112V265.3c-28.3-12.3-48-40.5-48-73.3c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V336c0 97.2-78.8 176-176 176c-92.9 0-168.9-71.9-175.5-163.1C87.2 334.2 32 269.6 32 192V71.1c0-27.5 17.6-52 43.8-60.7l26.1-8.7c16.8-5.6 34.9 3.5 40.5 20.2zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                                </svg>
                            </div>
                        </div>
                        <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter  text-4xl font-bold"></span>
                        <h5 class="mb-12 text-lg text-center font-semibold tracking-tight text-secondary ">Dokter</h5>
                    </div>
                </div>
                <div class="w-3/5 mx-auto my-16 lg:w-full lg:ml-14">
                    <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center -translate-y-10 rounded-full bg-primary h-[65px] w-[65px]">
                                <svg class="w-[33px] h-[33px]"  xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                    <path fill="#ffffff" d="M112 96c-26.5 0-48 21.5-48 48V256h96V144c0-26.5-21.5-48-48-48zM0 144C0 82.1 50.1 32 112 32s112 50.1 112 112V368c0 61.9-50.1 112-112 112S0 429.9 0 368V144zM554.9 399.4c-7.1 12.3-23.7 13.1-33.8 3.1L333.5 214.9c-10-10-9.3-26.7 3.1-33.8C360 167.7 387.1 160 416 160c88.4 0 160 71.6 160 160c0 28.9-7.7 56-21.1 79.4zm-59.5 59.5C472 472.3 444.9 480 416 480c-88.4 0-160-71.6-160-160c0-28.9 7.7-56 21.1-79.4c7.1-12.3 23.7-13.1 33.8-3.1L498.5 425.1c10 10 9.3 26.7-3.1 33.8z"/>
                                </svg>
                            </div>
                        </div>
                        <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter  text-4xl font-bold"></span>
                        <h5 class="mb-12 text-lg text-center font-semibold tracking-tight text-secondary ">Obat</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- {{-- Hitung End --}} -->

            <!-- About Section Start -->
        <section id="about" class="pt-36 pb-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap lg:grid lg:grid-cols-2">
                    <div class="w-full px-16">
                        <img src="/img/about-us.jpg" class="w-[400x] h-[300px] rounded-lg shadow-xl lg:w-[500px] lg:h-[400px]" alt="">

                        <img src="/img/doctors-about-us1.jpg" class="w-[250px] h-[150px] rounded-2xl -translate-y-32 translate-x-36 shadow-2xl lg:w-[300px] lg:h-[200px] lg:-translate-y-36 lg:translate-x-60 "  alt="">
                    </div>
                    <div class="w-full px-16 ">
                        <h4 class="font-bold uppercase text-primary mt-[-50px]  mb-2 text-4xl lg:mt-0">Tentang Kami</h4>
                        <p class="font-normal text-base text-secondary max-w-xl lg:text-lg">
                            <span class="font-semibold text-secondary text-xl max-w-md lg:text-2xl"> Aurelia Medika</span>
                            Memahami pentingnya kesehatan bagi kehidupan Anda. Dengan tim medis berpengalaman dan berdedikasi, kami berkomitmen untuk memberikan pelayanan kesehatan yang terbaik bagi setiap pasien.
                            Di Klinik Aurelia Medika, kenyamanan dan keamanan pasien adalah prioritas utama kami. Kami berkomitmen untuk menciptakan lingkungan yang ramah, hangat, dan mendukung dalam setiap kunjungan Anda.
                            Mari bergabung dengan kami dalam meraih kesehatan optimal. Kunjungi Klinik Aurelia Medika dan temukan layanan kesehatan yang terpercaya dan terbaik untuk Anda dan keluarga.
                        </p>
                        <div class="max-w-full mt-5 text-center lg:w-1/2">
                            <div class="flex justify-center items-center">
                                <a href="/about">
                                    <button type="submit" class="text-base text-center font-semibold text-white bg-[#780000] py-3 px-8 rounded-lg w-full hover:opacity-80 hover:shadow-lg transition duration-500">Baca Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- About section End -->


    <!-- {{-- Our Doctor start --}} -->

    <section id="doctor" class="pt-36 pb-16 bg-white">
        <div class="container mx-auto">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-bold text-primary text-3xl lg:text-5xl">Dokter</h2>
            </div>
            <div class="flex">
                <div class="w-2/12 flex items-center ">
                    <div class="w-full text-right">
                        <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-200 shadow-lg mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                              </svg>
                        </button>
                    </div>
                </div>
                <div id="sliderContainer" class="w-full overflow-hidden">
                    <ul id="slider" class="flex w-full border">
                        @foreach ($dokters as $dokter)
                        <li class="p-5">
                            <div class="w-full px-10 py-5 my-5 mx-auto max-w-sm bg-[#EDF2F4] border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100">
                                <div class="flex flex-col items-center pb-10">
                                    @if ($dokter->image)
                                    <img class="w-24 h-24 mb-3 mt-10 rounded-full shadow-lg" src="{{ asset('storage/' . $dokter->image) }}" alt="dokter"/>
                                    @else
                                    <img class="w-24 h-24 mb-3 mt-10 rounded-full shadow-lg" src="/img/user-photo.png" alt="dokter"/>
                                    @endif
                                    <h5 class="mb-1 text-xl font-semibold text-secondary">{{ $dokter->nama_dokter }}</h5>
                                    <span class="text-md text-gray-500">{{ $dokter->polis->nama_poli }}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="w-2/12 flex items-center">
                    <div class="w-full">
                        <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-200 shadow-lg ml-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                              </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
  </section>
    <!-- {{-- Our Doctor End --}} -->


    <!-- {{-- Contact Start --}} -->

    <section id="contact" class="pt-36 pb-32">
        <div class="container mx-auto">
            <div class="max-w-xl mx-auto text-center">
                <h2 class="font-bold text-primary text-3xl mb-16 lg:text-5xl">Kontak</h2>
            </div>
            <div id="alert-1" class="my-alert hidden lg:w-1/2 mx-auto items-center p-4 mb-4 text-primary rounded-lg bg-blue-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                  Terima Kasih! Pesan anda telah kami terima
                </div>
                  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-primary rounded-lg  hover:opacity-95 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
              </div>
            <div class="flex flex-wrap">

                 <!-- {{-- Lokasi --}} -->
                <div class="w-full lg:w-1/2">
                    <div class="flex flex-wrap px-4 py-4 lg:px-16">
                        <div class="flex items-center justify-center rounded-full bg-primary h-[45px] w-[45px]">
                                <svg class="w-[23px] h-[23px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path fill="#ffffff" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                            </svg>
                        </div>
                        <div class="px-4 w-3/4">
                            <h5 class="font-bold text-secondary text-lg max-w-md lg:text-xl">Lokasi:</h5>
                            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Jl. Raya Kopo No.16, Kota Bandung, Jawa Barat 40233</p>
                        </div>
                    </div>
                    <!-- {{-- Lokasi End --}} -->
                    <!-- {{-- Email Start --}} -->
                    <div class="flex flex-wrap px-4 py-4 lg:px-16">
                        <div class="flex items-center justify-center rounded-full bg-primary h-[45px] w-[45px]">
                            <svg class="w-[23px] h-[23px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path fill="#ffffff" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                            </svg>
                        </div>
                        <div class="px-4 w-3/4">
                            <h5 class="font-bold text-secondary text-lg max-w-md lg:text-xl">Email:</h5>
                            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">aureliamedika@example.org</p>
                        </div>
                    </div>
                    <!-- {{-- Email End --}} -->
                    <!-- {{-- Phone Start --}} -->
                    <div class="flex flex-wrap px-4 py-4 lg:px-16">
                        <div class="flex items-center justify-center rounded-full bg-primary h-[45px] w-[45px]">
                            <svg class="w-[23px] h-[23px]" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path fill="#ffffff" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                            </svg>
                        </div>
                        <div class="px-4 w-3/4">
                            <h5 class="font-bold text-secondary text-lg max-w-md lg:text-xl">Telepon:</h5>
                            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">+62 1402252</p>
                        </div>
                    </div>
                </div>
            <!-- {{-- Phone End --}} -->

                    <form name="aureliamedika-contact-form" action="">
                        <div class="flex flex-wrap w-full items-center justify-center lg:w-[620px]">
                            <div class="w-full px-4 mb-8">
                                    <label for="name" class="text-base font-bold text-primary">Nama</label>
                                    <input name="nama" type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                                </div>
                            <div class="w-full px-4 mb-8">
                                <label for="email" class="text-base font-bold text-primary">Email</label>
                                <input name="email" type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                            </div>
                            <div class="w-full px-4 mb-8">
                                <label for="message" class="text-base font-bold text-primary">Pesan</label>
                                <textarea name="pesan" type="text" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                            </div>
                            <div class="max-w-[250px] text-center mx-auto lg:w-full">
                                <div class="flex justify-center items-center">
                                    <button type="submit" class="btn-kirim text-base text-center font-semibold text-white bg-[#780000] py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                                </div>
                                <div class="flex justify-center items-center">
                                    <button type="submit" class="btn-loading hidden text-base text-center font-semibold text-white bg-[#780000] py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">
                                        <div role="status" class="text-center mx-auto">
                                            <svg aria-hidden="true" class="inline w-5 h-5  animate-spin fill-primary mr-2" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                            </svg>
                                        </div><span class="-translate-x-10">Loading....</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- {{-- Contact End --}} -->

    <script>
        // Form Contact
        const scriptURL = 'https://script.google.com/macros/s/AKfycby_vYb4XWvk1_k98ggqmm5WMSgsZd9HjCEBo7-jrKZVC2BrhQVdyuadGdtFcolBXMbe_Q/exec'
        const form = document.forms['aureliamedika-contact-form']
        const btnLoading = document.querySelector('.btn-loading');
        const btnKirim = document.querySelector('.btn-kirim');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault()
            btnLoading.classList.toggle('hidden');
            btnKirim.classList.toggle('hidden');
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                btnLoading.classList.toggle('hidden');
                btnKirim.classList.toggle('hidden');
                myAlert.classList.toggle('hidden');
                form.reset();
                console.log('Success!', response);
            })
            .catch(error => console.error('Error!', error.message))
        })
    </script>



@endsection
