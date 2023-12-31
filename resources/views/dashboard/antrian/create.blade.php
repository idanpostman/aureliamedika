@extends('dashboard.layout.main')

@section('container')
    <div class="pt-20 pl-4 sm:ml-64">
        <h1 class="text-3xl text-secondary font-bold pb-1">Tambah Antrian</h1>
    </div>

    <div class="pl-4 pr-4 sm:ml-64 relative overflow-x-auto sm:rounded-lg shadow-lg">
        <form action="{{ route('antrian.store') }}" method="post" class="w-full max-w-lg p-6 mx-auto mt-10 bg-white rounded-md shadow-md">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Pasien</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded-md" required>
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

            <!-- Tambahkan kolom lain sesuai kebutuhan -->

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-md">Tambah Antrian</button>
            </div>
        </form>
    </div>
@endsection