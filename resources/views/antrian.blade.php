@extends('layouts.main')

@section('container')
<section id="antrian" class="pt-28 pb-32">
    <div class="container mx-auto">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-bold text-primary text-3xl lg:text-5xl">Informasi Antrian</h2>
            </div>
                <div id="accordion-color" class="w-10/12 lg:w-full mx-auto lg:mx-0" data-accordion="collapse" data-active-classes="bg-[#780000] text-white" data-inactive-classes="text-dark shadow-lg hover:bg-[#780000] hover:text-white">
                    <h2 id="accordion-color-heading-1">
                    <button type="button" class="flex items-center justify-between w-full lg:w-1/2 p-5 font-medium rtl:text-right border border-b border-gray-400 rounded-t-xl  hover:opacity-95 gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                        <span>Ambil Antrian</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="w-full lg:w-1/2 p-5 border border-b-0 border-gray-200 shadow-lg bg-white">
                            <form class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Poliklinik</label>
                                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                            <option value="" disabled selected hidden>Pilih Poli</option>
                                            <option>Poli Umum</option>
                                            <option>Poli Gigi</option>
                                            <option>Poli THT</option>
                                        </select>
                                    </div>
                                </div>
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="submit" class="text-white inline-flex items-center bg-[#780000] hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Ambil Antrian
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
        <div class="w-full mt-11 border-t border-slate-300 ">
        </div>
        <div class="flex flex-wrap  gap-4 lg:-mx-6 lg:grid lg:grid-cols-2">
            <div class="w-full px-10 py-5 my-5 mx-auto max-w-sm lg:max-w-xl bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="flex flex-col items-center pb-10">
                    <h5 class="mb-1 text-xl font-semibold text-secondary">Antrian Anda</h5>
                    <div class="w-full border-t border-slate-300 "></div>
                    <div class="mt-10">
                        <span class="text-4xl lg:text-5xl font-bold">PU2</span>
                    </div>
                </div>
            </div>
            <div class="w-full px-10 py-5 my-5 mx-auto max-w-sm lg:max-w-xl bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="flex flex-col items-center pb-10">
                    <h5 class="mb-1 text-xl font-semibold text-secondary">Antrian Sekarang</h5>
                    <div class="w-full border-t border-slate-300"></div>
                    <div class="mt-10">
                        <span class="text-4xl lg:text-5xl font-bold">PU1</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap gap-4 lg:grid lg:grid-cols-3 ">
            <div class="w-full px-10 py-5 my-5 mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="flex flex-col items-center pb-10">
                    <h5 class="mb-1 text-xl font-semibold text-secondary">Poli Umum</h5>
                    <span class="text-md text-gray-500">Antrian Sekarang</span>
                    <div class="w-full border-t border-slate-300 "></div>
                    <div class="mt-10">
                        <span class="text-4xl font-bold">PU1</span>
                    </div>
                </div>
            </div>
            <div class="w-full px-10 py-5 my-5 mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="flex flex-col items-center pb-10">
                    <h5 class="mb-1 text-xl font-semibold text-secondary">Poli Gigi</h5>
                    <span class="text-md text-gray-500">Antrian Sekarang</span>
                    <div class="w-full border-t border-slate-300 "></div>
                    <div class="mt-10">
                        <span class="text-4xl font-bold">PU1</span>
                    </div>
                </div>
            </div>
            <div class="w-full px-10 py-5 my-5 mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="flex flex-col items-center pb-10">
                    <h5 class="mb-1 text-xl font-semibold text-secondary">Poli THT</h5>
                    <span class="text-md text-gray-500">Antrian Sekarang</span>
                    <div class="w-full border-t border-slate-300 "></div>
                    <div class="mt-10">
                        <span class="text-4xl font-bold">PU1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MODAL --}}
<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-green-700 w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path fill="currentColor" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                </svg>
                <h3 class="text-lg font-normal text-gray-500">Ambil Antrian Berhasil!</h3>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah anda mau mencetaknya?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Ya
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak</button>
            </div>
        </div>
    </div>
</div>

@endsection
