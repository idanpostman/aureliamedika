@extends('dashboard.layout.main')

@section('container')
<div class="pt-20 pl-4 sm:ml-64 ">
   <main class="w-full flex-grow">
       <h1 class="text-3xl text-secondary font-bold pb-1">Hi {{ auth()->user()->name }} !</h1>
       <h2 class="text-secondary font-semibold text-32x1 font-poppins">Halaman Pasien</h2>
   </div>


   <div class=" pl-4 pr-4 sm:ml-64 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
            PASIEN
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <div>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                        <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                            </svg>
                        Last 30 days
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
                                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded ">Last day</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded ">Last 7 days</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded ">Last 30 days</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100 ">
                                    <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last month</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                    <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last year</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search for items">
                </div>
            </div>
            <button class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Tambah Data</button>
        </caption>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 "><tr>
                <th scope="col" class="px-6 py-3">
                    No RM
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
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

                    <a href="#" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">Update</a>
                    <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">Delete</a>

                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
