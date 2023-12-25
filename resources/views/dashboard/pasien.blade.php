@extends('dashboard.layout.main')

@section('container')
<div class="pt-20 pl-4 sm:ml-64 ">
   <main class="w-full flex-grow">
       <h1 class="text-3xl text-secondary font-bold pb-1">Hi {{ auth()->user()->name }} !</h1>
   </div>


   <div class=" pl-4 pr-4 sm:ml-64 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
            PASIEN
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-5 items-center justify-between pb-4">

                <!-- pencarian -->
                <label for="table-search" class="sr-only">Cari Pasien</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Pasien">
                </div>

                <!-- Button Tambah Pasien -->
                <button class="absolute top-0 right-8 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"> 
                    + Tambah Pasien
                </button>

                <!-- Dropdown menu -->
                <div class="absolute top-19 right-6">
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                        <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                            </svg>
                        30 hari terakhir
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                        <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded ">Hari terakhir</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded ">7 hari terakhir</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded ">30 hari terakhir</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Sebulan lalu</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                    <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Setahun lalu</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </caption>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 "><tr>
                <th scope="col" class="px-6 py-3">
                    No RM
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pasien
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Kelamin
                </th>
                <th scope="col" class="px-6 py-3">
                    Kontak
                </th>
                <th scope="col" class="px-6 py-3">
                    Poli
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
                    <span class="sr-only pr-10"></span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    201
                </th>
                <td class="px-6 py-4">
                    Moch Priamitra Nur Alif
                </td>
                <td class="px-6 py-4">
                    Laki-laki
                </td>
                <td class="px-6 py-4">
                    +62 8565-3762-762
                </td>
                <td class="px-6 py-4">
                    Poli Umum
                </td>
                <td class="px-6 py-4 text-center">
                    <button type="button" class="text-white border-green-800 bg-green-700 hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center  dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ffffff"d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                        </svg>
                        <span class="sr-only"></span>
                    </button>
                    <button type="button" class="text-white border-red-700 bg-red-600 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center  dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->\
                            <path fill="#ffffff" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                        </svg>
                        <span class="sr-only"></span>
                    </button>
                </td>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
