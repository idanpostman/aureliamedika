@extends('dashboard.layout.main')

@section('container')
<div class="pt-20 pl-4 sm:ml-64 ">
    <main class="w-full flex-grow">
        <h1 class="text-3xl text-secondary font-bold pb-1">Hi {{ auth()->user()->name }} !</h1>
</div>

<div class=" pl-4 pr-4 sm:ml-64 relative overflow-x-auto shadow-lg sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
            Daftar Obat
            <div class="flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-5 items-center justify-between pb-4">
                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full h-12 p-4 ps-10 text-smtext-gray-900 border  border-gray-300 rounded-lg  bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Obat">
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
                        Nama Obat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-primary whitespace-nowrap">
                        01
                    </th>
                    <td class="px-6 py-4">
                        Sanmol
                    </td>
                    <td class="px-6 py-4">
                        Ada
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection