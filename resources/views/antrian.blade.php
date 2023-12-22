@extends('layouts.main')

@section('container')
<section id="antrian" class="pt-28 pb-32">
    <div class="container mx-auto">
          <div class="text-center mx-auto mb-7">
                <h3 class="font-bold uppercase text-primary text-xl">
                    Antrian Kamu
                </h3>
            </div>
            <div class="mb-5 ml-6 lg:ml-64">
                <button class="text-base font-medium uppercase text-white bg-green-800 py-3 px-5 rounded-full  hover:opacity-80 hover:shadow-lg transition duration-500" type="button">
                    Cetak Antrian
                  </button>
            </div>
        <div class="relative ml-5 overflow-x-auto sm:rounded-lg">
            <table class="mx-auto text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-sm text-secondary uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No Antrian
                        </th>
                        <th scope="col" class="px-6 py-3 w-80">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 w-44">
                            Poli
                        </th>
                        <th scope="col" class="px-6 py-3 w-56">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white  even:bg-gray-50  border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            U101
                        </th>
                        <td class="px-6 py-4">
                            Wildan Fauzan
                        </td>
                        <td class="px-6 py-4">
                            Poli Umum
                        </td>
                        <td class="px-6 py-4">

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full mt-11 border-t border-slate-300">
            <div class="text-center mt-6">
                <h3 class="font-bold uppercase text-primary text-xl">
                    Antrian Saat ini
                </h3>
            </div>
            <div class="mt-8 ml-6 lg:ml-56">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-base font-medium uppercase text-white bg-primary py-3 px-5 rounded-full  hover:opacity-80 hover:shadow-lg transition duration-500" type="button">
                    Ambil Antrian
                  </button>
            </div>
            <form class="max-w-xs mt-5 ml-6 lg:ml-56">
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  <option value="" disabled selected hidden>Sortir Berdasarkan Poli</option>
                  <option>Poli Umum</option>
                  <option>Poli Gigi</option>
                  <option>Poli THT</option>
                </select>
              </form>

              <div class="relative ml-5 overflow-x-auto sm:rounded-lg">
                <table class="mx-auto text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-sm text-secondary uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Antrian
                            </th>
                            <th scope="col" class="px-6 py-3 w-80">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3 w-44">
                                Poli
                            </th>
                            <th scope="col" class="px-6 py-3 w-56">
                                Tanggal
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white  even:bg-gray-50  border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                1
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                U101
                            </th>
                            <td class="px-6 py-4">
                                Wildan Fauzan
                            </td>
                            <td class="px-6 py-4">
                                Poli Umum
                            </td>
                            <td class="px-6 py-4">

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
</section>
@endsection

<!-- Modal Ambil Antrian -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Ambil Antrian
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="$2999" required="" disabled>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option value="" disabled selected hidden>Pilih Poli</option>
                            <option>Poli Umum</option>
                            <option>Poli Gigi</option>
                            <option>Poli THT</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
