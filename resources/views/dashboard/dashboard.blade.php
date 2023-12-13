@extends('dashboard.layout.main')

@section('container')
<div class="pt-20 pl-4 sm:ml-64 ">
   <main class="w-full flex-grow">
       <h1 class="text-3xl text-secondary font-bold pb-1">Hi {{ auth()->user()->name }} !</h1>
       <h2 class="text-secondary font-semibold text-32x1 font-poppins">Halaman muka dari klinik anda, overview hal-hal mengenai klinik anda</h2>
   </div>
<div class=" sm:ml-64">
    <div class="p-2 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">
      <section id="hitung"> 
      <div class="grid grid-cols-4 gap-4 mb-4">
         <div class="w-3/5 mx-auto my-16 lg:w-full">
            <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center m-4 mb-10 rounded-full bg-primary h-[65px] w-[65px]">
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
        <div class="w-3/5 mx-auto my-16 lg:w-full">
            <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center m-4 mb-10 rounded-full bg-primary h-[65px] w-[65px]">
                        <svg class="w-[33px] h-[33px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff" d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z"/>
                        </svg>
                    </div>
                </div>
                <span data-purecounter-start="0" data-purecounter-end="72" data-purecounter-duration="1" class="purecounter  text-4xl font-bold "></span>
                <h5 class="mb-12 text-lg text-center font-semibold  tracking-tight text-secondary ">Pasien</h5>
            </div>
        </div>
        <div class="w-3/5 mx-auto my-16 lg:w-full">
            <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center m-4 mb-10 rounded-full bg-primary h-[65px] w-[65px]">
                        <svg class="w-[33px] h-[33px]" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#fafafa" d="M142.4 21.9c5.6 16.8-3.5 34.9-20.2 40.5L96 71.1V192c0 53 43 96 96 96s96-43 96-96V71.1l-26.1-8.7c-16.8-5.6-25.8-23.7-20.2-40.5s23.7-25.8 40.5-20.2l26.1 8.7C334.4 19.1 352 43.5 352 71.1V192c0 77.2-54.6 141.6-127.3 156.7C231 404.6 278.4 448 336 448c61.9 0 112-50.1 112-112V265.3c-28.3-12.3-48-40.5-48-73.3c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V336c0 97.2-78.8 176-176 176c-92.9 0-168.9-71.9-175.5-163.1C87.2 334.2 32 269.6 32 192V71.1c0-27.5 17.6-52 43.8-60.7l26.1-8.7c16.8-5.6 34.9 3.5 40.5 20.2zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                        </svg>
                    </div>
                </div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter  text-4xl font-bold"></span>
                <h5 class="mb-12 text-lg text-center font-semibold tracking-tight text-secondary ">Dokter</h5>
            </div>
        </div>
        <div class="w-3/5 mx-auto my-16 lg:w-full">
            <div class="block max-w-sm mb-5 bg-[#EDF2F4] border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center m-4 mb-10 rounded-full bg-primary h-[65px] w-[65px]">
                        <svg class="w-[33px] h-[33px]"  xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                            <path fill="#ffffff" d="M112 96c-26.5 0-48 21.5-48 48V256h96V144c0-26.5-21.5-48-48-48zM0 144C0 82.1 50.1 32 112 32s112 50.1 112 112V368c0 61.9-50.1 112-112 112S0 429.9 0 368V144zM554.9 399.4c-7.1 12.3-23.7 13.1-33.8 3.1L333.5 214.9c-10-10-9.3-26.7 3.1-33.8C360 167.7 387.1 160 416 160c88.4 0 160 71.6 160 160c0 28.9-7.7 56-21.1 79.4zm-59.5 59.5C472 472.3 444.9 480 416 480c-88.4 0-160-71.6-160-160c0-28.9 7.7-56 21.1-79.4c7.1-12.3 23.7-13.1 33.8-3.1L498.5 425.1c10 10 9.3 26.7-3.1 33.8z"/>
                        </svg>
                    </div>
                </div>
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter  text-4xl font-bold"></span>
                <h5 class="mb-12 text-lg text-center font-semibold tracking-tight text-secondary ">Obat</h5>
            </div>
        </div>
      </section>
    </div>
       </div>
    </div>
 </div>
 
@endsection