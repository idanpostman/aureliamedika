<!-- resources/views/dashboard/rekam_medis/edit.blade.php -->

@extends('dashboard.layout.main')

@section('container')
    <div class="pt-20 pl-4 sm:ml-64">
        <main class="w-full flex-grow">
            <h1 class="text-3xl text-secondary font-bold pb-1">Edit Rekam Medis</h1>

            <form action="{{ route('rekam-medis.update', $rekam->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="nama" value="{{ $rekam->nama }}" class="mt-1 p-2 block w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="no_telpon" class="block text-sm font-medium text-gray-700">Nomor Telpon</label>
                        <input type="text" id="no_telpon" value="{{ $rekam->no_telpon }}" class="mt-1 p-2 block w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="poli" class="block text-sm font-medium text-gray-700">Poli</label>
                        <input type="text" id="poli" value="{{ $rekam->poli }}" class="mt-1 p-2 block w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="diagnosa" class="block text-sm font-medium text-gray-700">Diagnosa</label>
                        <input type="text" name="diagnosa" id="diagnosa" value="{{ $rekam->diagnosa }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800 active:bg-blue-900 focus:outline-none focus:ring focus:border-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Save
                    </button>
                </div>
            </form>
        </main>
    </div>
@endsection
