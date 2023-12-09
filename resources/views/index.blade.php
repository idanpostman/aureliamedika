@extends('layouts.main')

@section('container')
        <!-- Hero Section Start -->
        <section id="home" class="jumbotron pt-36">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-10 lg:w-1/2">
                        <h1 class="block font-bold text-secondary text-4xl uppercase mb-1 lg:text-6xl">Selamat Datang</h1>
                        <h2 class="font-medium text-secondary text-lg mb-5 lg:text-4xl">di
                           <span class="text-secondary font-bold">Aurelia Medika</span>
                        </h2>
                        <p class="font-medium text-secondary mb-7 leading-relaxed">Lorem ipsum dolor sit amet consectetur.
                            <span class="text-secondary font-bold">Ambil Antrian!</span>
                        </p>
                        <button class="text-base font-medium uppercase text-white bg-primary py-3 px-5 rounded-full  hover:opacity-80 hover:shadow-lg transition duration-500 ">Ambil Antrian</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero Section End -->

        {{-- Poli Start --}}
         <section id="poli" class="ml-10">
                <div class="container">
                <div class="-translate-y-20 ml-4 lg:ml-0 lg:flex">
                    <div class="w-full flex items-stretch">
                        <div class="max-w-sm mb-6 p-6 bg-primary border border-gray-200 rounded-lg shadow ">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Sistem Antrian Online!</h5>
                            </a>
                            <p class="mb-3 font-normal text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                            <button class="w-full text-base font-medium uppercase text-white  bg-white bg-opacity-25 items-center py-3 px-5  rounded-full  hover:bg-opacity-30 hover:shadow-lg transition duration-500 ">Ambil Antrian</button>
                        </div>
                    </div>
                    <div class="w-full lg:w-9/12">
                        <div class="max-w-sm mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow  lg: mr-5">
                            <div class="flex items-center justify-center mb-3">
                                <svg class="w-[48px] h-[48px] text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 1v16M1 9h16"/>
                                </svg>
                            </div>
                            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 ">Poli Umum</h5>
                        <p class="mb-3 font-normal text-center text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                        </div>
                   </div>
                    <div class="w-full lg:w-9/12">
                        <div class="max-w-sm mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow  lg: mr-5">
                            <div class="flex items-center justify-center mb-3">
                                <svg class="w-[48px] h-[48px]" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path fill="#780000" d="M186.1 52.1C169.3 39.1 148.7 32 127.5 32C74.7 32 32 74.7 32 127.5v6.2c0 15.8 3.7 31.3 10.7 45.5l23.5 47.1c4.5 8.9 7.6 18.4 9.4 28.2l36.7 205.8c2 11.2 11.6 19.4 22.9 19.8s21.4-7.4 24-18.4l28.9-121.3C192.2 323.7 207 312 224 312s31.8 11.7 35.8 28.3l28.9 121.3c2.6 11.1 12.7 18.8 24 18.4s20.9-8.6 22.9-19.8l36.7-205.8c1.8-9.8 4.9-19.3 9.4-28.2l23.5-47.1c7.1-14.1 10.7-29.7 10.7-45.5v-2.1c0-55-44.6-99.6-99.6-99.6c-24.1 0-47.4 8.8-65.6 24.6l-3.2 2.8 19.5 15.2c7 5.4 8.2 15.5 2.8 22.5s-15.5 8.2-22.5 2.8l-24.4-19-37-28.8z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 ">Poli Gigi</h5>
                        <p class="mb-3 font-normal text-center text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                        </div>
                   </div>
                    <div class="w-full lg:w-9/12">
                        <div class="max-w-sm mb-6 p-6 bg-white border border-gray-200 rounded-lg shadow  lg: mr-5">
                            <div class="flex items-center justify-center mb-3">
                                <svg class="w-[48px] h-[48px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path fill="#780000" d="M502.6 54.6l-40 40c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l40-40c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3zm-320 320l-128 128c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3zM240 128c-57.6 0-105.1 43.6-111.3 99.5c-1.9 17.6-17.8 30.2-35.3 28.3s-30.2-17.8-28.3-35.3C74.8 132.5 149.4 64 240 64c97.2 0 176 78.8 176 176c0 46-17.7 87.9-46.6 119.3c-12 13-17.4 24.8-17.4 34.7V400c0 61.9-50.1 112-112 112c-17.7 0-32-14.3-32-32s14.3-32 32-32c26.5 0 48-21.5 48-48v-6.1c0-32.9 17.4-59.6 34.4-78c18.4-20 29.6-46.6 29.6-75.9c0-61.9-50.1-112-112-112zm0 80c-17.7 0-32 14.3-32 32c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-44.2 35.8-80 80-80s80 35.8 80 80c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-17.7-14.3-32-32-32z"/>
                                </svg>
                            </div>
                            <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 ">Poli THT</h5>
                        <p class="mb-3 font-normal text-center text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus minus quia! Aut, modi repudiandae perferendis aspernatur velit debitis.</p>
                        </div>
                   </div>
                </div>
          </section>
        {{-- Poli End --}}

        {{-- Hitung start --}}
        <section id="hitung" class=" pt-8 pb-4 bg-white">
            <div class="container items-center lg:flex ">
                <div class="w-3/5 mx-auto my-16 lg:w-full lg:ml-14">
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
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter  text-4xl font-bold"></span>
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
        {{-- Hitung start --}}



            <!-- About Section Start -->
        <section id="about" class="pt-8 pb-12">
            <div class="container">
                <div class="flex flex-wrap lg:grid lg:grid-cols-2">
                    <div class="w-full px-10">
                        <img src="/img/about-us.jpg" class="w-[400x] h-[300px] rounded-lg shadow-xl lg:w-[500px] lg:h-[400px]" alt="">

                        <img src="/img/doctors-about-us1.jpg" class="w-[250px] h-[150px] rounded-2xl -translate-y-32 translate-x-44 shadow-2xl lg:w-[300px] lg:h-[200px] lg:-translate-y-36 lg:translate-x-60 "  alt="">
                    </div>
                    <div class="w-full px-10">
                        <h4 class="font-bold uppercase text-primary mt-[-50px]  mb-2 text-4xl lg:mt-0">About us</h4>
                        <p class="font-normal text-base text-secondary max-w-xl lg:text-lg">
                            <span class="font-semibold text-secondary text-xl max-w-md lg:text-2xl"> Aurelia Medika</span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore cumque debitis earum! Repellendus nisi recusandae quia dolores quam. Deserunt voluptas ipsum voluptatum nihil ducimus natus inventore dolores placeat accusantium nulla hic maiores, libero atque autem repudiandae enim quaerat adipisci amet reiciendis ipsa eum. Voluptates provident ipsum, aliquam repudiandae quo recusandae obcaecati, expedita dolorem blanditiis labore debitis earum sed. Dicta deserunt maiores obcaecati aliquid earum sit vero, sint, dolores repellendus nisi nostrum. Dolorem eius, maiores tenetur optio suscipit dolor accusantium reiciendis tempora a, nihil odit. Veritatis reiciendis, laboriosam accusantium eligendi itaque, facilis iusto a aspernatur sapiente tenetur libero saepe quaerat nesciunt?
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- About section End -->




@endsection

