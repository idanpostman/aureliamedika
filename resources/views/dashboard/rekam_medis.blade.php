@extends('dashboard.layout.main')

@section('container')
<div class="pt-20 pl-4 sm:ml-64 ">
    <main class="w-full flex-grow">
        <h1 class="text-3xl text-secondary font-bold pb-1">Hi {{ auth()->user()->name }} !</h1>
</div>

<div class=" pl-4 pr-4 sm:ml-64 relative overflow-x-auto shadow-lg sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
            Rekam Medis
            <div class="flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-5 items-center justify-between pb-4">
                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full h-12 p-4 ps-10 text-smtext-gray-900 border  border-gray-300 rounded-lg  bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Pasien">
                        <button type="submit" class="text-white absolute end-2.5 bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 "><tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nomor Telpon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        poli
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Diagnosa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NO Rekam Medis
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($rekamMedis as $rekam)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-3 font-medium text-primary whitespace-nowrap">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-3">
                        {{ $rekam->nama }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $rekam->no_telpon }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $rekam->poli }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $rekam->diagnosa }}
                    </td>
                    <td class="px-6 py-3">
                        {{ $rekam->no_rekam_medis }}
                    </td>
                        <td class="px-6 py-3 text-center">
                            <a href="{{ route('rekam-medis.edit', $rekam->id) }}">
                                <button class="text-white border-yellow-200 bg-yellow-300 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path fill="#ffffff"d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                    </svg>
                                    <span class="sr-only"></span>
                                </button>
                            </a>
                </tr>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection