@extends('layouts.main')

@section('container')

<section id="antrian" class="pt-28 pb-32">
    <div class="container mx-auto">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h2 class="font-bold text-primary text-3xl lg:text-5xl">Informasi Antrian</h2>
        </div>
        <div id="accordion-color" class="w-10/12 lg:w-full mx-auto lg:mx-0" data-accordion="collapse"
            data-active-classes="bg-[#780000] text-white" data-inactive-classes="text-dark shadow-lg hover:bg-[#780000] hover:text-white">
            <h2 id="accordion-color-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full lg:w-1/2 p-5 font-medium rtl:text-right border border-b border-gray-400 rounded-t-xl  hover:opacity-95 gap-3"
                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                    aria-controls="accordion-color-body-1">
                    <span>Ambil Antrian</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="w-full lg:w-1/2 p-5 border border-b-0 border-gray-200 shadow-lg bg-white">
                    <form method="post" action="{{ route('antrian.submit') }}" class="p-4 md:p-5" id="antrianForm">
                        @csrf
                            @if (session('success'))
                            <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ms-3 text-sm font-medium">
                                    {{ session('success') }}
                                </div>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                                </div>
                        @endif

                        @if (session('error'))
                        <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ session('error') }}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                            </div>
                        @endif
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" name="nama" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                            <input type="tel" name="no_telp" id="no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="poli" class="block mb-2 text-sm font-medium text-gray-900">Poliklinik</label>
                            <select name="poli" id="poli"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                                <option value="" disabled selected hidden>Pilih Poli</option>
                                @foreach ($polis as $poli)
                                <option value="{{ $poli->nama_poli }}">{{ $poli->nama_poli }}</option>
                                @endforeach
                            </select>
                            @error('poli')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-[#780000] hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Ambil Antrian
                    </button>
                    </form>
                    <!-- Modal toggle button -->
                    <button id="btnAntrianSaya" class="text-white inline-flex items-center bg-[#780000] hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Lihat Antrian Saya
                    </button>
                    <div id="popupContainer" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden">
                        <div id="popupContent" class="bg-white p-8 rounded-lg shadow-lg">
                            <!-- Content will be dynamically added here -->
                            <button id="btnClosePopup" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                                &times; <!-- Close symbol (X) -->
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#btnAntrianSaya').click(function () {
        // Check if the user is authenticated
        if (!{{ Auth::check() }}) {
            // Redirect to the login page or handle authentication as needed
            window.location.href = '/login';
            return;
        }

        // Ambil nama pengguna yang sedang login
        var nama = "{{ Auth::user()->name }}";

        // Lakukan permintaan AJAX untuk mendapatkan nomor antrian dan nama poli
        $.ajax({
            type: 'GET',
            url: '/get-antrian',
            data: { nama: nama },
            success: function (response) {
                try {
                    console.log('Response:', response);

                    // Menampilkan popup
                    $('#popupContent').html(`
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            NOMOR ANTRIAN ANDA
                        </h3>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Nama : ${response.nama}
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Poli : ${response.nama_poli}
                        </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Nomor Antrian : ${response.nomor_antrian}
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <button id="btnClosePopup"
                        class="text-white inline-flex items-center bg-[#780000] hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Tutup
                    </button>
                    <button id="btnGeneratePDF"
                        class="text-white inline-flex items-center bg-[#780000] hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Cetak PDF
                    </button>
                    </div>
                        
                    `);
                    $('#popupContainer').removeClass('hidden');

                    // Menambahkan event listener untuk tombol Cetak Antrian
                    $('#btnGeneratePDF').click(function () {
                        // Membuat permintaan AJAX atau membuka halaman baru untuk membuat PDF
                        var pdfUrl = '/generate-pdf?nama=' + response.nama + '&nomor_antrian=' +
                            response.nomor_antrian + '&nama_poli=' + response.nama_poli;

                        // Buka halaman baru untuk membuat PDF
                        window.open(pdfUrl, '_blank');
                    });

                    // Menambahkan event listener untuk tombol Close
                    $('#btnClosePopup').click(function () {
                        $('#popupContainer').addClass('hidden');
                    });
                } catch (error) {
                    // Handle unexpected response format
                    console.error('Error handling response:', error);
                    alert('Terjadi kesalahan dalam menangani response.');
                }
            },
            error: function (error) {
                console.log(error);
                alert('Terjadi kesalahan dalam melakukan permintaan.');
            }
        });
    });

    // Prevent interactions with elements behind the popup
    $('#popupContainer').click(function (e) {
        if (e.target.id === 'popupContainer') {
            $(this).addClass('hidden');
        }
    });
});

</script>